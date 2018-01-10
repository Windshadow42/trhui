<?php
/**
 * Created by PhpStorm.
 * User: su
 * Date: 2017/12/29
 * Time: 15:29
 */
require_once('./config.php');
require '../vendor/autoload.php';

$payRequestOrderObj = new \trhui\business\PayRequestOrder();
$orders = $payRequestOrderObj->getAllOrder();

?>

<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>支付列表</title>
    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="trhui.js"></script>
</head>

<body>
<div>
    <table border="2">
        <tr>
            <th>商户订单号</th>
            <th>清算通系统订响应单号</th>
            <th>请求金额</th>
            <th>返回金额</th>
            <th>付款用户ID</th>
            <th>支付方式</th>
            <th>支付类型</th>
            <th>支付手续费承担方</th>
            <th>状态</th>
            <th>支付状态</th>
            <th>摘要备注</th>
            <th>请求时间</th>
            <th>支付时间</th>
        </tr>
        <?php foreach ($orders as $item): ?>
            <tr>
                <td><?= isset($item['merOrderId']) ? $item['merOrderId'] : '' ?></td>
                <td><?= isset($item['platformOrderId']) ? $item['platformOrderId'] : '' ?></td>
                <td><?= isset($item['request_amount']) ? $item['request_amount'] : '' ?></td>
                <td><?= isset($item['response_amount']) ? $item['response_amount'] : '' ?></td>
                <td><?= isset($item['payerUserId']) ? $item['payerUserId'] : '' ?></td>
                <td><?= isset($item['transferPayType']) ? $item['transferPayType'] : '' ?></td>
                <td><?= isset($item['topupType']) ? $item['topupType'] : '' ?></td>
                <td><?= isset($item['feePayer']) ? $item['feePayer'] : '' ?></td>
                <td><?= isset($item['status']) ? $item['status'] : '' ?></td>
                <td><?= isset($item['response_status']) ? $item['response_status'] : '' ?></td>
                <td><?= isset($item['remarks']) ? $item['remarks'] : '' ?></td>
                <td><?= isset($item['request_time']) ? date('Y-m-d H:i:s', $item['request_time']) : '' ?></td>
                <td><?= !empty($item['pay_time']) ? date('Y-m-d H:i:s', substr($item['pay_time'], 0, -3)) : '' ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>


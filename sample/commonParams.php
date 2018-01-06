<?php /**
 * Created by PhpStorm.
 * User: su
 * Date: 2018/1/5
 * Time: 19:13
 */
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);

//  项目根目录
defined('ROOT') or define('ROOT', dirname(dirname(__FILE__)) . '/');

//  TODO    证书相关
//  商户平台私钥路径
defined('PRIVATE_KEY_PATH') OR define('PRIVATE_KEY_PATH', ROOT . 'rsa/pkcs8_rsa_private_key.pem');
//  招行清算通公钥路径
defined('PUBLIC_KEY_PATH') OR define('PUBLIC_KEY_PATH', ROOT . 'rsa/tpamPublic.pem');

//  TODO    清算通相关
//  商户号
defined('MER_CHANT_NO') or define('MER_CHANT_NO', 'test');
//  招商清算通服务地址
defined('SERVER_URL') or define('SERVER_URL', 'http://cmbtest.trhui.com/tpam/service/');


//  回调地址
defined('NOTIFY_URL') or define('NOTIFY_URL', 'http://notify.nongline.cn/trhui');
//  前台地址
defined('FRONT_URL') or define('FRONT_URL', 'http://git-dev.com/composer/trhui/sample/front-result.php');


//  商户平台订单号
defined('MER_ORDER_ID') or define('MER_ORDER_ID', date('YmdHis'));
//  商户平台交易订单号
defined('ORDER_ID') or define('ORDER_ID', date('YmdHis'));


//  TODO    用户注册数据
if (true) {
    defined('USER_ID') or define('USER_ID', '509');             //  清算通用户ID
    defined('USER_TYPE') or define('USER_TYPE', '0');           //  授权类型
    defined('MER_USER_ID') or define('MER_USER_ID', '223');     //  商户平台用户ID
    defined('MOBILE') or define('MOBILE', '13000000002');       //  用户手机号
}
if (false) {
    defined('USER_ID') or define('USER_ID', '526');             //  清算通用户ID
    defined('USER_TYPE') or define('USER_TYPE', '0');           //  授权类型
    defined('MER_USER_ID') or define('MER_USER_ID', '224');     //  商户平台用户ID
    defined('MOBILE') or define('MOBILE', '13000000004');       //  用户手机号
}

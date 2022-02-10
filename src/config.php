<?php
// +----------------------------------------------------------------------
// | 支付配置
// +----------------------------------------------------------------------
use Yansongda\Pay\Pay;

return [
    // 支付列表
    'alipay' => [
        // 必填-支付宝分配的 app_id
        'app_id' => '2016082000295641',
        // 必填-应用私钥 字符串或路径
        'app_secret_cert' => '89iZ2iC16H6/6a3YcP+hDZUjiNGQx9cuwi9eJyykvcwhD...',
        // 必填-应用公钥证书 路径
        'app_public_cert_path' => '/Users/yansongda/pay/cert/appCertPublicKey_2016082000295641.crt',
        // 必填-支付宝公钥证书 路径
        'alipay_public_cert_path' => '/Users/yansongda/pay/cert/alipayCertPublicKey_RSA2.crt',
        // 必填-支付宝根证书 路径
        'alipay_root_cert_path' => '/Users/yansongda/pay/cert/alipayRootCert.crt',
        'return_url' => 'https://yansongda.cn/alipay/return',
        'notify_url' => 'https://yansongda.cn/alipay/notify',
        // 选填-服务商模式下的服务商 id，当 mode 为 Pay::MODE_SERVICE 时使用该参数
        'service_provider_id' => '',
        // 选填-默认为正常模式。可选为： MODE_NORMAL, MODE_SANDBOX, MODE_SERVICE
        'mode' => Pay::MODE_NORMAL,
        //是否开启日志
        'log' => 0,
    ],

    'wechat' => [
        // 必填-商户号，服务商模式下为服务商商户号
        'mch_id' => '',
        // 必填-商户秘钥
        'mch_secret_key' => '',
        // 必填-商户私钥 字符串或路径
        'mch_secret_cert' => '',
        // 必填-商户公钥证书路径
        'mch_public_cert_path' => '',
        // 必填
        'notify_url' => 'https://yansongda.cn/wechat/notify',
        // 选填-公众号 的 app_id
        'mp_app_id' => '2016082000291234',
        // 选填-小程序 的 app_id
        'mini_app_id' => '',
        // 选填-app 的 app_id
        'app_id' => '',
        // 选填-合单 app_id
        'combine_app_id' => '',
        // 选填-合单商户号
        'combine_mch_id' => '',
        // 选填-服务商模式下，子公众号 的 app_id
        'sub_mp_app_id' => '',
        // 选填-服务商模式下，子 app 的 app_id
        'sub_app_id' => '',
        // 选填-服务商模式下，子小程序 的 app_id
        'sub_mini_app_id' => '',
        // 选填-服务商模式下，子商户id
        'sub_mch_id' => '',
        // 选填-微信公钥证书路径, optional，强烈建议 php-fpm 模式下配置此参数
        'wechat_public_cert_path' => [
            '45F59D4DABF31918AFCEC556D5D2C6E376675D57' => __DIR__ . '/Cert/wechatPublicKey.crt',
        ],
        // 选填-默认为正常模式。可选为： MODE_NORMAL, MODE_SERVICE
        'mode' => Pay::MODE_NORMAL,
        //是否开启日志
        'log' => 0,
    ],

];

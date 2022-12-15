<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddressGetResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example https://trip-hisv.taobao.com/ding/trustLogin.htm?redirectUrl=https%3A%2F%2Fmarket.m.taobao.com%2Fapp%2Fbtrip-fe%2Frx-alitrip-main%2Fhome.html%3Ffpt%3DbIdentify%2528dingtalk.isv.h5.home%2529%26corpId%3Dding3f9797e277423f14a1320dcb25e91351%26dingUserId%3Dmanager9302%26dingAppId%3D1692%26fit%3Dtrue&token=b73e0b9e-d25a-40f0-aff8-2c2e58da659b
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'url' => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}

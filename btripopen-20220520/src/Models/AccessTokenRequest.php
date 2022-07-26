<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class AccessTokenRequest extends Model
{
    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $appSecret;
    protected $_name = [
        'appKey'    => 'app_key',
        'appSecret' => 'app_secret',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['app_key'] = $this->appKey;
        }
        if (null !== $this->appSecret) {
            $res['app_secret'] = $this->appSecret;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AccessTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['app_key'])) {
            $model->appKey = $map['app_key'];
        }
        if (isset($map['app_secret'])) {
            $model->appSecret = $map['app_secret'];
        }

        return $model;
    }
}

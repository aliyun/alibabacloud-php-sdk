<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\TrafficFxOpen\V20240815\Models;

use AlibabaCloud\Tea\Model;

class GetTokenRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $appKey;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $appSecret;
    protected $_name = [
        'appKey'    => 'appKey',
        'appSecret' => 'appSecret',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['appKey'] = $this->appKey;
        }
        if (null !== $this->appSecret) {
            $res['appSecret'] = $this->appSecret;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appKey'])) {
            $model->appKey = $map['appKey'];
        }
        if (isset($map['appSecret'])) {
            $model->appSecret = $map['appSecret'];
        }

        return $model;
    }
}

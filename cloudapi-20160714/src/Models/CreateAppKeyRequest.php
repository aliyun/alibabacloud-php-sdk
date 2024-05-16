<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateAppKeyRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 111053351
     *
     * @var string
     */
    public $appId;

    /**
     * @example 204203237
     *
     * @var string
     */
    public $appKey;

    /**
     * @example 6f0a4ad7918a4b41a57fc087d5b066d0
     *
     * @var string
     */
    public $appSecret;
    protected $_name = [
        'appId'     => 'AppId',
        'appKey'    => 'AppKey',
        'appSecret' => 'AppSecret',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appSecret) {
            $res['AppSecret'] = $this->appSecret;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppSecret'])) {
            $model->appSecret = $map['AppSecret'];
        }

        return $model;
    }
}

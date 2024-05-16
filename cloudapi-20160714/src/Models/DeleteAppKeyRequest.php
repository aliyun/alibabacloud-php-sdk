<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DeleteAppKeyRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 110840611
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @example 203708622
     *
     * @var string
     */
    public $appKey;
    protected $_name = [
        'appId'  => 'AppId',
        'appKey' => 'AppKey',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAppKeyRequest
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

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models;

use AlibabaCloud\Tea\Model;

class DeleteSecretKeyRequest extends Model
{
    /**
     * @var string
     */
    public $secretKeyId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'secretKeyId'   => 'SecretKeyId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->secretKeyId) {
            $res['SecretKeyId'] = $this->secretKeyId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSecretKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecretKeyId'])) {
            $model->secretKeyId = $map['SecretKeyId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}

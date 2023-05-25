<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DeleteSignatureRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description *   This API is intended for API providers.
     *   This API operation deletes an existing backend signature key.
     *   You cannot delete a key that is bound to an API. To delete the key, you must unbind it first.
     *   The QPS limit on this operation is 50 per user.
     *
     * @example dd05f1c54d6749eda95f9fa6d491449a
     *
     * @var string
     */
    public $signatureId;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'signatureId'   => 'SignatureId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->signatureId) {
            $res['SignatureId'] = $this->signatureId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSignatureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SignatureId'])) {
            $model->signatureId = $map['SignatureId'];
        }

        return $model;
    }
}

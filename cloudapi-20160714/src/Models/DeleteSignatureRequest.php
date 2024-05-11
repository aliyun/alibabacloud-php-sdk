<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DeleteSignatureRequest extends Model
{
    /**
     * @description The security token included in the WebSocket request header. The system uses this token to authenticate the request.
     *
     * @example 9abe3317-3e22-4957-ab9f-dd893d0ac956
     *
     * @var string
     */
    public $securityToken;

    /**
     * @description The ID of the key to be deleted.
     *
     * This parameter is required.
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

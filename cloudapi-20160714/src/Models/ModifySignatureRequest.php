<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifySignatureRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The ID of the signature key that you want to manage.
     *
     * @example dd05f1c54d6749eda95f9fa6d491449a
     *
     * @var string
     */
    public $signatureId;

    /**
     * @description The new Key value of the key. The value must be 6 to 20 characters in length and can contain letters, digits, and underscores (\_). It must start with a letter.
     *
     * @example qwertyuiop
     *
     * @var string
     */
    public $signatureKey;

    /**
     * @description The new name of the key. The name must be 4 to 50 characters in length and can contain letters, digits, and underscores (\_). It must start with a letter.
     *
     * @example backendsignature
     *
     * @var string
     */
    public $signatureName;

    /**
     * @description The new Secret value of the key. The value must be 6 to 30 characters in length and can contain letters, digits, and special characters. Special characters include underscores (\_), at signs (@), number signs (#), exclamation points (!), and asterisks (\*). The value must start with a letter.
     *
     * @example asdfghjkl
     *
     * @var string
     */
    public $signatureSecret;
    protected $_name = [
        'securityToken'   => 'SecurityToken',
        'signatureId'     => 'SignatureId',
        'signatureKey'    => 'SignatureKey',
        'signatureName'   => 'SignatureName',
        'signatureSecret' => 'SignatureSecret',
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
        if (null !== $this->signatureKey) {
            $res['SignatureKey'] = $this->signatureKey;
        }
        if (null !== $this->signatureName) {
            $res['SignatureName'] = $this->signatureName;
        }
        if (null !== $this->signatureSecret) {
            $res['SignatureSecret'] = $this->signatureSecret;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySignatureRequest
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
        if (isset($map['SignatureKey'])) {
            $model->signatureKey = $map['SignatureKey'];
        }
        if (isset($map['SignatureName'])) {
            $model->signatureName = $map['SignatureName'];
        }
        if (isset($map['SignatureSecret'])) {
            $model->signatureSecret = $map['SignatureSecret'];
        }

        return $model;
    }
}

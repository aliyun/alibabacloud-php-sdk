<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateSignatureRequest extends Model
{
    /**
     * @description The security token included in the WebSocket request header. The system uses this token to authenticate the request.
     *
     * @example fa876ffb-caab-4f0a-93b3-3409f2fa5199
     *
     * @var string
     */
    public $securityToken;

    /**
     * @description The Key value of the key. The value must be 6 to 20 characters in length and can contain letters, digits, and underscores (\_). It must start with a letter.
     *
     * @example qwertyuiop
     *
     * @var string
     */
    public $signatureKey;

    /**
     * @description The displayed name of the key. The name must be 4 to 50 characters in length and can contain letters, digits, and underscores (\_). It must start with a letter.
     *
     * @example backendsignature
     *
     * @var string
     */
    public $signatureName;

    /**
     * @description The Secret value of the key. The value must be 6 to 30 characters in length and can contain letters, digits, and special characters. Special characters include underscores (\_), at signs (@), number signs (#), exclamation points (!), and asterisks (\*). The value must start with a letter.
     *
     * @example asdfghjkl
     *
     * @var string
     */
    public $signatureSecret;
    protected $_name = [
        'securityToken'   => 'SecurityToken',
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
     * @return CreateSignatureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
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

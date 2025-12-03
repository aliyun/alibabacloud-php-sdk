<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class ModifySignatureRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $signatureId;

    /**
     * @var string
     */
    public $signatureKey;

    /**
     * @var string
     */
    public $signatureName;

    /**
     * @var string
     */
    public $signatureSecret;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'signatureId' => 'SignatureId',
        'signatureKey' => 'SignatureKey',
        'signatureName' => 'SignatureName',
        'signatureSecret' => 'SignatureSecret',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

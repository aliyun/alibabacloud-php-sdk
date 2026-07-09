<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIDeepSign\V20260511\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\VerifyImageSignatureResponseBody\issuer;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\VerifyImageSignatureResponseBody\manifest;

class VerifyImageSignatureResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var issuer
     */
    public $issuer;

    /**
     * @var bool
     */
    public $issuerTrusted;

    /**
     * @var manifest
     */
    public $manifest;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $verificationState;
    protected $_name = [
        'code' => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'issuer' => 'Issuer',
        'issuerTrusted' => 'IssuerTrusted',
        'manifest' => 'Manifest',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'verificationState' => 'VerificationState',
    ];

    public function validate()
    {
        if (null !== $this->issuer) {
            $this->issuer->validate();
        }
        if (null !== $this->manifest) {
            $this->manifest->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->issuer) {
            $res['Issuer'] = null !== $this->issuer ? $this->issuer->toArray($noStream) : $this->issuer;
        }

        if (null !== $this->issuerTrusted) {
            $res['IssuerTrusted'] = $this->issuerTrusted;
        }

        if (null !== $this->manifest) {
            $res['Manifest'] = null !== $this->manifest ? $this->manifest->toArray($noStream) : $this->manifest;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->verificationState) {
            $res['VerificationState'] = $this->verificationState;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['Issuer'])) {
            $model->issuer = issuer::fromMap($map['Issuer']);
        }

        if (isset($map['IssuerTrusted'])) {
            $model->issuerTrusted = $map['IssuerTrusted'];
        }

        if (isset($map['Manifest'])) {
            $model->manifest = manifest::fromMap($map['Manifest']);
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['VerificationState'])) {
            $model->verificationState = $map['VerificationState'];
        }

        return $model;
    }
}

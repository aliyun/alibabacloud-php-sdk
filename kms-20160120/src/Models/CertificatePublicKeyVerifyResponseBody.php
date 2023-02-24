<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CertificatePublicKeyVerifyResponseBody extends Model
{
    /**
     * @description The ID of the certificate.
     *
     * @example 12345678-1234-1234-1234-12345678****
     *
     * @var string
     */
    public $certificateId;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 5979d897-d69f-4fc9-87dd-f3bb73c40b80
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The verification result. Valid values:
     *
     *   true: The signature is valid.
     *   false: The signature is invalid.
     *
     * @example true
     *
     * @var bool
     */
    public $signatureValid;
    protected $_name = [
        'certificateId'  => 'CertificateId',
        'requestId'      => 'RequestId',
        'signatureValid' => 'SignatureValid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->signatureValid) {
            $res['SignatureValid'] = $this->signatureValid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CertificatePublicKeyVerifyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SignatureValid'])) {
            $model->signatureValid = $map['SignatureValid'];
        }

        return $model;
    }
}

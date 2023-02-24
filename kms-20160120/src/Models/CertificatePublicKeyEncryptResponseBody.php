<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CertificatePublicKeyEncryptResponseBody extends Model
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
     * @description The ciphertext.
     *
     * The value is encoded in Base64.
     * @example ZOyIygCyaOW6Gj****MlNKiuyjfzw=
     *
     * @var string
     */
    public $ciphertextBlob;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 5979d897-d69f-4fc9-87dd-f3bb73c40b80
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'certificateId'  => 'CertificateId',
        'ciphertextBlob' => 'CiphertextBlob',
        'requestId'      => 'RequestId',
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
        if (null !== $this->ciphertextBlob) {
            $res['CiphertextBlob'] = $this->ciphertextBlob;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CertificatePublicKeyEncryptResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['CiphertextBlob'])) {
            $model->ciphertextBlob = $map['CiphertextBlob'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

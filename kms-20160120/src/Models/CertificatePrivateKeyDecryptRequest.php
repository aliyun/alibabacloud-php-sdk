<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CertificatePrivateKeyDecryptRequest extends Model
{
    /**
     * @description The encryption algorithm. Valid values:
     *
     *   RSAES_OAEP_SHA\_1
     *
     *   RSAES_OAEP_SHA\_256
     *
     *   SM2PKE
     *
     * > The SM2PKE encryption algorithm is supported only in regions in mainland China. In these regions, managed hardware security modules (HSMs) are used. For more information, see [Managed HSM overview](~~125803~~).
     * @example RSAES_OAEP_SHA_256
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description The ID of the certificate. The ID must be globally unique in Certificates Manager.
     *
     * @example 12345678-1234-1234-1234-12345678****
     *
     * @var string
     */
    public $certificateId;

    /**
     * @description The data that you want to decrypt.
     *
     * The value is encoded in Base64.
     * @example ZOyIygCyaOW6Gj****MlNKiuyjfzw=
     *
     * @var string
     */
    public $ciphertextBlob;
    protected $_name = [
        'algorithm'      => 'Algorithm',
        'certificateId'  => 'CertificateId',
        'ciphertextBlob' => 'CiphertextBlob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->ciphertextBlob) {
            $res['CiphertextBlob'] = $this->ciphertextBlob;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CertificatePrivateKeyDecryptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['CiphertextBlob'])) {
            $model->ciphertextBlob = $map['CiphertextBlob'];
        }

        return $model;
    }
}

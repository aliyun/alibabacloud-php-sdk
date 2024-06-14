<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CertificatePublicKeyEncryptRequest extends Model
{
    /**
     * @description The encryption algorithm. Valid values:
     *
     *   RSAES_OAEP_SHA_1
     *
     *   RSAES_OAEP_SHA_256
     *
     *   SM2PKE
     *
     * This parameter is required.
     * @example RSAES_OAEP_SHA_256
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description The ID of the certificate. The ID must be globally unique in Certificates Manager.
     *
     * This parameter is required.
     * @example 12345678-1234-1234-1234-12345678****
     *
     * @var string
     */
    public $certificateId;

    /**
     * @description The data that you want to encrypt.
     *
     * The size of data that can be encrypted varies based on the encryption algorithm that you use:
     *
     *   RSAES_OAEP_SHA_1: 214 bytes
     *   RSAES_OAEP_SHA_256: 190 bytes
     *   SM2PKE: 6,047 bytes
     *
     * This parameter is required.
     * @example VGhlIHF1aWNrIGJyb3duIGZveCBqdW1wcyBvdmVyIHRoZSBsYXp5IGRvZy4=
     *
     * @var string
     */
    public $plaintext;
    protected $_name = [
        'algorithm'     => 'Algorithm',
        'certificateId' => 'CertificateId',
        'plaintext'     => 'Plaintext',
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
        if (null !== $this->plaintext) {
            $res['Plaintext'] = $this->plaintext;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CertificatePublicKeyEncryptRequest
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
        if (isset($map['Plaintext'])) {
            $model->plaintext = $map['Plaintext'];
        }

        return $model;
    }
}

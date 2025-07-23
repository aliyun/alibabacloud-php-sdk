<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class DecryptRequest extends Model
{
    /**
     * @description The encryption algorithm. Valid values:
     *
     *   **RSAES_OAEP_SHA_1**
     *   **RSAES_OAEP_SHA_256**
     *   **SM2PKE**
     *
     * This parameter is required.
     *
     * @example RSAESOAEPSHA_1
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description The unique identifier of the certificate. You can call the [ListCert](https://help.aliyun.com/document_detail/455806.html) operation to query the identifier.
     *
     *   If the certificate is an SSL certificate, the value of this parameter must be in the {Certificate ID}-cn-hangzhou format.
     *   If the certificate is a private certificate, the value of this parameter must be the value of the Identifier field for the private certificate.
     *
     * This parameter is required.
     *
     * @example 12345678-1234-1234-1234-12345678****
     *
     * @var string
     */
    public $certIdentifier;

    /**
     * @description The data that you want to decrypt. The value is encoded in Base64.
     *
     * This parameter is required.
     *
     * @example ZOyIygCyaOW6Gj****MlNKiuyjfzw=
     *
     * @var string
     */
    public $ciphertextBlob;

    /**
     * @description The value type of the Message parameter. Valid values:
     *
     *   RAW: The returned result is raw data encoded in UTF-8.
     *   Base64: The returned result is Base64-encoded data. This is the default value.
     *
     * @example Base64
     *
     * @var string
     */
    public $messageType;
    protected $_name = [
        'algorithm' => 'Algorithm',
        'certIdentifier' => 'CertIdentifier',
        'ciphertextBlob' => 'CiphertextBlob',
        'messageType' => 'MessageType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }
        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }
        if (null !== $this->ciphertextBlob) {
            $res['CiphertextBlob'] = $this->ciphertextBlob;
        }
        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DecryptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }
        if (isset($map['CiphertextBlob'])) {
            $model->ciphertextBlob = $map['CiphertextBlob'];
        }
        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
        }

        return $model;
    }
}

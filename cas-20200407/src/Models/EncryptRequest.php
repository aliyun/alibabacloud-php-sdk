<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class EncryptRequest extends Model
{
    /**
     * @description The encryption algorithm. Valid values:
     *
     *   **RSAES_OAEP_SHA_1**
     *   **RSAES_OAEP_SHA_256**
     *   **SM2PKE**
     *
     * This parameter is required.
     * @example RSAESOAEPSHA_1
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description The unique identifier of the certificate. You can call the [ListCert](https://help.aliyun.com/document_detail/455806.html) operation to obtain the identifier.
     *
     *   If the certificate is an SSL certificate, the value of this parameter must be in the {Certificate ID}-cn-hangzhou format.
     *   If the certificate is a private certificate, the value of this parameter must be the value of the Identifier field for the private certificate.
     *
     * This parameter is required.
     * @example 12345678-1234-1234-1234-12345678****
     *
     * @var string
     */
    public $certIdentifier;

    /**
     * @description The value type of the Message parameter. Valid values:
     *
     *   RAW: The value of the Plaintext parameter is directly encrypted. This is the default value.
     *   Base64: The value of the Plaintext parameter is Base64-encoded data. The data is decoded and then encrypted.
     *
     * @example RAW
     *
     * @var string
     */
    public $messageType;

    /**
     * @description The data that you want to encrypt. The value of this parameter can be raw data or Base64-encoded data. For more information, see the description of the MessageType parameter. For example, if the hexadecimal data that you want to encrypt is `[0x31, 0x32, 0x33, 0x34]`, the Base64-encoded data is MTIzNA==. The size of data that can be encrypted varies based on the encryption algorithm that you use. The following list describes the relationship between the encryption algorithms and data sizes:
     *
     *   **RSAES_OAEP_SHA_1**: 214 bytes
     *   **RSAES_OAEP_SHA_256**: 190 bytes
     *   **SM2PKE**: 6,047 bytes
     *
     * This parameter is required.
     * @example 1234***
     *
     * @var string
     */
    public $plaintext;
    protected $_name = [
        'algorithm'      => 'Algorithm',
        'certIdentifier' => 'CertIdentifier',
        'messageType'    => 'MessageType',
        'plaintext'      => 'Plaintext',
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
        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }
        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
        }
        if (null !== $this->plaintext) {
            $res['Plaintext'] = $this->plaintext;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EncryptRequest
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
        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
        }
        if (isset($map['Plaintext'])) {
            $model->plaintext = $map['Plaintext'];
        }

        return $model;
    }
}

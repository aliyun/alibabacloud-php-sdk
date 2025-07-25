<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class VerifyRequest extends Model
{
    /**
     * @description The unique identifier of the certificate. You can call the [ListCert](https://help.aliyun.com/document_detail/455806.html) operation to obtain the unique identifier of a certificate.
     *
     *   If the certificate is an SSL certificate, the value of this parameter must be in the {Certificate ID}-cn-hangzhou format.
     *   If the certificate is a private certificate, the value of this parameter must be the value of the Identifier field for the private certificate.
     *
     * This parameter is required.
     *
     * @example 5870821-cn-hangzhou
     *
     * @var string
     */
    public $certIdentifier;

    /**
     * @description The data for which you want to verify the signature. The value must be encoded in Base64.\\
     * For example, if the hexadecimal data that you want to verify is [0x31, 0x32, 0x33, 0x34], set the parameter to the Base64-encoded value MTIzNA==. If you set MessageType to RAW, the size of the data must be less than 4 KB. If the size of the data is greater than 4 KB, you can set MessageType to DIGEST and set Message to the digest of the data. The digest is also called hash value. You can compute the digest of the data on an on-premises machine. The certificate repository uses your certificate application system to compute the message digest. The message digest algorithm that is used must meet the requirements of the specified signature algorithm. The following signature algorithms require different message digest algorithms:
     *
     *   If the signature algorithm is SHA256withRSA, SHA256withRSA/PSS, or SHA256withECDSA, the message digest algorithm must be SHA-256.
     *   If the signature algorithm is SM3withSM2, the message digest algorithm must be SM3.
     *
     * This parameter is required.
     *
     * @example MTIzNA==
     *
     * @var string
     */
    public $message;

    /**
     * @description The value type of the Message parameter. Valid values:
     *
     *   **RAW**: the raw data. This is the default value.
     *   **DIGEST**: the message digest of the raw data.
     *
     * This parameter is required.
     *
     * @example RAW
     *
     * @var string
     */
    public $messageType;

    /**
     * @description The signature value. The value must be encoded in Base64.
     *
     * This parameter is required.
     *
     * @example eyaC0w3ROK5b3QcHmUtAhMY/sQjKu2t3uBfnf6J/gn7JfZtyxwcCUjzXbw5jmqJQRbj1te670Bshg9kUdanKhtHFhJjU5jX+ZMMBr6pH0gqQDJxR0K0yHXRc0Q5OQoUZ6BfpbI4Wt4jJvJSdCstz1vSg12CfEHS8Kd5qfhItK7Y=
     *
     * @var string
     */
    public $signatureValue;

    /**
     * @description The signature algorithm. Valid values:
     *
     *   **SHA256withRSA**
     *   **SHA256withRSA/PSS**
     *   **SHA256withECDSA**
     *   **SM3withSM2**
     *
     * This parameter is required.
     *
     * @example SHA256withRSA
     *
     * @var string
     */
    public $signingAlgorithm;
    protected $_name = [
        'certIdentifier' => 'CertIdentifier',
        'message' => 'Message',
        'messageType' => 'MessageType',
        'signatureValue' => 'SignatureValue',
        'signingAlgorithm' => 'SigningAlgorithm',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
        }
        if (null !== $this->signatureValue) {
            $res['SignatureValue'] = $this->signatureValue;
        }
        if (null !== $this->signingAlgorithm) {
            $res['SigningAlgorithm'] = $this->signingAlgorithm;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
        }
        if (isset($map['SignatureValue'])) {
            $model->signatureValue = $map['SignatureValue'];
        }
        if (isset($map['SigningAlgorithm'])) {
            $model->signingAlgorithm = $map['SigningAlgorithm'];
        }

        return $model;
    }
}

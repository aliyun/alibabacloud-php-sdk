<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CertificatePublicKeyVerifyRequest extends Model
{
    /**
     * @description The signature algorithm. Valid values:
     *
     *   RSA_PKCS1_SHA_256
     *
     *   RSA_PSS_SHA_256
     *
     *   ECDSA_SHA_256
     *
     *   SM2DSA
     *
     * This parameter is required.
     * @example ECDSA_SHA_256
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
     * @description The raw data that is signed.
     *
     * If the size of the data is greater than 4 KB, you can set the MessageType parameter to DIGEST and set the Message parameter to the digest of the data. The digest is also called hash value. You can compute the digest of the data on an on-premises device. Certificates Manager uses the digest that you compute in your own certificate application system. The message digest algorithm that you use must match the specified signature algorithm. Comply with the following mapping between signature algorithms and message digest algorithms:
     *
     *   If the signature algorithm is RSA_PKCS1_SHA_256, RSA_PSS_SHA_256, or ECDSA_SHA_256, the message digest algorithm must be SHA-256.
     *   If the signature algorithm is SM2DSA, the message digest algorithm must be SM3.
     *
     * This parameter is required.
     * @example VGhlIHF1aWNrIGJyb3duIGZveCBqdW1wcyBvdmVyIHRoZSBsYXp5IGRvZy4=
     *
     * @var string
     */
    public $message;

    /**
     * @description The type of the message. Valid values:
     *
     *   RAW: the raw data. This is the default value.
     *   DIGEST: the message digest (hash value) of the raw data.
     *
     * This parameter is required.
     * @example RAW
     *
     * @var string
     */
    public $messageType;

    /**
     * @description The signature value.
     *
     * This parameter is required.
     * @example ZOyIygCyaOW6Gj****MlNKiuyjfzw=
     *
     * @var string
     */
    public $signatureValue;
    protected $_name = [
        'algorithm'      => 'Algorithm',
        'certificateId'  => 'CertificateId',
        'message'        => 'Message',
        'messageType'    => 'MessageType',
        'signatureValue' => 'SignatureValue',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
        }
        if (null !== $this->signatureValue) {
            $res['SignatureValue'] = $this->signatureValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CertificatePublicKeyVerifyRequest
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
        }
        if (isset($map['SignatureValue'])) {
            $model->signatureValue = $map['SignatureValue'];
        }

        return $model;
    }
}

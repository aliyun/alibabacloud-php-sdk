<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class DescribeCertificateResponseBody extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the certificate.
     *
     * @example acs:kms:cn-hangzhou:159498693826****:certificate/9a28de48-8d8b-484d-a766-dec4****"
     *
     * @var string
     */
    public $arn;

    /**
     * @description The ID of the certificate. The ID must be globally unique in Certificates Manager.
     *
     * @example 9a28de48-8d8b-484d-a766-dec4****
     *
     * @var string
     */
    public $certificateId;

    /**
     * @description The time when the certificate was created.
     *
     * @example 2020-10-13T03:05:03Z
     *
     * @var string
     */
    public $createdAt;

    /**
     * @description Indicates whether the private key of the certificate can be exported for use. Valid values:
     *
     *   true: The private key of the certificate can be exported for use. This is the default value.
     *   false: The private key of the certificate cannot be exported for use.
     *
     * @example true
     *
     * @var bool
     */
    public $exportablePrivateKey;

    /**
     * @description The certificate issuer in the distinguished name (DN) format.
     *
     * @example CN=testCA,OU=kms,O=aliyun,C=CN
     *
     * @var string
     */
    public $issuer;

    /**
     * @description The type of the key.
     *
     * @example RSA_2048
     *
     * @var string
     */
    public $keySpec;

    /**
     * @description The end of the validity period of the certificate.
     *
     * @example 2022-10-13T03:09:00Z
     *
     * @var string
     */
    public $notAfter;

    /**
     * @description The beginning of the validity period of the certificate.
     *
     * @example 2020-10-13T03:09:00Z
     *
     * @var string
     */
    public $notBefore;

    /**
     * @description The ID of the request.
     *
     * @example edb671a3-c5a1-4ebe-a1de-d748b640bdf2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The serial number of the certificate.
     *
     * @example 12345678
     *
     * @var string
     */
    public $serial;

    /**
     * @description The signature algorithm of the certificate. Valid values:
     *
     *   RSA2048-SHA256
     *   ECDSA-SHA256
     *   SM2-SM3
     *
     * @example ECDSA-SHA256
     *
     * @var string
     */
    public $signatureAlgorithm;

    /**
     * @description The status of the certificate. Valid values:
     *
     *   PENDING: The certificate is to be imported.
     *   ACTIVE: The certificate is enabled.
     *   INACTIVE: The certificate is disabled.
     *   REVOKED: The certificate is revoked.
     *
     * @example ACTIVE
     *
     * @var string
     */
    public $status;

    /**
     * @description The subject of the certificate, which is in the DN format.
     *
     * @example CN=userName,OU=aliyun,O=aliyun,C=CN
     *
     * @var string
     */
    public $subject;

    /**
     * @description The alias of the certificate subject.
     *
     * A domain name list is supported. A maximum of 10 domain names are supported.
     * @var string[]
     */
    public $subjectAlternativeNames;

    /**
     * @description The public key identifier of the certificate subject.
     *
     * @example 79 36 26 DE 9F F5 15 E3 56 DC ****
     *
     * @var string
     */
    public $subjectKeyIdentifier;

    /**
     * @description The public key of the certificate.
     *
     * @example -----BEGIN PUBLIC KEY----- MIIBIjA -----END PUBLIC KEY-----
     *
     * @var string
     */
    public $subjectPublicKey;

    /**
     * @description The tag of the certificate.
     *
     * @example [{\"TagKey\":\"S1key1\",\"TagValue\":\"S1val1\"},{\"TagKey\":\"S1key2\",\"TagValue\":\"S2val2\"}]
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The time when the certificate was updated.
     *
     * @example 2020-12-23T06:10:13Z
     *
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'arn'                     => 'Arn',
        'certificateId'           => 'CertificateId',
        'createdAt'               => 'CreatedAt',
        'exportablePrivateKey'    => 'ExportablePrivateKey',
        'issuer'                  => 'Issuer',
        'keySpec'                 => 'KeySpec',
        'notAfter'                => 'NotAfter',
        'notBefore'               => 'NotBefore',
        'requestId'               => 'RequestId',
        'serial'                  => 'Serial',
        'signatureAlgorithm'      => 'SignatureAlgorithm',
        'status'                  => 'Status',
        'subject'                 => 'Subject',
        'subjectAlternativeNames' => 'SubjectAlternativeNames',
        'subjectKeyIdentifier'    => 'SubjectKeyIdentifier',
        'subjectPublicKey'        => 'SubjectPublicKey',
        'tags'                    => 'Tags',
        'updatedAt'               => 'UpdatedAt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->exportablePrivateKey) {
            $res['ExportablePrivateKey'] = $this->exportablePrivateKey;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->keySpec) {
            $res['KeySpec'] = $this->keySpec;
        }
        if (null !== $this->notAfter) {
            $res['NotAfter'] = $this->notAfter;
        }
        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serial) {
            $res['Serial'] = $this->serial;
        }
        if (null !== $this->signatureAlgorithm) {
            $res['SignatureAlgorithm'] = $this->signatureAlgorithm;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->subjectAlternativeNames) {
            $res['SubjectAlternativeNames'] = $this->subjectAlternativeNames;
        }
        if (null !== $this->subjectKeyIdentifier) {
            $res['SubjectKeyIdentifier'] = $this->subjectKeyIdentifier;
        }
        if (null !== $this->subjectPublicKey) {
            $res['SubjectPublicKey'] = $this->subjectPublicKey;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCertificateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['ExportablePrivateKey'])) {
            $model->exportablePrivateKey = $map['ExportablePrivateKey'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['KeySpec'])) {
            $model->keySpec = $map['KeySpec'];
        }
        if (isset($map['NotAfter'])) {
            $model->notAfter = $map['NotAfter'];
        }
        if (isset($map['NotBefore'])) {
            $model->notBefore = $map['NotBefore'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Serial'])) {
            $model->serial = $map['Serial'];
        }
        if (isset($map['SignatureAlgorithm'])) {
            $model->signatureAlgorithm = $map['SignatureAlgorithm'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['SubjectAlternativeNames'])) {
            if (!empty($map['SubjectAlternativeNames'])) {
                $model->subjectAlternativeNames = $map['SubjectAlternativeNames'];
            }
        }
        if (isset($map['SubjectKeyIdentifier'])) {
            $model->subjectKeyIdentifier = $map['SubjectKeyIdentifier'];
        }
        if (isset($map['SubjectPublicKey'])) {
            $model->subjectPublicKey = $map['SubjectPublicKey'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}

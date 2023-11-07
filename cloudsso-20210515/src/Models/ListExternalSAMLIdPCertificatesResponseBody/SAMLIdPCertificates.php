<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListExternalSAMLIdPCertificatesResponseBody;

use AlibabaCloud\Tea\Model;

class SAMLIdPCertificates extends Model
{
    /**
     * @description The ID of the certificate.
     *
     * @example idp-c-00dt9gnl7fmjaw9c****
     *
     * @var string
     */
    public $certificateId;

    /**
     * @description The issuer of the certificate.
     *
     * @example 1.2.840.113549.1.9.1=#160d696e666f406f6b74612e63****,CN=dev-xxxxxx,OU=SSOProvider,O=Okta,L=San Francisco,ST=California,C=US
     *
     * @var string
     */
    public $issuer;

    /**
     * @description The time when the certificate expires.
     *
     * @example 2030-06-23T07:04:37Z
     *
     * @var string
     */
    public $notAfter;

    /**
     * @description The time when the certificate was created.
     *
     * @example 2020-06-23T07:03:37Z
     *
     * @var string
     */
    public $notBefore;

    /**
     * @description The public key of the certificate. The value of this parameter is in the PEM format and is Base64-encoded.
     *
     * @example MIIBIjANBgkqhkiG****
     *
     * @var string
     */
    public $publicKey;

    /**
     * @description The serial number of the certificate.
     *
     * @example 159289587****
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @description The signature algorithm of the certificate.
     *
     * @example SHA256withRSA
     *
     * @var string
     */
    public $signatureAlgorithm;

    /**
     * @description The subject of the certificate.
     *
     * @example 1.2.840.113549.1.9.1=#160d696e666f406f6b74612e63****,CN=dev-xxxxxx,OU=SSOProvider,O=Okta,L=San Francisco,ST=California,C=US
     *
     * @var string
     */
    public $subject;

    /**
     * @description The version of the certificate.
     *
     * @example 3
     *
     * @var int
     */
    public $version;

    /**
     * @description The X.509 certificate in the PEM format.
     *
     * @example MIIDpDCCAoygAwIBAgIG****
     *
     * @var string
     */
    public $x509Certificate;
    protected $_name = [
        'certificateId'      => 'CertificateId',
        'issuer'             => 'Issuer',
        'notAfter'           => 'NotAfter',
        'notBefore'          => 'NotBefore',
        'publicKey'          => 'PublicKey',
        'serialNumber'       => 'SerialNumber',
        'signatureAlgorithm' => 'SignatureAlgorithm',
        'subject'            => 'Subject',
        'version'            => 'Version',
        'x509Certificate'    => 'X509Certificate',
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
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->notAfter) {
            $res['NotAfter'] = $this->notAfter;
        }
        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
        }
        if (null !== $this->publicKey) {
            $res['PublicKey'] = $this->publicKey;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->signatureAlgorithm) {
            $res['SignatureAlgorithm'] = $this->signatureAlgorithm;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->x509Certificate) {
            $res['X509Certificate'] = $this->x509Certificate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SAMLIdPCertificates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['NotAfter'])) {
            $model->notAfter = $map['NotAfter'];
        }
        if (isset($map['NotBefore'])) {
            $model->notBefore = $map['NotBefore'];
        }
        if (isset($map['PublicKey'])) {
            $model->publicKey = $map['PublicKey'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['SignatureAlgorithm'])) {
            $model->signatureAlgorithm = $map['SignatureAlgorithm'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['X509Certificate'])) {
            $model->x509Certificate = $map['X509Certificate'];
        }

        return $model;
    }
}

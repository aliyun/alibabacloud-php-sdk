<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnSMCertificateDetailResponseBody extends Model
{
    /**
     * @example 2022-08-31T09:42:28Z
     *
     * @var string
     */
    public $certExpireTime;

    /**
     * @example 648****-cn-hangzhou
     *
     * @var string
     */
    public $certIdentifier;

    /**
     * @example yourCertName
     *
     * @var string
     */
    public $certName;

    /**
     * @example DigiCert Inc
     *
     * @var string
     */
    public $certOrg;

    /**
     * @example example.com
     *
     * @var string
     */
    public $commonName;

    /**
     * @example --BEGIN CERTIFICATE-----***-----END CERTIFICATE--
     *
     * @var string
     */
    public $encryptCertificate;

    /**
     * @example A7C69682-7F88-40DD-A198-10D0309E439D
     *
     * @var string
     */
    public $requestId;

    /**
     * @example ***.example.com
     *
     * @var string
     */
    public $sans;

    /**
     * @example --BEGIN CERTIFICATE-----***-----END CERTIFICATE--
     *
     * @var string
     */
    public $signCertificate;
    protected $_name = [
        'certExpireTime'     => 'CertExpireTime',
        'certIdentifier'     => 'CertIdentifier',
        'certName'           => 'CertName',
        'certOrg'            => 'CertOrg',
        'commonName'         => 'CommonName',
        'encryptCertificate' => 'EncryptCertificate',
        'requestId'          => 'RequestId',
        'sans'               => 'Sans',
        'signCertificate'    => 'SignCertificate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certExpireTime) {
            $res['CertExpireTime'] = $this->certExpireTime;
        }
        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->certOrg) {
            $res['CertOrg'] = $this->certOrg;
        }
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }
        if (null !== $this->encryptCertificate) {
            $res['EncryptCertificate'] = $this->encryptCertificate;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sans) {
            $res['Sans'] = $this->sans;
        }
        if (null !== $this->signCertificate) {
            $res['SignCertificate'] = $this->signCertificate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnSMCertificateDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertExpireTime'])) {
            $model->certExpireTime = $map['CertExpireTime'];
        }
        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CertOrg'])) {
            $model->certOrg = $map['CertOrg'];
        }
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }
        if (isset($map['EncryptCertificate'])) {
            $model->encryptCertificate = $map['EncryptCertificate'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Sans'])) {
            $model->sans = $map['Sans'];
        }
        if (isset($map['SignCertificate'])) {
            $model->signCertificate = $map['SignCertificate'];
        }

        return $model;
    }
}

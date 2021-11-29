<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCdnSMCertificateDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $certExpireTime;

    /**
     * @var string
     */
    public $certIdentifier;

    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $certOrg;

    /**
     * @var string
     */
    public $commonName;

    /**
     * @var string
     */
    public $encryptCertificate;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sans;

    /**
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
     * @return DescribeCdnSMCertificateDetailResponseBody
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

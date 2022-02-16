<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200619\Models\DescribeSSLCertificateMatchDomainListResponseBody;

use AlibabaCloud\Tea\Model;

class certMetaList extends Model
{
    /**
     * @var int
     */
    public $afterDate;

    /**
     * @var string
     */
    public $algorithm;

    /**
     * @var int
     */
    public $beforeDate;

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
    public $commonName;

    /**
     * @var bool
     */
    public $domainMatchCert;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var int
     */
    public $keySize;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $sans;

    /**
     * @var string
     */
    public $serialNo;

    /**
     * @var string
     */
    public $sha2;

    /**
     * @var string
     */
    public $signAlgorithm;
    protected $_name = [
        'afterDate'       => 'AfterDate',
        'algorithm'       => 'Algorithm',
        'beforeDate'      => 'BeforeDate',
        'certIdentifier'  => 'CertIdentifier',
        'certName'        => 'CertName',
        'commonName'      => 'CommonName',
        'domainMatchCert' => 'DomainMatchCert',
        'issuer'          => 'Issuer',
        'keySize'         => 'KeySize',
        'md5'             => 'Md5',
        'sans'            => 'Sans',
        'serialNo'        => 'SerialNo',
        'sha2'            => 'Sha2',
        'signAlgorithm'   => 'SignAlgorithm',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->afterDate) {
            $res['AfterDate'] = $this->afterDate;
        }
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }
        if (null !== $this->beforeDate) {
            $res['BeforeDate'] = $this->beforeDate;
        }
        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }
        if (null !== $this->domainMatchCert) {
            $res['DomainMatchCert'] = $this->domainMatchCert;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->keySize) {
            $res['KeySize'] = $this->keySize;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->sans) {
            $res['Sans'] = $this->sans;
        }
        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }
        if (null !== $this->sha2) {
            $res['Sha2'] = $this->sha2;
        }
        if (null !== $this->signAlgorithm) {
            $res['SignAlgorithm'] = $this->signAlgorithm;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certMetaList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AfterDate'])) {
            $model->afterDate = $map['AfterDate'];
        }
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['BeforeDate'])) {
            $model->beforeDate = $map['BeforeDate'];
        }
        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }
        if (isset($map['DomainMatchCert'])) {
            $model->domainMatchCert = $map['DomainMatchCert'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['KeySize'])) {
            $model->keySize = $map['KeySize'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['Sans'])) {
            $model->sans = $map['Sans'];
        }
        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }
        if (isset($map['Sha2'])) {
            $model->sha2 = $map['Sha2'];
        }
        if (isset($map['SignAlgorithm'])) {
            $model->signAlgorithm = $map['SignAlgorithm'];
        }

        return $model;
    }
}

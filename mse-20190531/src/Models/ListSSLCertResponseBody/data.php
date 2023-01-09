<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListSSLCertResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The validation time.
     *
     * @example 2021-04-01 02:35:12
     *
     * @var string
     */
    public $afterDate;

    /**
     * @description The algorithm.
     *
     * @example test
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description The expiration time.
     *
     * @example 2031-03-30 02:35:12
     *
     * @var string
     */
    public $beforeDate;

    /**
     * @description The ID of the certificate.
     *
     * @example 1234
     *
     * @var string
     */
    public $certIdentifier;

    /**
     * @description The name of the certificate.
     *
     * @example test.com
     *
     * @var string
     */
    public $certName;

    /**
     * @description The domain name with which the certificate is associated.
     *
     * @example *.test.com
     *
     * @var string
     */
    public $commonName;

    /**
     * @description The validation time.
     *
     * @example 2021-04-01 02:35:12
     *
     * @var string
     */
    public $gmtAfter;

    /**
     * @description The expiration time.
     *
     * @example 2031-03-30 02:35:12
     *
     * @var string
     */
    public $gmtBefore;

    /**
     * @description The issuer.
     *
     * @example test
     *
     * @var string
     */
    public $issuer;

    /**
     * @description The SSL certificate.
     *
     * @example SSL
     *
     * @var string
     */
    public $sans;
    protected $_name = [
        'afterDate'      => 'AfterDate',
        'algorithm'      => 'Algorithm',
        'beforeDate'     => 'BeforeDate',
        'certIdentifier' => 'CertIdentifier',
        'certName'       => 'CertName',
        'commonName'     => 'CommonName',
        'gmtAfter'       => 'GmtAfter',
        'gmtBefore'      => 'GmtBefore',
        'issuer'         => 'Issuer',
        'sans'           => 'Sans',
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
        if (null !== $this->gmtAfter) {
            $res['GmtAfter'] = $this->gmtAfter;
        }
        if (null !== $this->gmtBefore) {
            $res['GmtBefore'] = $this->gmtBefore;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->sans) {
            $res['Sans'] = $this->sans;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['GmtAfter'])) {
            $model->gmtAfter = $map['GmtAfter'];
        }
        if (isset($map['GmtBefore'])) {
            $model->gmtBefore = $map['GmtBefore'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['Sans'])) {
            $model->sans = $map['Sans'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListSSLCertResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $afterDate;

    /**
     * @var string
     */
    public $algorithm;

    /**
     * @var string
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
     * @var string
     */
    public $gmtAfter;

    /**
     * @var string
     */
    public $gmtBefore;

    /**
     * @var string
     */
    public $issuer;

    /**
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayDomainDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
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
     * @var int
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayUniqueId;

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
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var bool
     */
    public $mustHttps;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $sans;
    protected $_name = [
        'afterDate'       => 'AfterDate',
        'algorithm'       => 'Algorithm',
        'beforeDate'      => 'BeforeDate',
        'certIdentifier'  => 'CertIdentifier',
        'certName'        => 'CertName',
        'commonName'      => 'CommonName',
        'gatewayId'       => 'GatewayId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'gmtAfter'        => 'GmtAfter',
        'gmtBefore'       => 'GmtBefore',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'id'              => 'Id',
        'issuer'          => 'Issuer',
        'mustHttps'       => 'MustHttps',
        'name'            => 'Name',
        'protocol'        => 'Protocol',
        'sans'            => 'Sans',
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
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->gmtAfter) {
            $res['GmtAfter'] = $this->gmtAfter;
        }
        if (null !== $this->gmtBefore) {
            $res['GmtBefore'] = $this->gmtBefore;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->mustHttps) {
            $res['MustHttps'] = $this->mustHttps;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
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
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['GmtAfter'])) {
            $model->gmtAfter = $map['GmtAfter'];
        }
        if (isset($map['GmtBefore'])) {
            $model->gmtBefore = $map['GmtBefore'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['MustHttps'])) {
            $model->mustHttps = $map['MustHttps'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['Sans'])) {
            $model->sans = $map['Sans'];
        }

        return $model;
    }
}

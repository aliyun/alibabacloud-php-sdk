<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayDomainDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The start time.
     *
     * @example 2021-04-01 02:35:12
     *
     * @var int
     */
    public $afterDate;

    /**
     * @description The algorithm.
     *
     * @example RSA
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description The expiration time.
     *
     * @example 2021-04-01 02:35:12
     *
     * @var int
     */
    public $beforeDate;

    /**
     * @description The ID of the certificate.
     *
     * @example 234-cn-hangzhou
     *
     * @var string
     */
    public $certIdentifier;

    /**
     * @description The name of the certificate.
     *
     * @example test
     *
     * @var string
     */
    public $certName;

    /**
     * @description The public domain name.
     *
     * @example name
     *
     * @var string
     */
    public $commonName;

    /**
     * @description The ID of the gateway.
     *
     * @example 1
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-7ea3da97b96543e19f6c597cd4a9****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The start time.
     *
     * @example 2021-04-01 02:35:12
     *
     * @var string
     */
    public $gmtAfter;

    /**
     * @description The expiration time.
     *
     * @example 2021-04-01 02:35:12
     *
     * @var string
     */
    public $gmtBefore;

    /**
     * @description The creation time.
     *
     * @example 2022-01-07T10:07:57.000+0000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The update time.
     *
     * @example 2022-01-07T10:07:57.000+0000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description Indicates whether `HTTP/2` is enabled.
     *
     *   `open`: `HTTP/2` is enabled.
     *   `close`: `HTTP/2` is disabled.
     *   `globalConfig`: Global configurations are used.
     *
     * @example close
     *
     * @var string
     */
    public $http2;

    /**
     * @description ID.
     *
     * @example 12
     *
     * @var int
     */
    public $id;

    /**
     * @description The issuer.
     *
     * @example Istio
     *
     * @var string
     */
    public $issuer;

    /**
     * @description Indicates whether HTTPS is forcibly used.
     *
     * @example true
     *
     * @var bool
     */
    public $mustHttps;

    /**
     * @description The domain name.
     *
     * @example test.com
     *
     * @var string
     */
    public $name;

    /**
     * @description The protocol of the gateway.
     *
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The name of the extended field.
     *
     * @example test.com
     *
     * @var string
     */
    public $sans;

    /**
     * @description The maximum version of Transport Layer Security (TLS).
     *
     * @example TLS 1.3
     *
     * @var string
     */
    public $tlsMax;

    /**
     * @description The minimum version of TLS.
     *
     * @example TLS 1.0
     *
     * @var string
     */
    public $tlsMin;
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
        'http2'           => 'Http2',
        'id'              => 'Id',
        'issuer'          => 'Issuer',
        'mustHttps'       => 'MustHttps',
        'name'            => 'Name',
        'protocol'        => 'Protocol',
        'sans'            => 'Sans',
        'tlsMax'          => 'TlsMax',
        'tlsMin'          => 'TlsMin',
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
        if (null !== $this->http2) {
            $res['Http2'] = $this->http2;
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
        if (null !== $this->tlsMax) {
            $res['TlsMax'] = $this->tlsMax;
        }
        if (null !== $this->tlsMin) {
            $res['TlsMin'] = $this->tlsMin;
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
        if (isset($map['Http2'])) {
            $model->http2 = $map['Http2'];
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
        if (isset($map['TlsMax'])) {
            $model->tlsMax = $map['TlsMax'];
        }
        if (isset($map['TlsMin'])) {
            $model->tlsMin = $map['TlsMin'];
        }

        return $model;
    }
}

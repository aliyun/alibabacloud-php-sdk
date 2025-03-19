<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetDomainResponseBody;

use AlibabaCloud\SDK\APIG\V20240327\Models\GetDomainResponseBody\data\statisticsInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\TlsCipherSuitesConfig;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Encryption algorithm name
     *
     * @example RSA
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description CA certificate identifier
     *
     * @example 876****-cn-hangzhou
     *
     * @var string
     */
    public $caCertIdentifier;

    /**
     * @description Certificate Identifier
     *
     * @example 645****-cn-hangzhou
     *
     * @var string
     */
    public $certIdentifier;

    /**
     * @description Certificate name
     *
     * @example test-cert
     *
     * @var string
     */
    public $certName;

    /**
     * @description Client CA Cert
     *
     * @example -----BEGIN CERTIFICATE-----
     * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx/mpTQwDQYJKoZIhvcNAQEL
     * BxSbrGeJ8i0576Gn7Qezyho9abZOUhGaPeoB
     * AIHWWl428uUSG/xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
     * yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy+ZMJ8r4swA4swHwYDVR0jBBgwFoAU
     * qroVyYKk7ylhcSn+ZMJ8r4swA4swDwYDVR0TAQH/BAUwAwEB/zANBgkqhkiG9w0B
     * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx=
     * -----END CERTIFICATE-----
     *
     * @var string
     */
    public $clientCACert;

    /**
     * @description Where it was created from.
     *
     * @example Console
     *
     * @var string
     */
    public $createFrom;

    /**
     * @description Creation timestamp.
     *
     * @example 1719386834548
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description Whether it is the default domain.
     *
     * @example false
     *
     * @var bool
     */
    public $default;

    /**
     * @description Domain ID.
     *
     * @example d-cq1m3utlhtgvgkv7sitg
     *
     * @var string
     */
    public $domainId;

    /**
     * @description Setting for HTTPS protocol type, whether to enable forced HTTPS redirection.
     *
     * @example false
     *
     * @var bool
     */
    public $forceHttps;

    /**
     * @description HTTP/2 setting.
     *
     * @example Open
     *
     * @var string
     */
    public $http2Option;

    /**
     * @description Certificate issuer.
     *
     * @example Alibaba
     *
     * @var string
     */
    public $issuer;

    /**
     * @description true
     *
     * @example false
     *
     * @var bool
     */
    public $mTLSEnabled;

    /**
     * @description Domain name.
     *
     * @example abc.com
     *
     * @var string
     */
    public $name;

    /**
     * @description Certificate expiration time.
     *
     * @example 1719386834548
     *
     * @var int
     */
    public $notAfterTimstamp;

    /**
     * @description Certificate effective time.
     *
     * @example 1719386834548
     *
     * @var int
     */
    public $notBeforeTimestamp;

    /**
     * @description The protocol types supported by the domain.
     *
     * - HTTP: Supports only HTTP protocol.
     * - HTTPS: Supports only HTTPS protocol.
     *
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aekzvlxzgo5b4si
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description All domain names bound to the certificate.
     *
     * @example aliyun.com
     *
     * @var string
     */
    public $sans;

    /**
     * @description The array of domain related resource information
     *
     * @var statisticsInfo
     */
    public $statisticsInfo;

    /**
     * @description The TLS cipher suites config.
     *
     * @var TlsCipherSuitesConfig
     */
    public $tlsCipherSuitesConfig;

    /**
     * @description Maximum TLS protocol version, supports up to TLS 1.3.
     *
     * @example TLS 1.3
     *
     * @var string
     */
    public $tlsMax;

    /**
     * @description Minimum TLS protocol version, supports down to TLS 1.0.
     *
     * @example TLS 1.0
     *
     * @var string
     */
    public $tlsMin;

    /**
     * @description Update timestamp.
     *
     * @example 1719386834548
     *
     * @var int
     */
    public $updatetimestamp;
    protected $_name = [
        'algorithm' => 'algorithm',
        'caCertIdentifier' => 'caCertIdentifier',
        'certIdentifier' => 'certIdentifier',
        'certName' => 'certName',
        'clientCACert' => 'clientCACert',
        'createFrom' => 'createFrom',
        'createTimestamp' => 'createTimestamp',
        'default' => 'default',
        'domainId' => 'domainId',
        'forceHttps' => 'forceHttps',
        'http2Option' => 'http2Option',
        'issuer' => 'issuer',
        'mTLSEnabled' => 'mTLSEnabled',
        'name' => 'name',
        'notAfterTimstamp' => 'notAfterTimstamp',
        'notBeforeTimestamp' => 'notBeforeTimestamp',
        'protocol' => 'protocol',
        'resourceGroupId' => 'resourceGroupId',
        'sans' => 'sans',
        'statisticsInfo' => 'statisticsInfo',
        'tlsCipherSuitesConfig' => 'tlsCipherSuitesConfig',
        'tlsMax' => 'tlsMax',
        'tlsMin' => 'tlsMin',
        'updatetimestamp' => 'updatetimestamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['algorithm'] = $this->algorithm;
        }
        if (null !== $this->caCertIdentifier) {
            $res['caCertIdentifier'] = $this->caCertIdentifier;
        }
        if (null !== $this->certIdentifier) {
            $res['certIdentifier'] = $this->certIdentifier;
        }
        if (null !== $this->certName) {
            $res['certName'] = $this->certName;
        }
        if (null !== $this->clientCACert) {
            $res['clientCACert'] = $this->clientCACert;
        }
        if (null !== $this->createFrom) {
            $res['createFrom'] = $this->createFrom;
        }
        if (null !== $this->createTimestamp) {
            $res['createTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->default) {
            $res['default'] = $this->default;
        }
        if (null !== $this->domainId) {
            $res['domainId'] = $this->domainId;
        }
        if (null !== $this->forceHttps) {
            $res['forceHttps'] = $this->forceHttps;
        }
        if (null !== $this->http2Option) {
            $res['http2Option'] = $this->http2Option;
        }
        if (null !== $this->issuer) {
            $res['issuer'] = $this->issuer;
        }
        if (null !== $this->mTLSEnabled) {
            $res['mTLSEnabled'] = $this->mTLSEnabled;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->notAfterTimstamp) {
            $res['notAfterTimstamp'] = $this->notAfterTimstamp;
        }
        if (null !== $this->notBeforeTimestamp) {
            $res['notBeforeTimestamp'] = $this->notBeforeTimestamp;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sans) {
            $res['sans'] = $this->sans;
        }
        if (null !== $this->statisticsInfo) {
            $res['statisticsInfo'] = null !== $this->statisticsInfo ? $this->statisticsInfo->toMap() : null;
        }
        if (null !== $this->tlsCipherSuitesConfig) {
            $res['tlsCipherSuitesConfig'] = null !== $this->tlsCipherSuitesConfig ? $this->tlsCipherSuitesConfig->toMap() : null;
        }
        if (null !== $this->tlsMax) {
            $res['tlsMax'] = $this->tlsMax;
        }
        if (null !== $this->tlsMin) {
            $res['tlsMin'] = $this->tlsMin;
        }
        if (null !== $this->updatetimestamp) {
            $res['updatetimestamp'] = $this->updatetimestamp;
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
        if (isset($map['algorithm'])) {
            $model->algorithm = $map['algorithm'];
        }
        if (isset($map['caCertIdentifier'])) {
            $model->caCertIdentifier = $map['caCertIdentifier'];
        }
        if (isset($map['certIdentifier'])) {
            $model->certIdentifier = $map['certIdentifier'];
        }
        if (isset($map['certName'])) {
            $model->certName = $map['certName'];
        }
        if (isset($map['clientCACert'])) {
            $model->clientCACert = $map['clientCACert'];
        }
        if (isset($map['createFrom'])) {
            $model->createFrom = $map['createFrom'];
        }
        if (isset($map['createTimestamp'])) {
            $model->createTimestamp = $map['createTimestamp'];
        }
        if (isset($map['default'])) {
            $model->default = $map['default'];
        }
        if (isset($map['domainId'])) {
            $model->domainId = $map['domainId'];
        }
        if (isset($map['forceHttps'])) {
            $model->forceHttps = $map['forceHttps'];
        }
        if (isset($map['http2Option'])) {
            $model->http2Option = $map['http2Option'];
        }
        if (isset($map['issuer'])) {
            $model->issuer = $map['issuer'];
        }
        if (isset($map['mTLSEnabled'])) {
            $model->mTLSEnabled = $map['mTLSEnabled'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['notAfterTimstamp'])) {
            $model->notAfterTimstamp = $map['notAfterTimstamp'];
        }
        if (isset($map['notBeforeTimestamp'])) {
            $model->notBeforeTimestamp = $map['notBeforeTimestamp'];
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['sans'])) {
            $model->sans = $map['sans'];
        }
        if (isset($map['statisticsInfo'])) {
            $model->statisticsInfo = statisticsInfo::fromMap($map['statisticsInfo']);
        }
        if (isset($map['tlsCipherSuitesConfig'])) {
            $model->tlsCipherSuitesConfig = TlsCipherSuitesConfig::fromMap($map['tlsCipherSuitesConfig']);
        }
        if (isset($map['tlsMax'])) {
            $model->tlsMax = $map['tlsMax'];
        }
        if (isset($map['tlsMin'])) {
            $model->tlsMin = $map['tlsMin'];
        }
        if (isset($map['updatetimestamp'])) {
            $model->updatetimestamp = $map['updatetimestamp'];
        }

        return $model;
    }
}

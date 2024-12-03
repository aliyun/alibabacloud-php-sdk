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
     * @description Cloud Shield CA certificate identity.
     *
     * @example 223576-cn-hangzhou
     *
     * @var string
     */
    public $caCertIndentifier;

    /**
     * @description Cloud Shield certificate identity.
     *
     * @example 123576-cn-hangzhou
     *
     * @var string
     */
    public $certIndentifier;

    /**
     * @description Certificate name
     *
     * @example test-cert
     *
     * @var string
     */
    public $certName;

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
     * - HTTPS: Supports only HTTPS protocol.
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
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
     * @var statisticsInfo
     */
    public $statisticsInfo;

    /**
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
        'algorithm'             => 'algorithm',
        'caCertIndentifier'     => 'caCertIndentifier',
        'certIndentifier'       => 'certIndentifier',
        'certName'              => 'certName',
        'createFrom'            => 'createFrom',
        'createTimestamp'       => 'createTimestamp',
        'default'               => 'default',
        'domainId'              => 'domainId',
        'forceHttps'            => 'forceHttps',
        'http2Option'           => 'http2Option',
        'issuer'                => 'issuer',
        'name'                  => 'name',
        'notAfterTimstamp'      => 'notAfterTimstamp',
        'notBeforeTimestamp'    => 'notBeforeTimestamp',
        'protocol'              => 'protocol',
        'resourceGroupId'       => 'resourceGroupId',
        'sans'                  => 'sans',
        'statisticsInfo'        => 'statisticsInfo',
        'tlsCipherSuitesConfig' => 'tlsCipherSuitesConfig',
        'tlsMax'                => 'tlsMax',
        'tlsMin'                => 'tlsMin',
        'updatetimestamp'       => 'updatetimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['algorithm'] = $this->algorithm;
        }
        if (null !== $this->caCertIndentifier) {
            $res['caCertIndentifier'] = $this->caCertIndentifier;
        }
        if (null !== $this->certIndentifier) {
            $res['certIndentifier'] = $this->certIndentifier;
        }
        if (null !== $this->certName) {
            $res['certName'] = $this->certName;
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
        if (isset($map['caCertIndentifier'])) {
            $model->caCertIndentifier = $map['caCertIndentifier'];
        }
        if (isset($map['certIndentifier'])) {
            $model->certIndentifier = $map['certIndentifier'];
        }
        if (isset($map['certName'])) {
            $model->certName = $map['certName'];
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

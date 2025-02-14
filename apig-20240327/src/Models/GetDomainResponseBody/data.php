<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetDomainResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetDomainResponseBody\data\statisticsInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\TlsCipherSuitesConfig;

class data extends Model
{
    /**
     * @var string
     */
    public $algorithm;
    /**
     * @var string
     */
    public $caCertIdentifier;
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
    public $createFrom;
    /**
     * @var int
     */
    public $createTimestamp;
    /**
     * @var bool
     */
    public $default;
    /**
     * @var string
     */
    public $domainId;
    /**
     * @var bool
     */
    public $forceHttps;
    /**
     * @var string
     */
    public $http2Option;
    /**
     * @var string
     */
    public $issuer;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $notAfterTimstamp;
    /**
     * @var int
     */
    public $notBeforeTimestamp;
    /**
     * @var string
     */
    public $protocol;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
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
     * @var string
     */
    public $tlsMax;
    /**
     * @var string
     */
    public $tlsMin;
    /**
     * @var int
     */
    public $updatetimestamp;
    protected $_name = [
        'algorithm'             => 'algorithm',
        'caCertIdentifier'      => 'caCertIdentifier',
        'certIdentifier'        => 'certIdentifier',
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
        if (null !== $this->statisticsInfo) {
            $this->statisticsInfo->validate();
        }
        if (null !== $this->tlsCipherSuitesConfig) {
            $this->tlsCipherSuitesConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['statisticsInfo'] = null !== $this->statisticsInfo ? $this->statisticsInfo->toArray($noStream) : $this->statisticsInfo;
        }

        if (null !== $this->tlsCipherSuitesConfig) {
            $res['tlsCipherSuitesConfig'] = null !== $this->tlsCipherSuitesConfig ? $this->tlsCipherSuitesConfig->toArray($noStream) : $this->tlsCipherSuitesConfig;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

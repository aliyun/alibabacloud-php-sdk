<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class ModelProxy extends Model
{
    /**
     * @var float
     */
    public $cpu;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $credentialName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $lastUpdatedAt;

    /**
     * @var string
     */
    public $litellmVersion;

    /**
     * @var LogConfiguration
     */
    public $logConfiguration;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $modelProxyId;

    /**
     * @var string
     */
    public $modelProxyName;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var NetworkConfiguration
     */
    public $networkConfiguration;

    /**
     * @var ProxyConfig
     */
    public $proxyConfig;

    /**
     * @var string
     */
    public $proxyMode;

    /**
     * @var string
     */
    public $serviceRegionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusReason;
    protected $_name = [
        'cpu' => 'cpu',
        'createdAt' => 'createdAt',
        'credentialName' => 'credentialName',
        'description' => 'description',
        'endpoint' => 'endpoint',
        'functionName' => 'functionName',
        'lastUpdatedAt' => 'lastUpdatedAt',
        'litellmVersion' => 'litellmVersion',
        'logConfiguration' => 'logConfiguration',
        'memory' => 'memory',
        'modelProxyId' => 'modelProxyId',
        'modelProxyName' => 'modelProxyName',
        'modelType' => 'modelType',
        'networkConfiguration' => 'networkConfiguration',
        'proxyConfig' => 'proxyConfig',
        'proxyMode' => 'proxyMode',
        'serviceRegionId' => 'serviceRegionId',
        'status' => 'status',
        'statusReason' => 'statusReason',
    ];

    public function validate()
    {
        if (null !== $this->logConfiguration) {
            $this->logConfiguration->validate();
        }
        if (null !== $this->networkConfiguration) {
            $this->networkConfiguration->validate();
        }
        if (null !== $this->proxyConfig) {
            $this->proxyConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->credentialName) {
            $res['credentialName'] = $this->credentialName;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }

        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
        }

        if (null !== $this->lastUpdatedAt) {
            $res['lastUpdatedAt'] = $this->lastUpdatedAt;
        }

        if (null !== $this->litellmVersion) {
            $res['litellmVersion'] = $this->litellmVersion;
        }

        if (null !== $this->logConfiguration) {
            $res['logConfiguration'] = null !== $this->logConfiguration ? $this->logConfiguration->toArray($noStream) : $this->logConfiguration;
        }

        if (null !== $this->memory) {
            $res['memory'] = $this->memory;
        }

        if (null !== $this->modelProxyId) {
            $res['modelProxyId'] = $this->modelProxyId;
        }

        if (null !== $this->modelProxyName) {
            $res['modelProxyName'] = $this->modelProxyName;
        }

        if (null !== $this->modelType) {
            $res['modelType'] = $this->modelType;
        }

        if (null !== $this->networkConfiguration) {
            $res['networkConfiguration'] = null !== $this->networkConfiguration ? $this->networkConfiguration->toArray($noStream) : $this->networkConfiguration;
        }

        if (null !== $this->proxyConfig) {
            $res['proxyConfig'] = null !== $this->proxyConfig ? $this->proxyConfig->toArray($noStream) : $this->proxyConfig;
        }

        if (null !== $this->proxyMode) {
            $res['proxyMode'] = $this->proxyMode;
        }

        if (null !== $this->serviceRegionId) {
            $res['serviceRegionId'] = $this->serviceRegionId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->statusReason) {
            $res['statusReason'] = $this->statusReason;
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
        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['credentialName'])) {
            $model->credentialName = $map['credentialName'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }

        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
        }

        if (isset($map['lastUpdatedAt'])) {
            $model->lastUpdatedAt = $map['lastUpdatedAt'];
        }

        if (isset($map['litellmVersion'])) {
            $model->litellmVersion = $map['litellmVersion'];
        }

        if (isset($map['logConfiguration'])) {
            $model->logConfiguration = LogConfiguration::fromMap($map['logConfiguration']);
        }

        if (isset($map['memory'])) {
            $model->memory = $map['memory'];
        }

        if (isset($map['modelProxyId'])) {
            $model->modelProxyId = $map['modelProxyId'];
        }

        if (isset($map['modelProxyName'])) {
            $model->modelProxyName = $map['modelProxyName'];
        }

        if (isset($map['modelType'])) {
            $model->modelType = $map['modelType'];
        }

        if (isset($map['networkConfiguration'])) {
            $model->networkConfiguration = NetworkConfiguration::fromMap($map['networkConfiguration']);
        }

        if (isset($map['proxyConfig'])) {
            $model->proxyConfig = ProxyConfig::fromMap($map['proxyConfig']);
        }

        if (isset($map['proxyMode'])) {
            $model->proxyMode = $map['proxyMode'];
        }

        if (isset($map['serviceRegionId'])) {
            $model->serviceRegionId = $map['serviceRegionId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['statusReason'])) {
            $model->statusReason = $map['statusReason'];
        }

        return $model;
    }
}

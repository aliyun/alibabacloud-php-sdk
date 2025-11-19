<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class CreateModelProxyInput extends Model
{
    /**
     * @var ArmsConfiguration
     */
    public $armsConfiguration;

    /**
     * @var float
     */
    public $cpu;

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
    protected $_name = [
        'armsConfiguration' => 'armsConfiguration',
        'cpu' => 'cpu',
        'credentialName' => 'credentialName',
        'description' => 'description',
        'litellmVersion' => 'litellmVersion',
        'logConfiguration' => 'logConfiguration',
        'memory' => 'memory',
        'modelProxyName' => 'modelProxyName',
        'modelType' => 'modelType',
        'networkConfiguration' => 'networkConfiguration',
        'proxyConfig' => 'proxyConfig',
        'proxyMode' => 'proxyMode',
        'serviceRegionId' => 'serviceRegionId',
    ];

    public function validate()
    {
        if (null !== $this->armsConfiguration) {
            $this->armsConfiguration->validate();
        }
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
        if (null !== $this->armsConfiguration) {
            $res['armsConfiguration'] = null !== $this->armsConfiguration ? $this->armsConfiguration->toArray($noStream) : $this->armsConfiguration;
        }

        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }

        if (null !== $this->credentialName) {
            $res['credentialName'] = $this->credentialName;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['armsConfiguration'])) {
            $model->armsConfiguration = ArmsConfiguration::fromMap($map['armsConfiguration']);
        }

        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }

        if (isset($map['credentialName'])) {
            $model->credentialName = $map['credentialName'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
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

        return $model;
    }
}

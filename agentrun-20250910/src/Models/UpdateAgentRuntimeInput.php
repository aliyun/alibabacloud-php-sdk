<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class UpdateAgentRuntimeInput extends Model
{
    /**
     * @var string
     */
    public $agentRuntimeName;

    /**
     * @var string
     */
    public $artifactType;

    /**
     * @var CodeConfiguration
     */
    public $codeConfiguration;

    /**
     * @var ContainerConfiguration
     */
    public $containerConfiguration;

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
     * @var string[]
     */
    public $environmentVariables;

    /**
     * @var string
     */
    public $executionRoleArn;

    /**
     * @var string
     */
    public $externalAgentEndpointUrl;

    /**
     * @var HealthCheckConfiguration
     */
    public $healthCheckConfiguration;

    /**
     * @var LogConfiguration
     */
    public $logConfiguration;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var NASConfig
     */
    public $nasConfig;

    /**
     * @var NetworkConfiguration
     */
    public $networkConfiguration;

    /**
     * @var OSSMountConfig
     */
    public $ossMountConfig;

    /**
     * @var int
     */
    public $port;

    /**
     * @var ProtocolConfiguration
     */
    public $protocolConfiguration;

    /**
     * @var int
     */
    public $sessionConcurrencyLimitPerInstance;

    /**
     * @var int
     */
    public $sessionIdleTimeoutSeconds;
    protected $_name = [
        'agentRuntimeName' => 'agentRuntimeName',
        'artifactType' => 'artifactType',
        'codeConfiguration' => 'codeConfiguration',
        'containerConfiguration' => 'containerConfiguration',
        'cpu' => 'cpu',
        'credentialName' => 'credentialName',
        'description' => 'description',
        'environmentVariables' => 'environmentVariables',
        'executionRoleArn' => 'executionRoleArn',
        'externalAgentEndpointUrl' => 'externalAgentEndpointUrl',
        'healthCheckConfiguration' => 'healthCheckConfiguration',
        'logConfiguration' => 'logConfiguration',
        'memory' => 'memory',
        'nasConfig' => 'nasConfig',
        'networkConfiguration' => 'networkConfiguration',
        'ossMountConfig' => 'ossMountConfig',
        'port' => 'port',
        'protocolConfiguration' => 'protocolConfiguration',
        'sessionConcurrencyLimitPerInstance' => 'sessionConcurrencyLimitPerInstance',
        'sessionIdleTimeoutSeconds' => 'sessionIdleTimeoutSeconds',
    ];

    public function validate()
    {
        if (null !== $this->codeConfiguration) {
            $this->codeConfiguration->validate();
        }
        if (null !== $this->containerConfiguration) {
            $this->containerConfiguration->validate();
        }
        if (\is_array($this->environmentVariables)) {
            Model::validateArray($this->environmentVariables);
        }
        if (null !== $this->healthCheckConfiguration) {
            $this->healthCheckConfiguration->validate();
        }
        if (null !== $this->logConfiguration) {
            $this->logConfiguration->validate();
        }
        if (null !== $this->nasConfig) {
            $this->nasConfig->validate();
        }
        if (null !== $this->networkConfiguration) {
            $this->networkConfiguration->validate();
        }
        if (null !== $this->ossMountConfig) {
            $this->ossMountConfig->validate();
        }
        if (null !== $this->protocolConfiguration) {
            $this->protocolConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentRuntimeName) {
            $res['agentRuntimeName'] = $this->agentRuntimeName;
        }

        if (null !== $this->artifactType) {
            $res['artifactType'] = $this->artifactType;
        }

        if (null !== $this->codeConfiguration) {
            $res['codeConfiguration'] = null !== $this->codeConfiguration ? $this->codeConfiguration->toArray($noStream) : $this->codeConfiguration;
        }

        if (null !== $this->containerConfiguration) {
            $res['containerConfiguration'] = null !== $this->containerConfiguration ? $this->containerConfiguration->toArray($noStream) : $this->containerConfiguration;
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

        if (null !== $this->environmentVariables) {
            if (\is_array($this->environmentVariables)) {
                $res['environmentVariables'] = [];
                foreach ($this->environmentVariables as $key1 => $value1) {
                    $res['environmentVariables'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->executionRoleArn) {
            $res['executionRoleArn'] = $this->executionRoleArn;
        }

        if (null !== $this->externalAgentEndpointUrl) {
            $res['externalAgentEndpointUrl'] = $this->externalAgentEndpointUrl;
        }

        if (null !== $this->healthCheckConfiguration) {
            $res['healthCheckConfiguration'] = null !== $this->healthCheckConfiguration ? $this->healthCheckConfiguration->toArray($noStream) : $this->healthCheckConfiguration;
        }

        if (null !== $this->logConfiguration) {
            $res['logConfiguration'] = null !== $this->logConfiguration ? $this->logConfiguration->toArray($noStream) : $this->logConfiguration;
        }

        if (null !== $this->memory) {
            $res['memory'] = $this->memory;
        }

        if (null !== $this->nasConfig) {
            $res['nasConfig'] = null !== $this->nasConfig ? $this->nasConfig->toArray($noStream) : $this->nasConfig;
        }

        if (null !== $this->networkConfiguration) {
            $res['networkConfiguration'] = null !== $this->networkConfiguration ? $this->networkConfiguration->toArray($noStream) : $this->networkConfiguration;
        }

        if (null !== $this->ossMountConfig) {
            $res['ossMountConfig'] = null !== $this->ossMountConfig ? $this->ossMountConfig->toArray($noStream) : $this->ossMountConfig;
        }

        if (null !== $this->port) {
            $res['port'] = $this->port;
        }

        if (null !== $this->protocolConfiguration) {
            $res['protocolConfiguration'] = null !== $this->protocolConfiguration ? $this->protocolConfiguration->toArray($noStream) : $this->protocolConfiguration;
        }

        if (null !== $this->sessionConcurrencyLimitPerInstance) {
            $res['sessionConcurrencyLimitPerInstance'] = $this->sessionConcurrencyLimitPerInstance;
        }

        if (null !== $this->sessionIdleTimeoutSeconds) {
            $res['sessionIdleTimeoutSeconds'] = $this->sessionIdleTimeoutSeconds;
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
        if (isset($map['agentRuntimeName'])) {
            $model->agentRuntimeName = $map['agentRuntimeName'];
        }

        if (isset($map['artifactType'])) {
            $model->artifactType = $map['artifactType'];
        }

        if (isset($map['codeConfiguration'])) {
            $model->codeConfiguration = CodeConfiguration::fromMap($map['codeConfiguration']);
        }

        if (isset($map['containerConfiguration'])) {
            $model->containerConfiguration = ContainerConfiguration::fromMap($map['containerConfiguration']);
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

        if (isset($map['environmentVariables'])) {
            if (!empty($map['environmentVariables'])) {
                $model->environmentVariables = [];
                foreach ($map['environmentVariables'] as $key1 => $value1) {
                    $model->environmentVariables[$key1] = $value1;
                }
            }
        }

        if (isset($map['executionRoleArn'])) {
            $model->executionRoleArn = $map['executionRoleArn'];
        }

        if (isset($map['externalAgentEndpointUrl'])) {
            $model->externalAgentEndpointUrl = $map['externalAgentEndpointUrl'];
        }

        if (isset($map['healthCheckConfiguration'])) {
            $model->healthCheckConfiguration = HealthCheckConfiguration::fromMap($map['healthCheckConfiguration']);
        }

        if (isset($map['logConfiguration'])) {
            $model->logConfiguration = LogConfiguration::fromMap($map['logConfiguration']);
        }

        if (isset($map['memory'])) {
            $model->memory = $map['memory'];
        }

        if (isset($map['nasConfig'])) {
            $model->nasConfig = NASConfig::fromMap($map['nasConfig']);
        }

        if (isset($map['networkConfiguration'])) {
            $model->networkConfiguration = NetworkConfiguration::fromMap($map['networkConfiguration']);
        }

        if (isset($map['ossMountConfig'])) {
            $model->ossMountConfig = OSSMountConfig::fromMap($map['ossMountConfig']);
        }

        if (isset($map['port'])) {
            $model->port = $map['port'];
        }

        if (isset($map['protocolConfiguration'])) {
            $model->protocolConfiguration = ProtocolConfiguration::fromMap($map['protocolConfiguration']);
        }

        if (isset($map['sessionConcurrencyLimitPerInstance'])) {
            $model->sessionConcurrencyLimitPerInstance = $map['sessionConcurrencyLimitPerInstance'];
        }

        if (isset($map['sessionIdleTimeoutSeconds'])) {
            $model->sessionIdleTimeoutSeconds = $map['sessionIdleTimeoutSeconds'];
        }

        return $model;
    }
}

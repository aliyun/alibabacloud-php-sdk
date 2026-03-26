<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class CreateToolInputV2 extends Model
{
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
    public $createMethod;

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
     * @var LogConfiguration
     */
    public $logConfiguration;

    /**
     * @var McpConfig
     */
    public $mcpConfig;

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
     * @var string
     */
    public $protocolSpec;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $toolName;

    /**
     * @var string
     */
    public $toolType;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'artifactType' => 'artifactType',
        'codeConfiguration' => 'codeConfiguration',
        'containerConfiguration' => 'containerConfiguration',
        'cpu' => 'cpu',
        'createMethod' => 'createMethod',
        'credentialName' => 'credentialName',
        'description' => 'description',
        'environmentVariables' => 'environmentVariables',
        'executionRoleArn' => 'executionRoleArn',
        'logConfiguration' => 'logConfiguration',
        'mcpConfig' => 'mcpConfig',
        'memory' => 'memory',
        'nasConfig' => 'nasConfig',
        'networkConfiguration' => 'networkConfiguration',
        'ossMountConfig' => 'ossMountConfig',
        'port' => 'port',
        'protocolSpec' => 'protocolSpec',
        'timeout' => 'timeout',
        'toolName' => 'toolName',
        'toolType' => 'toolType',
        'workspaceId' => 'workspaceId',
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
        if (null !== $this->logConfiguration) {
            $this->logConfiguration->validate();
        }
        if (null !== $this->mcpConfig) {
            $this->mcpConfig->validate();
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->createMethod) {
            $res['createMethod'] = $this->createMethod;
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

        if (null !== $this->logConfiguration) {
            $res['logConfiguration'] = null !== $this->logConfiguration ? $this->logConfiguration->toArray($noStream) : $this->logConfiguration;
        }

        if (null !== $this->mcpConfig) {
            $res['mcpConfig'] = null !== $this->mcpConfig ? $this->mcpConfig->toArray($noStream) : $this->mcpConfig;
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

        if (null !== $this->protocolSpec) {
            $res['protocolSpec'] = $this->protocolSpec;
        }

        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }

        if (null !== $this->toolName) {
            $res['toolName'] = $this->toolName;
        }

        if (null !== $this->toolType) {
            $res['toolType'] = $this->toolType;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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

        if (isset($map['createMethod'])) {
            $model->createMethod = $map['createMethod'];
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

        if (isset($map['logConfiguration'])) {
            $model->logConfiguration = LogConfiguration::fromMap($map['logConfiguration']);
        }

        if (isset($map['mcpConfig'])) {
            $model->mcpConfig = McpConfig::fromMap($map['mcpConfig']);
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

        if (isset($map['protocolSpec'])) {
            $model->protocolSpec = $map['protocolSpec'];
        }

        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        if (isset($map['toolName'])) {
            $model->toolName = $map['toolName'];
        }

        if (isset($map['toolType'])) {
            $model->toolType = $map['toolType'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}

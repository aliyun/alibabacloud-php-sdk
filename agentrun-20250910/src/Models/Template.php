<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\Template\mcpOptions;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\Template\mcpState;

class Template extends Model
{
    /**
     * @var bool
     */
    public $allowAnonymousManage;

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
    public $createdAt;

    /**
     * @var CredentialConfiguration
     */
    public $credentialConfiguration;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var bool
     */
    public $enableAgent;

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
    public $lastUpdatedAt;

    /**
     * @var LogConfiguration
     */
    public $logConfiguration;

    /**
     * @var mcpOptions
     */
    public $mcpOptions;

    /**
     * @var mcpState
     */
    public $mcpState;

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
     * @var OssConfiguration[]
     */
    public $ossConfiguration;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $sandboxIdleTimeoutInSeconds;

    /**
     * @var string
     */
    public $sandboxTTLInSeconds;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusReason;

    /**
     * @var string
     */
    public $templateArn;

    /**
     * @var mixed[]
     */
    public $templateConfiguration;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateType;

    /**
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'allowAnonymousManage' => 'allowAnonymousManage',
        'containerConfiguration' => 'containerConfiguration',
        'cpu' => 'cpu',
        'createdAt' => 'createdAt',
        'credentialConfiguration' => 'credentialConfiguration',
        'description' => 'description',
        'diskSize' => 'diskSize',
        'enableAgent' => 'enableAgent',
        'environmentVariables' => 'environmentVariables',
        'executionRoleArn' => 'executionRoleArn',
        'lastUpdatedAt' => 'lastUpdatedAt',
        'logConfiguration' => 'logConfiguration',
        'mcpOptions' => 'mcpOptions',
        'mcpState' => 'mcpState',
        'memory' => 'memory',
        'nasConfig' => 'nasConfig',
        'networkConfiguration' => 'networkConfiguration',
        'ossConfiguration' => 'ossConfiguration',
        'resourceName' => 'resourceName',
        'sandboxIdleTimeoutInSeconds' => 'sandboxIdleTimeoutInSeconds',
        'sandboxTTLInSeconds' => 'sandboxTTLInSeconds',
        'status' => 'status',
        'statusReason' => 'statusReason',
        'templateArn' => 'templateArn',
        'templateConfiguration' => 'templateConfiguration',
        'templateId' => 'templateId',
        'templateName' => 'templateName',
        'templateType' => 'templateType',
        'templateVersion' => 'templateVersion',
    ];

    public function validate()
    {
        if (null !== $this->containerConfiguration) {
            $this->containerConfiguration->validate();
        }
        if (null !== $this->credentialConfiguration) {
            $this->credentialConfiguration->validate();
        }
        if (\is_array($this->environmentVariables)) {
            Model::validateArray($this->environmentVariables);
        }
        if (null !== $this->logConfiguration) {
            $this->logConfiguration->validate();
        }
        if (null !== $this->mcpOptions) {
            $this->mcpOptions->validate();
        }
        if (null !== $this->mcpState) {
            $this->mcpState->validate();
        }
        if (null !== $this->nasConfig) {
            $this->nasConfig->validate();
        }
        if (null !== $this->networkConfiguration) {
            $this->networkConfiguration->validate();
        }
        if (\is_array($this->ossConfiguration)) {
            Model::validateArray($this->ossConfiguration);
        }
        if (\is_array($this->templateConfiguration)) {
            Model::validateArray($this->templateConfiguration);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowAnonymousManage) {
            $res['allowAnonymousManage'] = $this->allowAnonymousManage;
        }

        if (null !== $this->containerConfiguration) {
            $res['containerConfiguration'] = null !== $this->containerConfiguration ? $this->containerConfiguration->toArray($noStream) : $this->containerConfiguration;
        }

        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->credentialConfiguration) {
            $res['credentialConfiguration'] = null !== $this->credentialConfiguration ? $this->credentialConfiguration->toArray($noStream) : $this->credentialConfiguration;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->diskSize) {
            $res['diskSize'] = $this->diskSize;
        }

        if (null !== $this->enableAgent) {
            $res['enableAgent'] = $this->enableAgent;
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

        if (null !== $this->lastUpdatedAt) {
            $res['lastUpdatedAt'] = $this->lastUpdatedAt;
        }

        if (null !== $this->logConfiguration) {
            $res['logConfiguration'] = null !== $this->logConfiguration ? $this->logConfiguration->toArray($noStream) : $this->logConfiguration;
        }

        if (null !== $this->mcpOptions) {
            $res['mcpOptions'] = null !== $this->mcpOptions ? $this->mcpOptions->toArray($noStream) : $this->mcpOptions;
        }

        if (null !== $this->mcpState) {
            $res['mcpState'] = null !== $this->mcpState ? $this->mcpState->toArray($noStream) : $this->mcpState;
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

        if (null !== $this->ossConfiguration) {
            if (\is_array($this->ossConfiguration)) {
                $res['ossConfiguration'] = [];
                $n1 = 0;
                foreach ($this->ossConfiguration as $item1) {
                    $res['ossConfiguration'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceName) {
            $res['resourceName'] = $this->resourceName;
        }

        if (null !== $this->sandboxIdleTimeoutInSeconds) {
            $res['sandboxIdleTimeoutInSeconds'] = $this->sandboxIdleTimeoutInSeconds;
        }

        if (null !== $this->sandboxTTLInSeconds) {
            $res['sandboxTTLInSeconds'] = $this->sandboxTTLInSeconds;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->statusReason) {
            $res['statusReason'] = $this->statusReason;
        }

        if (null !== $this->templateArn) {
            $res['templateArn'] = $this->templateArn;
        }

        if (null !== $this->templateConfiguration) {
            if (\is_array($this->templateConfiguration)) {
                $res['templateConfiguration'] = [];
                foreach ($this->templateConfiguration as $key1 => $value1) {
                    $res['templateConfiguration'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }

        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
        }

        if (null !== $this->templateType) {
            $res['templateType'] = $this->templateType;
        }

        if (null !== $this->templateVersion) {
            $res['templateVersion'] = $this->templateVersion;
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
        if (isset($map['allowAnonymousManage'])) {
            $model->allowAnonymousManage = $map['allowAnonymousManage'];
        }

        if (isset($map['containerConfiguration'])) {
            $model->containerConfiguration = ContainerConfiguration::fromMap($map['containerConfiguration']);
        }

        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['credentialConfiguration'])) {
            $model->credentialConfiguration = CredentialConfiguration::fromMap($map['credentialConfiguration']);
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['diskSize'])) {
            $model->diskSize = $map['diskSize'];
        }

        if (isset($map['enableAgent'])) {
            $model->enableAgent = $map['enableAgent'];
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

        if (isset($map['lastUpdatedAt'])) {
            $model->lastUpdatedAt = $map['lastUpdatedAt'];
        }

        if (isset($map['logConfiguration'])) {
            $model->logConfiguration = LogConfiguration::fromMap($map['logConfiguration']);
        }

        if (isset($map['mcpOptions'])) {
            $model->mcpOptions = mcpOptions::fromMap($map['mcpOptions']);
        }

        if (isset($map['mcpState'])) {
            $model->mcpState = mcpState::fromMap($map['mcpState']);
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

        if (isset($map['ossConfiguration'])) {
            if (!empty($map['ossConfiguration'])) {
                $model->ossConfiguration = [];
                $n1 = 0;
                foreach ($map['ossConfiguration'] as $item1) {
                    $model->ossConfiguration[$n1] = OssConfiguration::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['resourceName'])) {
            $model->resourceName = $map['resourceName'];
        }

        if (isset($map['sandboxIdleTimeoutInSeconds'])) {
            $model->sandboxIdleTimeoutInSeconds = $map['sandboxIdleTimeoutInSeconds'];
        }

        if (isset($map['sandboxTTLInSeconds'])) {
            $model->sandboxTTLInSeconds = $map['sandboxTTLInSeconds'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['statusReason'])) {
            $model->statusReason = $map['statusReason'];
        }

        if (isset($map['templateArn'])) {
            $model->templateArn = $map['templateArn'];
        }

        if (isset($map['templateConfiguration'])) {
            if (!empty($map['templateConfiguration'])) {
                $model->templateConfiguration = [];
                foreach ($map['templateConfiguration'] as $key1 => $value1) {
                    $model->templateConfiguration[$key1] = $value1;
                }
            }
        }

        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }

        if (isset($map['templateType'])) {
            $model->templateType = $map['templateType'];
        }

        if (isset($map['templateVersion'])) {
            $model->templateVersion = $map['templateVersion'];
        }

        return $model;
    }
}

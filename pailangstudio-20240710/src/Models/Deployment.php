<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Deployment\chatHistoryConfig;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Deployment\contentModerationConfig;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Deployment\credentialConfig;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Deployment\dataSources;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Deployment\ecsSpec;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Deployment\envs;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Deployment\labels;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Deployment\userVpc;

class Deployment extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var chatHistoryConfig
     */
    public $chatHistoryConfig;

    /**
     * @var contentModerationConfig
     */
    public $contentModerationConfig;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var credentialConfig
     */
    public $credentialConfig;

    /**
     * @var dataSources[]
     */
    public $dataSources;

    /**
     * @var string
     */
    public $deploymentConfig;

    /**
     * @var string
     */
    public $deploymentId;

    /**
     * @var string
     */
    public $deploymentStages;

    /**
     * @var string
     */
    public $deploymentStatus;

    /**
     * @var string
     */
    public $description;

    /**
     * @var ecsSpec
     */
    public $ecsSpec;

    /**
     * @var bool
     */
    public $enableTrace;

    /**
     * @var envs[]
     */
    public $envs;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceSnapshotId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $serviceGroup;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var userVpc
     */
    public $userVpc;

    /**
     * @var string
     */
    public $workDir;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'chatHistoryConfig' => 'ChatHistoryConfig',
        'contentModerationConfig' => 'ContentModerationConfig',
        'creator' => 'Creator',
        'credentialConfig' => 'CredentialConfig',
        'dataSources' => 'DataSources',
        'deploymentConfig' => 'DeploymentConfig',
        'deploymentId' => 'DeploymentId',
        'deploymentStages' => 'DeploymentStages',
        'deploymentStatus' => 'DeploymentStatus',
        'description' => 'Description',
        'ecsSpec' => 'EcsSpec',
        'enableTrace' => 'EnableTrace',
        'envs' => 'Envs',
        'errorMessage' => 'ErrorMessage',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'labels' => 'Labels',
        'operationType' => 'OperationType',
        'resourceId' => 'ResourceId',
        'resourceSnapshotId' => 'ResourceSnapshotId',
        'resourceType' => 'ResourceType',
        'serviceGroup' => 'ServiceGroup',
        'serviceName' => 'ServiceName',
        'userVpc' => 'UserVpc',
        'workDir' => 'WorkDir',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->chatHistoryConfig) {
            $this->chatHistoryConfig->validate();
        }
        if (null !== $this->contentModerationConfig) {
            $this->contentModerationConfig->validate();
        }
        if (null !== $this->credentialConfig) {
            $this->credentialConfig->validate();
        }
        if (\is_array($this->dataSources)) {
            Model::validateArray($this->dataSources);
        }
        if (null !== $this->ecsSpec) {
            $this->ecsSpec->validate();
        }
        if (\is_array($this->envs)) {
            Model::validateArray($this->envs);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (null !== $this->userVpc) {
            $this->userVpc->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->chatHistoryConfig) {
            $res['ChatHistoryConfig'] = null !== $this->chatHistoryConfig ? $this->chatHistoryConfig->toArray($noStream) : $this->chatHistoryConfig;
        }

        if (null !== $this->contentModerationConfig) {
            $res['ContentModerationConfig'] = null !== $this->contentModerationConfig ? $this->contentModerationConfig->toArray($noStream) : $this->contentModerationConfig;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toArray($noStream) : $this->credentialConfig;
        }

        if (null !== $this->dataSources) {
            if (\is_array($this->dataSources)) {
                $res['DataSources'] = [];
                $n1 = 0;
                foreach ($this->dataSources as $item1) {
                    $res['DataSources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->deploymentConfig) {
            $res['DeploymentConfig'] = $this->deploymentConfig;
        }

        if (null !== $this->deploymentId) {
            $res['DeploymentId'] = $this->deploymentId;
        }

        if (null !== $this->deploymentStages) {
            $res['DeploymentStages'] = $this->deploymentStages;
        }

        if (null !== $this->deploymentStatus) {
            $res['DeploymentStatus'] = $this->deploymentStatus;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->ecsSpec) {
            $res['EcsSpec'] = null !== $this->ecsSpec ? $this->ecsSpec->toArray($noStream) : $this->ecsSpec;
        }

        if (null !== $this->enableTrace) {
            $res['EnableTrace'] = $this->enableTrace;
        }

        if (null !== $this->envs) {
            if (\is_array($this->envs)) {
                $res['Envs'] = [];
                $n1 = 0;
                foreach ($this->envs as $item1) {
                    $res['Envs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceSnapshotId) {
            $res['ResourceSnapshotId'] = $this->resourceSnapshotId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->serviceGroup) {
            $res['ServiceGroup'] = $this->serviceGroup;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toArray($noStream) : $this->userVpc;
        }

        if (null !== $this->workDir) {
            $res['WorkDir'] = $this->workDir;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }

        if (isset($map['ChatHistoryConfig'])) {
            $model->chatHistoryConfig = chatHistoryConfig::fromMap($map['ChatHistoryConfig']);
        }

        if (isset($map['ContentModerationConfig'])) {
            $model->contentModerationConfig = contentModerationConfig::fromMap($map['ContentModerationConfig']);
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = credentialConfig::fromMap($map['CredentialConfig']);
        }

        if (isset($map['DataSources'])) {
            if (!empty($map['DataSources'])) {
                $model->dataSources = [];
                $n1 = 0;
                foreach ($map['DataSources'] as $item1) {
                    $model->dataSources[$n1] = dataSources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DeploymentConfig'])) {
            $model->deploymentConfig = $map['DeploymentConfig'];
        }

        if (isset($map['DeploymentId'])) {
            $model->deploymentId = $map['DeploymentId'];
        }

        if (isset($map['DeploymentStages'])) {
            $model->deploymentStages = $map['DeploymentStages'];
        }

        if (isset($map['DeploymentStatus'])) {
            $model->deploymentStatus = $map['DeploymentStatus'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EcsSpec'])) {
            $model->ecsSpec = ecsSpec::fromMap($map['EcsSpec']);
        }

        if (isset($map['EnableTrace'])) {
            $model->enableTrace = $map['EnableTrace'];
        }

        if (isset($map['Envs'])) {
            if (!empty($map['Envs'])) {
                $model->envs = [];
                $n1 = 0;
                foreach ($map['Envs'] as $item1) {
                    $model->envs[$n1] = envs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = labels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceSnapshotId'])) {
            $model->resourceSnapshotId = $map['ResourceSnapshotId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['ServiceGroup'])) {
            $model->serviceGroup = $map['ServiceGroup'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        if (isset($map['UserVpc'])) {
            $model->userVpc = userVpc::fromMap($map['UserVpc']);
        }

        if (isset($map['WorkDir'])) {
            $model->workDir = $map['WorkDir'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}

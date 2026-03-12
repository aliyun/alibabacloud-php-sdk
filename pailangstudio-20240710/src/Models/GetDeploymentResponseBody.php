<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\GetDeploymentResponseBody\chatHistoryConfig;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\GetDeploymentResponseBody\contentModerationConfig;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\GetDeploymentResponseBody\deploymentStages;

class GetDeploymentResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var bool
     */
    public $autoApproval;

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
     * @var string
     */
    public $deploymentConfig;

    /**
     * @var string
     */
    public $deploymentId;

    /**
     * @var deploymentStages[]
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
     * @var bool
     */
    public $enableTrace;

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
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $requestId;

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
    public $serviceName;

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
        'autoApproval' => 'AutoApproval',
        'chatHistoryConfig' => 'ChatHistoryConfig',
        'contentModerationConfig' => 'ContentModerationConfig',
        'creator' => 'Creator',
        'deploymentConfig' => 'DeploymentConfig',
        'deploymentId' => 'DeploymentId',
        'deploymentStages' => 'DeploymentStages',
        'deploymentStatus' => 'DeploymentStatus',
        'description' => 'Description',
        'enableTrace' => 'EnableTrace',
        'errorMessage' => 'ErrorMessage',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'operationType' => 'OperationType',
        'requestId' => 'RequestId',
        'resourceId' => 'ResourceId',
        'resourceSnapshotId' => 'ResourceSnapshotId',
        'resourceType' => 'ResourceType',
        'serviceName' => 'ServiceName',
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
        if (\is_array($this->deploymentStages)) {
            Model::validateArray($this->deploymentStages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->autoApproval) {
            $res['AutoApproval'] = $this->autoApproval;
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

        if (null !== $this->deploymentConfig) {
            $res['DeploymentConfig'] = $this->deploymentConfig;
        }

        if (null !== $this->deploymentId) {
            $res['DeploymentId'] = $this->deploymentId;
        }

        if (null !== $this->deploymentStages) {
            if (\is_array($this->deploymentStages)) {
                $res['DeploymentStages'] = [];
                $n1 = 0;
                foreach ($this->deploymentStages as $item1) {
                    $res['DeploymentStages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->deploymentStatus) {
            $res['DeploymentStatus'] = $this->deploymentStatus;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enableTrace) {
            $res['EnableTrace'] = $this->enableTrace;
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

        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
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

        if (isset($map['AutoApproval'])) {
            $model->autoApproval = $map['AutoApproval'];
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

        if (isset($map['DeploymentConfig'])) {
            $model->deploymentConfig = $map['DeploymentConfig'];
        }

        if (isset($map['DeploymentId'])) {
            $model->deploymentId = $map['DeploymentId'];
        }

        if (isset($map['DeploymentStages'])) {
            if (!empty($map['DeploymentStages'])) {
                $model->deploymentStages = [];
                $n1 = 0;
                foreach ($map['DeploymentStages'] as $item1) {
                    $model->deploymentStages[$n1] = deploymentStages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DeploymentStatus'])) {
            $model->deploymentStatus = $map['DeploymentStatus'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnableTrace'])) {
            $model->enableTrace = $map['EnableTrace'];
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

        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
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

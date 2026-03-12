<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateDeploymentRequest\chatHistoryConfig;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateDeploymentRequest\contentModerationConfig;

class CreateDeploymentRequest extends Model
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
    public $deploymentConfig;

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
        'deploymentConfig' => 'DeploymentConfig',
        'description' => 'Description',
        'enableTrace' => 'EnableTrace',
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

        if (null !== $this->deploymentConfig) {
            $res['DeploymentConfig'] = $this->deploymentConfig;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enableTrace) {
            $res['EnableTrace'] = $this->enableTrace;
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

        if (isset($map['DeploymentConfig'])) {
            $model->deploymentConfig = $map['DeploymentConfig'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnableTrace'])) {
            $model->enableTrace = $map['EnableTrace'];
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

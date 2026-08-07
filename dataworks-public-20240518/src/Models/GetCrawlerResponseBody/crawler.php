<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetCrawlerResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetCrawlerResponseBody\crawler\scheduleConfig;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetCrawlerResponseBody\crawler\scope;

class crawler extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $dataSourceId;

    /**
     * @var bool
     */
    public $enableAiComment;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $lastRunStatus;

    /**
     * @var int
     */
    public $lastRunTaskInstanceId;

    /**
     * @var string
     */
    public $metaEntityId;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $options;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var scheduleConfig
     */
    public $scheduleConfig;

    /**
     * @var scope
     */
    public $scope;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'createTime' => 'CreateTime',
        'dataSourceId' => 'DataSourceId',
        'enableAiComment' => 'EnableAiComment',
        'envType' => 'EnvType',
        'id' => 'Id',
        'lastRunStatus' => 'LastRunStatus',
        'lastRunTaskInstanceId' => 'LastRunTaskInstanceId',
        'metaEntityId' => 'MetaEntityId',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'options' => 'Options',
        'owner' => 'Owner',
        'projectId' => 'ProjectId',
        'resourceGroupId' => 'ResourceGroupId',
        'scheduleConfig' => 'ScheduleConfig',
        'scope' => 'Scope',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->options)) {
            Model::validateArray($this->options);
        }
        if (null !== $this->scheduleConfig) {
            $this->scheduleConfig->validate();
        }
        if (null !== $this->scope) {
            $this->scope->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->enableAiComment) {
            $res['EnableAiComment'] = $this->enableAiComment;
        }

        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->lastRunStatus) {
            $res['LastRunStatus'] = $this->lastRunStatus;
        }

        if (null !== $this->lastRunTaskInstanceId) {
            $res['LastRunTaskInstanceId'] = $this->lastRunTaskInstanceId;
        }

        if (null !== $this->metaEntityId) {
            $res['MetaEntityId'] = $this->metaEntityId;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->options) {
            if (\is_array($this->options)) {
                $res['Options'] = [];
                foreach ($this->options as $key1 => $value1) {
                    $res['Options'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->scheduleConfig) {
            $res['ScheduleConfig'] = null !== $this->scheduleConfig ? $this->scheduleConfig->toArray($noStream) : $this->scheduleConfig;
        }

        if (null !== $this->scope) {
            $res['Scope'] = null !== $this->scope ? $this->scope->toArray($noStream) : $this->scope;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        if (isset($map['EnableAiComment'])) {
            $model->enableAiComment = $map['EnableAiComment'];
        }

        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LastRunStatus'])) {
            $model->lastRunStatus = $map['LastRunStatus'];
        }

        if (isset($map['LastRunTaskInstanceId'])) {
            $model->lastRunTaskInstanceId = $map['LastRunTaskInstanceId'];
        }

        if (isset($map['MetaEntityId'])) {
            $model->metaEntityId = $map['MetaEntityId'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Options'])) {
            if (!empty($map['Options'])) {
                $model->options = [];
                foreach ($map['Options'] as $key1 => $value1) {
                    $model->options[$key1] = $value1;
                }
            }
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ScheduleConfig'])) {
            $model->scheduleConfig = scheduleConfig::fromMap($map['ScheduleConfig']);
        }

        if (isset($map['Scope'])) {
            $model->scope = scope::fromMap($map['Scope']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

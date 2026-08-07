<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListCrawlersResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListCrawlersResponseBody\pagingInfo\crawlers\scheduleConfig;

class crawlers extends Model
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
        'envType' => 'EnvType',
        'id' => 'Id',
        'lastRunStatus' => 'LastRunStatus',
        'metaEntityId' => 'MetaEntityId',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'owner' => 'Owner',
        'projectId' => 'ProjectId',
        'resourceGroupId' => 'ResourceGroupId',
        'scheduleConfig' => 'ScheduleConfig',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->scheduleConfig) {
            $this->scheduleConfig->validate();
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

        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->lastRunStatus) {
            $res['LastRunStatus'] = $this->lastRunStatus;
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

        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LastRunStatus'])) {
            $model->lastRunStatus = $map['LastRunStatus'];
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

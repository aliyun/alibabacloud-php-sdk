<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\QueryFormationInstsByTaskIDResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $lastTaskInstCostTime;

    /**
     * @var string
     */
    public $lastTaskInstID;

    /**
     * @var string
     */
    public $lastTaskInstMessage;

    /**
     * @var string
     */
    public $lastTaskInstState;

    /**
     * @var string
     */
    public $scheduleState;

    /**
     * @var string
     */
    public $schema;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $syncTime;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'createTime' => 'CreateTime',
        'lastTaskInstCostTime' => 'LastTaskInstCostTime',
        'lastTaskInstID' => 'LastTaskInstID',
        'lastTaskInstMessage' => 'LastTaskInstMessage',
        'lastTaskInstState' => 'LastTaskInstState',
        'scheduleState' => 'ScheduleState',
        'schema' => 'Schema',
        'sourceType' => 'SourceType',
        'syncTime' => 'SyncTime',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->lastTaskInstCostTime) {
            $res['LastTaskInstCostTime'] = $this->lastTaskInstCostTime;
        }

        if (null !== $this->lastTaskInstID) {
            $res['LastTaskInstID'] = $this->lastTaskInstID;
        }

        if (null !== $this->lastTaskInstMessage) {
            $res['LastTaskInstMessage'] = $this->lastTaskInstMessage;
        }

        if (null !== $this->lastTaskInstState) {
            $res['LastTaskInstState'] = $this->lastTaskInstState;
        }

        if (null !== $this->scheduleState) {
            $res['ScheduleState'] = $this->scheduleState;
        }

        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->syncTime) {
            $res['SyncTime'] = $this->syncTime;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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

        if (isset($map['LastTaskInstCostTime'])) {
            $model->lastTaskInstCostTime = $map['LastTaskInstCostTime'];
        }

        if (isset($map['LastTaskInstID'])) {
            $model->lastTaskInstID = $map['LastTaskInstID'];
        }

        if (isset($map['LastTaskInstMessage'])) {
            $model->lastTaskInstMessage = $map['LastTaskInstMessage'];
        }

        if (isset($map['LastTaskInstState'])) {
            $model->lastTaskInstState = $map['LastTaskInstState'];
        }

        if (isset($map['ScheduleState'])) {
            $model->scheduleState = $map['ScheduleState'];
        }

        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['SyncTime'])) {
            $model->syncTime = $map['SyncTime'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}

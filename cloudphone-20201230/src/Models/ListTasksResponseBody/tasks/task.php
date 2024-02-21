<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudphone\V20201230\Models\ListTasksResponseBody\tasks;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @description The time when the task was created.
     *
     * @example 2021-04-15 10:10:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The content that is returned after the task is executed. The content can be up to 1,024 bytes in length.
     *
     * @example file1 file2
     *
     * @var string
     */
    public $executeMsg;

    /**
     * @description The time when the task ended.
     *
     * @example 2021-04-15 10:10:01
     *
     * @var string
     */
    public $finishedTime;

    /**
     * @description The instance ID.
     *
     * @example cp-acfmxazb4p***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The task progress.
     *
     * @example 100%
     *
     * @var string
     */
    public $progress;

    /**
     * @description The task ID.
     *
     * @example t-bp67acfmxazb4p****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The task state.
     *
     * @example Finished
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @description The task type.
     *
     * @example Shell
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'executeMsg'   => 'ExecuteMsg',
        'finishedTime' => 'FinishedTime',
        'instanceId'   => 'InstanceId',
        'progress'     => 'Progress',
        'taskId'       => 'TaskId',
        'taskStatus'   => 'TaskStatus',
        'taskType'     => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->executeMsg) {
            $res['ExecuteMsg'] = $this->executeMsg;
        }
        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return task
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExecuteMsg'])) {
            $model->executeMsg = $map['ExecuteMsg'];
        }
        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}

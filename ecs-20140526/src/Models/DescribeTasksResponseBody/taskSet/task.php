<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTasksResponseBody\taskSet;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @description The time when the task was created.
     *
     * @example 2020-11-24T12:50Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The time when the task was completed.
     *
     * @example 2020-11-24T12:50Z
     *
     * @var string
     */
    public $finishedTime;

    /**
     * @description The ID of the resource.
     *
     * @example m-bp1i8huqm5u7****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description Indicates whether the task can be canceled.
     *
     * @example true
     *
     * @var string
     */
    public $supportCancel;

    /**
     * @description The name of the task.
     *
     * @example ImportImage
     *
     * @var string
     */
    public $taskAction;

    /**
     * @description The ID of the task.
     *
     * @example t-bp1hvgwromzv32iq****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The state of the task.
     *
     * @example Finished
     *
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'creationTime'  => 'CreationTime',
        'finishedTime'  => 'FinishedTime',
        'resourceId'    => 'ResourceId',
        'supportCancel' => 'SupportCancel',
        'taskAction'    => 'TaskAction',
        'taskId'        => 'TaskId',
        'taskStatus'    => 'TaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->supportCancel) {
            $res['SupportCancel'] = $this->supportCancel;
        }
        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['SupportCancel'])) {
            $model->supportCancel = $map['SupportCancel'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}

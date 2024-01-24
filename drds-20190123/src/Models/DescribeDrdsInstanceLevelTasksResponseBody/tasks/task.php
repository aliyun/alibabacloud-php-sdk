<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceLevelTasksResponseBody\tasks;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @description Indicates whether the task can be canceled.
     *
     * @example false
     *
     * @var bool
     */
    public $allowCancel;

    /**
     * @description The error message returned for the task.
     *
     * @var string
     */
    public $errMsg;

    /**
     * @description The timestamp when the task is created.
     *
     * @example 1568705520000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The progress of the task. Valid values: 0 to 100.
     *
     * @example 99
     *
     * @var int
     */
    public $progress;

    /**
     * @description The description of the task progress.
     *
     * @var string
     */
    public $progressDescription;

    /**
     * @description Indicates whether the progress of the task is displayed.
     *
     * @example true
     *
     * @var bool
     */
    public $showProgress;

    /**
     * @description The ID of the task.
     *
     * @example 12312
     *
     * @var int
     */
    public $targetId;

    /**
     * @description The name of the task.
     *
     * @example upgrade_instance
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The phase of the task.
     *
     * @example 1
     *
     * @var string
     */
    public $taskPhase;

    /**
     * @description The state of the task. Valid values:
     *
     *   0: The task is being executed.
     *   1: The task is executed.
     *   2: The task failed to be executed.
     *   3: The task is canceled.
     *
     * @example 0
     *
     * @var int
     */
    public $taskStatus;

    /**
     * @description The type of the task.
     *
     * @example 11
     *
     * @var int
     */
    public $taskType;
    protected $_name = [
        'allowCancel'         => 'AllowCancel',
        'errMsg'              => 'ErrMsg',
        'gmtCreate'           => 'GmtCreate',
        'progress'            => 'Progress',
        'progressDescription' => 'ProgressDescription',
        'showProgress'        => 'ShowProgress',
        'targetId'            => 'TargetId',
        'taskName'            => 'TaskName',
        'taskPhase'           => 'TaskPhase',
        'taskStatus'          => 'TaskStatus',
        'taskType'            => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowCancel) {
            $res['AllowCancel'] = $this->allowCancel;
        }
        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->progressDescription) {
            $res['ProgressDescription'] = $this->progressDescription;
        }
        if (null !== $this->showProgress) {
            $res['ShowProgress'] = $this->showProgress;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskPhase) {
            $res['TaskPhase'] = $this->taskPhase;
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
        if (isset($map['AllowCancel'])) {
            $model->allowCancel = $map['AllowCancel'];
        }
        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ProgressDescription'])) {
            $model->progressDescription = $map['ProgressDescription'];
        }
        if (isset($map['ShowProgress'])) {
            $model->showProgress = $map['ShowProgress'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskPhase'])) {
            $model->taskPhase = $map['TaskPhase'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceLevelTasksResponseBody\tasks;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @var int
     */
    public $taskType;

    /**
     * @var string
     */
    public $taskPhase;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var bool
     */
    public $allowCancel;

    /**
     * @var int
     */
    public $taskStatus;

    /**
     * @var bool
     */
    public $showProgress;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $progressDescription;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $targetId;

    /**
     * @var string
     */
    public $errMsg;
    protected $_name = [
        'taskType'            => 'TaskType',
        'taskPhase'           => 'TaskPhase',
        'progress'            => 'Progress',
        'allowCancel'         => 'AllowCancel',
        'taskStatus'          => 'TaskStatus',
        'showProgress'        => 'ShowProgress',
        'taskName'            => 'TaskName',
        'progressDescription' => 'ProgressDescription',
        'gmtCreate'           => 'GmtCreate',
        'targetId'            => 'TargetId',
        'errMsg'              => 'ErrMsg',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->taskPhase) {
            $res['TaskPhase'] = $this->taskPhase;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->allowCancel) {
            $res['AllowCancel'] = $this->allowCancel;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->showProgress) {
            $res['ShowProgress'] = $this->showProgress;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->progressDescription) {
            $res['ProgressDescription'] = $this->progressDescription;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
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
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TaskPhase'])) {
            $model->taskPhase = $map['TaskPhase'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['AllowCancel'])) {
            $model->allowCancel = $map['AllowCancel'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['ShowProgress'])) {
            $model->showProgress = $map['ShowProgress'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['ProgressDescription'])) {
            $model->progressDescription = $map['ProgressDescription'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
        }

        return $model;
    }
}

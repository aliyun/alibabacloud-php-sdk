<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceLevelTasksResponseBody\tasks;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @var bool
     */
    public $allowCancel;

    /**
     * @var string
     */
    public $errMsg;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $progressDescription;

    /**
     * @var bool
     */
    public $showProgress;

    /**
     * @var int
     */
    public $targetId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskPhase;

    /**
     * @var int
     */
    public $taskStatus;

    /**
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

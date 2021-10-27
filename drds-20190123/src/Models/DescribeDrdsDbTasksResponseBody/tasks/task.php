<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbTasksResponseBody\tasks;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @var bool
     */
    public $allowCancel;

    /**
     * @var int
     */
    public $dbComputeLength;

    /**
     * @var string
     */
    public $detailTaskId;

    /**
     * @var string
     */
    public $expandType;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $parentJobId;

    /**
     * @var int
     */
    public $progress;

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
    public $taskDetail;

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

    /**
     * @var int
     */
    public $tbComputeLength;
    protected $_name = [
        'allowCancel'     => 'AllowCancel',
        'dbComputeLength' => 'DbComputeLength',
        'detailTaskId'    => 'DetailTaskId',
        'expandType'      => 'ExpandType',
        'gmtCreate'       => 'GmtCreate',
        'label'           => 'Label',
        'parentJobId'     => 'ParentJobId',
        'progress'        => 'Progress',
        'showProgress'    => 'ShowProgress',
        'targetId'        => 'TargetId',
        'taskDetail'      => 'TaskDetail',
        'taskName'        => 'TaskName',
        'taskPhase'       => 'TaskPhase',
        'taskStatus'      => 'TaskStatus',
        'taskType'        => 'TaskType',
        'tbComputeLength' => 'TbComputeLength',
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
        if (null !== $this->dbComputeLength) {
            $res['DbComputeLength'] = $this->dbComputeLength;
        }
        if (null !== $this->detailTaskId) {
            $res['DetailTaskId'] = $this->detailTaskId;
        }
        if (null !== $this->expandType) {
            $res['ExpandType'] = $this->expandType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->parentJobId) {
            $res['ParentJobId'] = $this->parentJobId;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->showProgress) {
            $res['ShowProgress'] = $this->showProgress;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->taskDetail) {
            $res['TaskDetail'] = $this->taskDetail;
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
        if (null !== $this->tbComputeLength) {
            $res['TbComputeLength'] = $this->tbComputeLength;
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
        if (isset($map['DbComputeLength'])) {
            $model->dbComputeLength = $map['DbComputeLength'];
        }
        if (isset($map['DetailTaskId'])) {
            $model->detailTaskId = $map['DetailTaskId'];
        }
        if (isset($map['ExpandType'])) {
            $model->expandType = $map['ExpandType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['ParentJobId'])) {
            $model->parentJobId = $map['ParentJobId'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ShowProgress'])) {
            $model->showProgress = $map['ShowProgress'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TaskDetail'])) {
            $model->taskDetail = $map['TaskDetail'];
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
        if (isset($map['TbComputeLength'])) {
            $model->tbComputeLength = $map['TbComputeLength'];
        }

        return $model;
    }
}

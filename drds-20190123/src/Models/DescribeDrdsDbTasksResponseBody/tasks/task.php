<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbTasksResponseBody\tasks;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @var string
     */
    public $taskPhase;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var int
     */
    public $tbComputeLength;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $parentJobId;

    /**
     * @var string
     */
    public $label;

    /**
     * @var int
     */
    public $taskType;

    /**
     * @var int
     */
    public $dbComputeLength;

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
    public $taskDetail;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $detailTaskId;

    /**
     * @var int
     */
    public $targetId;

    /**
     * @var string
     */
    public $expandType;
    protected $_name = [
        'taskPhase'       => 'TaskPhase',
        'progress'        => 'Progress',
        'tbComputeLength' => 'TbComputeLength',
        'taskName'        => 'TaskName',
        'parentJobId'     => 'ParentJobId',
        'label'           => 'Label',
        'taskType'        => 'TaskType',
        'dbComputeLength' => 'DbComputeLength',
        'allowCancel'     => 'AllowCancel',
        'taskStatus'      => 'TaskStatus',
        'showProgress'    => 'ShowProgress',
        'taskDetail'      => 'TaskDetail',
        'gmtCreate'       => 'GmtCreate',
        'detailTaskId'    => 'DetailTaskId',
        'targetId'        => 'TargetId',
        'expandType'      => 'ExpandType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskPhase) {
            $res['TaskPhase'] = $this->taskPhase;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->tbComputeLength) {
            $res['TbComputeLength'] = $this->tbComputeLength;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->parentJobId) {
            $res['ParentJobId'] = $this->parentJobId;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->dbComputeLength) {
            $res['DbComputeLength'] = $this->dbComputeLength;
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
        if (null !== $this->taskDetail) {
            $res['TaskDetail'] = $this->taskDetail;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->detailTaskId) {
            $res['DetailTaskId'] = $this->detailTaskId;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->expandType) {
            $res['ExpandType'] = $this->expandType;
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
        if (isset($map['TaskPhase'])) {
            $model->taskPhase = $map['TaskPhase'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['TbComputeLength'])) {
            $model->tbComputeLength = $map['TbComputeLength'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['ParentJobId'])) {
            $model->parentJobId = $map['ParentJobId'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['DbComputeLength'])) {
            $model->dbComputeLength = $map['DbComputeLength'];
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
        if (isset($map['TaskDetail'])) {
            $model->taskDetail = $map['TaskDetail'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['DetailTaskId'])) {
            $model->detailTaskId = $map['DetailTaskId'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['ExpandType'])) {
            $model->expandType = $map['ExpandType'];
        }

        return $model;
    }
}

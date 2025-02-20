<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetSowListResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $completeTime;
    /**
     * @var string
     */
    public $operateRemark;
    /**
     * @var string
     */
    public $progress;
    /**
     * @var int
     */
    public $recordCount;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var string
     */
    public $taskTypeName;
    /**
     * @var string
     */
    public $workOrderName;
    protected $_name = [
        'completeTime'  => 'CompleteTime',
        'operateRemark' => 'OperateRemark',
        'progress'      => 'Progress',
        'recordCount'   => 'RecordCount',
        'startTime'     => 'StartTime',
        'taskTypeName'  => 'TaskTypeName',
        'workOrderName' => 'WorkOrderName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }

        if (null !== $this->operateRemark) {
            $res['OperateRemark'] = $this->operateRemark;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->recordCount) {
            $res['RecordCount'] = $this->recordCount;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->taskTypeName) {
            $res['TaskTypeName'] = $this->taskTypeName;
        }

        if (null !== $this->workOrderName) {
            $res['WorkOrderName'] = $this->workOrderName;
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
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }

        if (isset($map['OperateRemark'])) {
            $model->operateRemark = $map['OperateRemark'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['RecordCount'])) {
            $model->recordCount = $map['RecordCount'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TaskTypeName'])) {
            $model->taskTypeName = $map['TaskTypeName'];
        }

        if (isset($map['WorkOrderName'])) {
            $model->workOrderName = $map['WorkOrderName'];
        }

        return $model;
    }
}

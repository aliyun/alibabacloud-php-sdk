<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetSowListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Completion time.
     *
     * @example 2024-03-28 16:19:35
     *
     * @var string
     */
    public $completeTime;

    /**
     * @description Operation remarks.
     *
     * @example 新建
     *
     * @var string
     */
    public $operateRemark;

    /**
     * @description Progress.
     *
     * @example IN_PREPARATION
     *
     * @var string
     */
    public $progress;

    /**
     * @description Record count.
     *
     * @example 173
     *
     * @var int
     */
    public $recordCount;

    /**
     * @description Start time.
     *
     * @example 2023-03-24 16:51:26
     *
     * @var string
     */
    public $startTime;

    /**
     * @description Task type.
     *
     * @example 安全风险评估
     *
     * @var string
     */
    public $taskTypeName;

    /**
     * @description Work order name.
     *
     * @example 安全产品配置问题与超量提醒
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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

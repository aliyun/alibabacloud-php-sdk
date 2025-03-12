<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCycleTaskListResponseBody;

use AlibabaCloud\Tea\Model;

class cycleScheduleResponseList extends Model
{
    /**
     * @description The configuration ID.
     *
     * @example 2cdbdeba8dd70586d5814d4cbf21****
     *
     * @var string
     */
    public $configId;

    /**
     * @description Indicates whether the configuration for the task interval was enabled. Valid values:
     *
     *   **1**: enabled.
     *   **0**: disabled.
     *
     * @example 1
     *
     * @var int
     */
    public $enable;

    /**
     * @description The time when the task first started.
     *
     * @example 1667491200000
     *
     * @var int
     */
    public $firstDateStr;

    /**
     * @description The interval between which two consecutive tasks are run.
     *
     * @example 3
     *
     * @var int
     */
    public $intervalPeriod;

    /**
     * @description The ID of the last task.
     *
     * @example 38730bb078f4a1461d4ed283994c****
     *
     * @var string
     */
    public $lastTaskId;

    /**
     * @description The time when the next task starts. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1671184531000
     *
     * @var int
     */
    public $nextStartTimeStr;

    /**
     * @description The extended information.
     *
     * @example {"userAgreement":"yes","lang":"zh"}
     *
     * @var string
     */
    public $param;

    /**
     * @description The unit of the scan interval. Valid values:
     *
     *   **day**
     *   **hour**
     *
     * @example day
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The end time of the task. The time must be a time frame.
     *
     * @example 7
     *
     * @var int
     */
    public $targetEndTime;

    /**
     * @description The start time of the task. The start time must be a time frame.
     *
     * @example 0
     *
     * @var int
     */
    public $targetStartTime;

    /**
     * @description The name of the task.
     *
     * @example IMAGE_SCAN
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The type of the task.
     *
     * @example IMAGE_SCAN
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'configId'         => 'ConfigId',
        'enable'           => 'Enable',
        'firstDateStr'     => 'FirstDateStr',
        'intervalPeriod'   => 'IntervalPeriod',
        'lastTaskId'       => 'LastTaskId',
        'nextStartTimeStr' => 'NextStartTimeStr',
        'param'            => 'Param',
        'periodUnit'       => 'PeriodUnit',
        'targetEndTime'    => 'TargetEndTime',
        'targetStartTime'  => 'TargetStartTime',
        'taskName'         => 'TaskName',
        'taskType'         => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->firstDateStr) {
            $res['FirstDateStr'] = $this->firstDateStr;
        }
        if (null !== $this->intervalPeriod) {
            $res['IntervalPeriod'] = $this->intervalPeriod;
        }
        if (null !== $this->lastTaskId) {
            $res['LastTaskId'] = $this->lastTaskId;
        }
        if (null !== $this->nextStartTimeStr) {
            $res['NextStartTimeStr'] = $this->nextStartTimeStr;
        }
        if (null !== $this->param) {
            $res['Param'] = $this->param;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->targetEndTime) {
            $res['TargetEndTime'] = $this->targetEndTime;
        }
        if (null !== $this->targetStartTime) {
            $res['TargetStartTime'] = $this->targetStartTime;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cycleScheduleResponseList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['FirstDateStr'])) {
            $model->firstDateStr = $map['FirstDateStr'];
        }
        if (isset($map['IntervalPeriod'])) {
            $model->intervalPeriod = $map['IntervalPeriod'];
        }
        if (isset($map['LastTaskId'])) {
            $model->lastTaskId = $map['LastTaskId'];
        }
        if (isset($map['NextStartTimeStr'])) {
            $model->nextStartTimeStr = $map['NextStartTimeStr'];
        }
        if (isset($map['Param'])) {
            $model->param = $map['Param'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['TargetEndTime'])) {
            $model->targetEndTime = $map['TargetEndTime'];
        }
        if (isset($map['TargetStartTime'])) {
            $model->targetStartTime = $map['TargetStartTime'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateCycleTaskRequest extends Model
{
    /**
     * @description Specifies whether to enable the task. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $enable;

    /**
     * @description The first time when the task is performed.
     *
     * @example 1650556800000
     *
     * @var int
     */
    public $firstDateStr;

    /**
     * @description The interval of the task.
     *
     * @example 7
     *
     * @var int
     */
    public $intervalPeriod;

    /**
     * @description The additional information.
     *
     * @example {
     * "name": "TI HOST",
     * "target": 10597***
     * "name": "expense HOST",
     * "target": 10597***
     * }
     * @var string
     */
    public $param;

    /**
     * @description The unit of the scan interval. Valid values:
     *
     *   **day**: days
     *   **hour**: hours
     *
     * @example day
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The additional source for the task.
     *
     * @example console_batch
     *
     * @var string
     */
    public $source;

    /**
     * @description The time when the task ends. Unit: hours.
     *
     * @example 6
     *
     * @var int
     */
    public $targetEndTime;

    /**
     * @description The time when the task is started. Unit: hours.
     *
     * @example 0
     *
     * @var int
     */
    public $targetStartTime;

    /**
     * @description The name of the task. Valid values:
     *
     *   **VIRUS_VUL_SCHEDULE_SCAN**: virus scan task
     *   **IMAGE_SCAN**: image scan task
     *   **EMG_VUL_SCHEDULE_SCAN**: urgent vulnerability scan task
     *
     * @example EMG_VUL_SCHEDULE_SCAN
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The type of the task. Valid values:
     *
     *   **VIRUS_VUL_SCHEDULE_SCAN**: virus scan task
     *   **IMAGE_SCAN**: image scan task
     *   **EMG_VUL_SCHEDULE_SCAN**: urgent vulnerability scan task
     *
     * @example VIRUS_VUL_SCHEDULE_SCAN
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'enable'          => 'Enable',
        'firstDateStr'    => 'FirstDateStr',
        'intervalPeriod'  => 'IntervalPeriod',
        'param'           => 'Param',
        'periodUnit'      => 'PeriodUnit',
        'source'          => 'Source',
        'targetEndTime'   => 'TargetEndTime',
        'targetStartTime' => 'TargetStartTime',
        'taskName'        => 'TaskName',
        'taskType'        => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->firstDateStr) {
            $res['FirstDateStr'] = $this->firstDateStr;
        }
        if (null !== $this->intervalPeriod) {
            $res['IntervalPeriod'] = $this->intervalPeriod;
        }
        if (null !== $this->param) {
            $res['Param'] = $this->param;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
     * @return CreateCycleTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['FirstDateStr'])) {
            $model->firstDateStr = $map['FirstDateStr'];
        }
        if (isset($map['IntervalPeriod'])) {
            $model->intervalPeriod = $map['IntervalPeriod'];
        }
        if (isset($map['Param'])) {
            $model->param = $map['Param'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
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

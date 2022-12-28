<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyCycleTaskRequest extends Model
{
    /**
     * @example 00cfa8161da093089e6804ba6a33****
     *
     * @var string
     */
    public $configId;

    /**
     * @example 1
     *
     * @var int
     */
    public $enable;

    /**
     * @example 1664380800000
     *
     * @var int
     */
    public $firstDateStr;

    /**
     * @example 14
     *
     * @var int
     */
    public $intervalPeriod;

    /**
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
     * @example day
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @example 6
     *
     * @var int
     */
    public $targetEndTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $targetStartTime;

    /**
     * @example EMG_VUL_SCHEDULE_SCAN
     *
     * @var string
     */
    public $taskName;

    /**
     * @example VIRUS_VUL_SCHEDULE_SCAN
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'configId'        => 'ConfigId',
        'enable'          => 'Enable',
        'firstDateStr'    => 'FirstDateStr',
        'intervalPeriod'  => 'IntervalPeriod',
        'param'           => 'Param',
        'periodUnit'      => 'PeriodUnit',
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
     * @return ModifyCycleTaskRequest
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

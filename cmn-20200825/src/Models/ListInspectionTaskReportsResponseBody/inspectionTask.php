<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListInspectionTaskReportsResponseBody;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListInspectionTaskReportsResponseBody\inspectionTask\alarmStatistic;
use AlibabaCloud\Tea\Model;

class inspectionTask extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $actualDeviceNumber;

    /**
     * @example 21
     *
     * @var int
     */
    public $alarmNumber;

    /**
     * @var alarmStatistic[]
     */
    public $alarmStatistic;

    /**
     * @example 2
     *
     * @var int
     */
    public $criticalNumber;

    /**
     * @example 1%
     *
     * @var string
     */
    public $criticalRate;

    /**
     * @example 1%
     *
     * @var string
     */
    public $deviceRate;

    /**
     * @example “”
     *
     * @var string
     */
    public $failureStatistic;

    /**
     * @example 2
     *
     * @var int
     */
    public $failureTaskNumber;

    /**
     * @example 1%
     *
     * @var string
     */
    public $failureTaskRate;

    /**
     * @example 21
     *
     * @var int
     */
    public $normalNumber;

    /**
     * @example 1%
     *
     * @var string
     */
    public $normalRate;

    /**
     * @example 2
     *
     * @var int
     */
    public $runningTaskNumber;

    /**
     * @example 1%
     *
     * @var string
     */
    public $runningTaskRate;

    /**
     * @example 2
     *
     * @var int
     */
    public $successTaskNumber;

    /**
     * @example 1%
     *
     * @var string
     */
    public $successTaskRate;

    /**
     * @example 12
     *
     * @var int
     */
    public $taskNumber;

    /**
     * @example 12
     *
     * @var int
     */
    public $totalDeviceNumber;

    /**
     * @example 65
     *
     * @var int
     */
    public $warningNumber;

    /**
     * @example 1%
     *
     * @var string
     */
    public $warningRate;
    protected $_name = [
        'actualDeviceNumber' => 'ActualDeviceNumber',
        'alarmNumber'        => 'AlarmNumber',
        'alarmStatistic'     => 'AlarmStatistic',
        'criticalNumber'     => 'CriticalNumber',
        'criticalRate'       => 'CriticalRate',
        'deviceRate'         => 'DeviceRate',
        'failureStatistic'   => 'FailureStatistic',
        'failureTaskNumber'  => 'FailureTaskNumber',
        'failureTaskRate'    => 'FailureTaskRate',
        'normalNumber'       => 'NormalNumber',
        'normalRate'         => 'NormalRate',
        'runningTaskNumber'  => 'RunningTaskNumber',
        'runningTaskRate'    => 'RunningTaskRate',
        'successTaskNumber'  => 'SuccessTaskNumber',
        'successTaskRate'    => 'SuccessTaskRate',
        'taskNumber'         => 'TaskNumber',
        'totalDeviceNumber'  => 'TotalDeviceNumber',
        'warningNumber'      => 'WarningNumber',
        'warningRate'        => 'WarningRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualDeviceNumber) {
            $res['ActualDeviceNumber'] = $this->actualDeviceNumber;
        }
        if (null !== $this->alarmNumber) {
            $res['AlarmNumber'] = $this->alarmNumber;
        }
        if (null !== $this->alarmStatistic) {
            $res['AlarmStatistic'] = [];
            if (null !== $this->alarmStatistic && \is_array($this->alarmStatistic)) {
                $n = 0;
                foreach ($this->alarmStatistic as $item) {
                    $res['AlarmStatistic'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->criticalNumber) {
            $res['CriticalNumber'] = $this->criticalNumber;
        }
        if (null !== $this->criticalRate) {
            $res['CriticalRate'] = $this->criticalRate;
        }
        if (null !== $this->deviceRate) {
            $res['DeviceRate'] = $this->deviceRate;
        }
        if (null !== $this->failureStatistic) {
            $res['FailureStatistic'] = $this->failureStatistic;
        }
        if (null !== $this->failureTaskNumber) {
            $res['FailureTaskNumber'] = $this->failureTaskNumber;
        }
        if (null !== $this->failureTaskRate) {
            $res['FailureTaskRate'] = $this->failureTaskRate;
        }
        if (null !== $this->normalNumber) {
            $res['NormalNumber'] = $this->normalNumber;
        }
        if (null !== $this->normalRate) {
            $res['NormalRate'] = $this->normalRate;
        }
        if (null !== $this->runningTaskNumber) {
            $res['RunningTaskNumber'] = $this->runningTaskNumber;
        }
        if (null !== $this->runningTaskRate) {
            $res['RunningTaskRate'] = $this->runningTaskRate;
        }
        if (null !== $this->successTaskNumber) {
            $res['SuccessTaskNumber'] = $this->successTaskNumber;
        }
        if (null !== $this->successTaskRate) {
            $res['SuccessTaskRate'] = $this->successTaskRate;
        }
        if (null !== $this->taskNumber) {
            $res['TaskNumber'] = $this->taskNumber;
        }
        if (null !== $this->totalDeviceNumber) {
            $res['TotalDeviceNumber'] = $this->totalDeviceNumber;
        }
        if (null !== $this->warningNumber) {
            $res['WarningNumber'] = $this->warningNumber;
        }
        if (null !== $this->warningRate) {
            $res['WarningRate'] = $this->warningRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inspectionTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActualDeviceNumber'])) {
            $model->actualDeviceNumber = $map['ActualDeviceNumber'];
        }
        if (isset($map['AlarmNumber'])) {
            $model->alarmNumber = $map['AlarmNumber'];
        }
        if (isset($map['AlarmStatistic'])) {
            if (!empty($map['AlarmStatistic'])) {
                $model->alarmStatistic = [];
                $n                     = 0;
                foreach ($map['AlarmStatistic'] as $item) {
                    $model->alarmStatistic[$n++] = null !== $item ? alarmStatistic::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CriticalNumber'])) {
            $model->criticalNumber = $map['CriticalNumber'];
        }
        if (isset($map['CriticalRate'])) {
            $model->criticalRate = $map['CriticalRate'];
        }
        if (isset($map['DeviceRate'])) {
            $model->deviceRate = $map['DeviceRate'];
        }
        if (isset($map['FailureStatistic'])) {
            $model->failureStatistic = $map['FailureStatistic'];
        }
        if (isset($map['FailureTaskNumber'])) {
            $model->failureTaskNumber = $map['FailureTaskNumber'];
        }
        if (isset($map['FailureTaskRate'])) {
            $model->failureTaskRate = $map['FailureTaskRate'];
        }
        if (isset($map['NormalNumber'])) {
            $model->normalNumber = $map['NormalNumber'];
        }
        if (isset($map['NormalRate'])) {
            $model->normalRate = $map['NormalRate'];
        }
        if (isset($map['RunningTaskNumber'])) {
            $model->runningTaskNumber = $map['RunningTaskNumber'];
        }
        if (isset($map['RunningTaskRate'])) {
            $model->runningTaskRate = $map['RunningTaskRate'];
        }
        if (isset($map['SuccessTaskNumber'])) {
            $model->successTaskNumber = $map['SuccessTaskNumber'];
        }
        if (isset($map['SuccessTaskRate'])) {
            $model->successTaskRate = $map['SuccessTaskRate'];
        }
        if (isset($map['TaskNumber'])) {
            $model->taskNumber = $map['TaskNumber'];
        }
        if (isset($map['TotalDeviceNumber'])) {
            $model->totalDeviceNumber = $map['TotalDeviceNumber'];
        }
        if (isset($map['WarningNumber'])) {
            $model->warningNumber = $map['WarningNumber'];
        }
        if (isset($map['WarningRate'])) {
            $model->warningRate = $map['WarningRate'];
        }

        return $model;
    }
}

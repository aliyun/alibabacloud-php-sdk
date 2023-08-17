<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDiagnosisTasksResponseBody;

use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @description The compute time ratio, which can be used to determine whether the task is really time-consuming. This parameter can be calculated by using the following formula: OperatorCost/Drivers/ElapsedTime. A greater value indicates that the task was executed for computing for most of the task time. A less value indicates that the task was waiting for scheduling or blocked due to other reasons for most of the task time.
     *
     * @example 0.89
     *
     * @var string
     */
    public $computeTimeRatio;

    /**
     * @description The number of tasks that can be executed concurrently.
     *
     * @example 16
     *
     * @var string
     */
    public $drivers;

    /**
     * @description The amount of time that elapsed from when the task was created to when the task was completed. Unit: milliseconds.
     *
     * @example 456
     *
     * @var int
     */
    public $elapsedTime;

    /**
     * @description The amount of input data in the task. Unit: bytes.
     *
     * @example 123
     *
     * @var int
     */
    public $inputDataSize;

    /**
     * @description The number of input rows in the task.
     *
     * @example 105
     *
     * @var int
     */
    public $inputRows;

    /**
     * @description The total amount of time that is consumed by all operators in the task on a node. This parameter can be used to determine whether long tails occur in computing. Unit: milliseconds.
     *
     * @example 3
     *
     * @var int
     */
    public $operatorCost;

    /**
     * @description The amount of output data in the task. Unit: bytes.
     *
     * @example 123
     *
     * @var int
     */
    public $outputDataSize;

    /**
     * @description The number of output rows in the task.
     *
     * @example 105
     *
     * @var int
     */
    public $outputRows;

    /**
     * @description The peak memory of the task. Unit: bytes.
     *
     * @example 234
     *
     * @var int
     */
    public $peakMemory;

    /**
     * @description The queuing duration of the task. Unit: milliseconds.
     *
     * @example 12
     *
     * @var string
     */
    public $queuedTime;

    /**
     * @description The amount of time that is consumed to scan data from a data source in the task. Unit: milliseconds.
     *
     * @example 0
     *
     * @var int
     */
    public $scanCost;

    /**
     * @description The amount of scanned data in the task. Unit: bytes.
     *
     * @example 123
     *
     * @var int
     */
    public $scanDataSize;

    /**
     * @description The number of rows that are scanned from a data source in the task.
     *
     * @example 0
     *
     * @var int
     */
    public $scanRows;

    /**
     * @description The final execution state of the task. Valid values:
     *
     *   FINISHED
     *   CANCELED
     *   ABORTED
     *   FAILED
     *
     * @example FINISHED
     *
     * @var string
     */
    public $state;

    /**
     * @description The timestamp when the task was created.
     *
     * @example 2022-12-12 00:00:12
     *
     * @var int
     */
    public $taskCreateTime;

    /**
     * @description The timestamp when the task ends.
     *
     * @example 2022-12-22 00:00:00
     *
     * @var int
     */
    public $taskEndTime;

    /**
     * @description The IP address of the host where the task was executed.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $taskHost;

    /**
     * @description The task ID.
     *
     * @example 22568****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'computeTimeRatio' => 'ComputeTimeRatio',
        'drivers'          => 'Drivers',
        'elapsedTime'      => 'ElapsedTime',
        'inputDataSize'    => 'InputDataSize',
        'inputRows'        => 'InputRows',
        'operatorCost'     => 'OperatorCost',
        'outputDataSize'   => 'OutputDataSize',
        'outputRows'       => 'OutputRows',
        'peakMemory'       => 'PeakMemory',
        'queuedTime'       => 'QueuedTime',
        'scanCost'         => 'ScanCost',
        'scanDataSize'     => 'ScanDataSize',
        'scanRows'         => 'ScanRows',
        'state'            => 'State',
        'taskCreateTime'   => 'TaskCreateTime',
        'taskEndTime'      => 'TaskEndTime',
        'taskHost'         => 'TaskHost',
        'taskId'           => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->computeTimeRatio) {
            $res['ComputeTimeRatio'] = $this->computeTimeRatio;
        }
        if (null !== $this->drivers) {
            $res['Drivers'] = $this->drivers;
        }
        if (null !== $this->elapsedTime) {
            $res['ElapsedTime'] = $this->elapsedTime;
        }
        if (null !== $this->inputDataSize) {
            $res['InputDataSize'] = $this->inputDataSize;
        }
        if (null !== $this->inputRows) {
            $res['InputRows'] = $this->inputRows;
        }
        if (null !== $this->operatorCost) {
            $res['OperatorCost'] = $this->operatorCost;
        }
        if (null !== $this->outputDataSize) {
            $res['OutputDataSize'] = $this->outputDataSize;
        }
        if (null !== $this->outputRows) {
            $res['OutputRows'] = $this->outputRows;
        }
        if (null !== $this->peakMemory) {
            $res['PeakMemory'] = $this->peakMemory;
        }
        if (null !== $this->queuedTime) {
            $res['QueuedTime'] = $this->queuedTime;
        }
        if (null !== $this->scanCost) {
            $res['ScanCost'] = $this->scanCost;
        }
        if (null !== $this->scanDataSize) {
            $res['ScanDataSize'] = $this->scanDataSize;
        }
        if (null !== $this->scanRows) {
            $res['ScanRows'] = $this->scanRows;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->taskCreateTime) {
            $res['TaskCreateTime'] = $this->taskCreateTime;
        }
        if (null !== $this->taskEndTime) {
            $res['TaskEndTime'] = $this->taskEndTime;
        }
        if (null !== $this->taskHost) {
            $res['TaskHost'] = $this->taskHost;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComputeTimeRatio'])) {
            $model->computeTimeRatio = $map['ComputeTimeRatio'];
        }
        if (isset($map['Drivers'])) {
            $model->drivers = $map['Drivers'];
        }
        if (isset($map['ElapsedTime'])) {
            $model->elapsedTime = $map['ElapsedTime'];
        }
        if (isset($map['InputDataSize'])) {
            $model->inputDataSize = $map['InputDataSize'];
        }
        if (isset($map['InputRows'])) {
            $model->inputRows = $map['InputRows'];
        }
        if (isset($map['OperatorCost'])) {
            $model->operatorCost = $map['OperatorCost'];
        }
        if (isset($map['OutputDataSize'])) {
            $model->outputDataSize = $map['OutputDataSize'];
        }
        if (isset($map['OutputRows'])) {
            $model->outputRows = $map['OutputRows'];
        }
        if (isset($map['PeakMemory'])) {
            $model->peakMemory = $map['PeakMemory'];
        }
        if (isset($map['QueuedTime'])) {
            $model->queuedTime = $map['QueuedTime'];
        }
        if (isset($map['ScanCost'])) {
            $model->scanCost = $map['ScanCost'];
        }
        if (isset($map['ScanDataSize'])) {
            $model->scanDataSize = $map['ScanDataSize'];
        }
        if (isset($map['ScanRows'])) {
            $model->scanRows = $map['ScanRows'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['TaskCreateTime'])) {
            $model->taskCreateTime = $map['TaskCreateTime'];
        }
        if (isset($map['TaskEndTime'])) {
            $model->taskEndTime = $map['TaskEndTime'];
        }
        if (isset($map['TaskHost'])) {
            $model->taskHost = $map['TaskHost'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}

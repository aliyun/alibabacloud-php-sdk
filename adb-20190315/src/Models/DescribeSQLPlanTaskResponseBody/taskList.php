<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPlanTaskResponseBody;

use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @description The time elapsed from when the task was created to when the task was complete. Unit: milliseconds.
     *
     * @example 10
     *
     * @var int
     */
    public $elapsedTime;

    /**
     * @description The number of input rows in the task.
     *
     * @example 105
     *
     * @var int
     */
    public $inputRows;

    /**
     * @description The amount of input data in the task. Unit: bytes.
     *
     * @example 3763
     *
     * @var int
     */
    public $inputSize;

    /**
     * @description The total amount of time consumed by operators in the task on a specific node. This parameter can be used to determine whether long tails occur in computing. Unit: milliseconds.
     *
     * @example 3
     *
     * @var int
     */
    public $operatorCost;

    /**
     * @description The number of output rows in the task.
     *
     * @example 105
     *
     * @var int
     */
    public $outputRows;

    /**
     * @description The amount of output data in the task. Unit: bytes.
     *
     * @example 945
     *
     * @var int
     */
    public $outputSize;

    /**
     * @description The peak memory of the task on a specific node. Unit: bytes.
     *
     * @example 898576
     *
     * @var int
     */
    public $peakMemory;

    /**
     * @description The time consumed to scan data from a data source in the task. Unit: milliseconds.
     *
     * @example 0
     *
     * @var int
     */
    public $scanCost;

    /**
     * @description The number of rows scanned from a data source in the task.
     *
     * @example 0
     *
     * @var int
     */
    public $scanRows;

    /**
     * @description The amount of data scanned from a data source in the task. Unit: bytes.
     *
     * @example 0
     *
     * @var int
     */
    public $scanSize;

    /**
     * @description The final execution status of the task. Valid values:
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
     * @description The ID of the task.
     *
     * @example 198877623
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'elapsedTime'  => 'ElapsedTime',
        'inputRows'    => 'InputRows',
        'inputSize'    => 'InputSize',
        'operatorCost' => 'OperatorCost',
        'outputRows'   => 'OutputRows',
        'outputSize'   => 'OutputSize',
        'peakMemory'   => 'PeakMemory',
        'scanCost'     => 'ScanCost',
        'scanRows'     => 'ScanRows',
        'scanSize'     => 'ScanSize',
        'state'        => 'State',
        'taskId'       => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elapsedTime) {
            $res['ElapsedTime'] = $this->elapsedTime;
        }
        if (null !== $this->inputRows) {
            $res['InputRows'] = $this->inputRows;
        }
        if (null !== $this->inputSize) {
            $res['InputSize'] = $this->inputSize;
        }
        if (null !== $this->operatorCost) {
            $res['OperatorCost'] = $this->operatorCost;
        }
        if (null !== $this->outputRows) {
            $res['OutputRows'] = $this->outputRows;
        }
        if (null !== $this->outputSize) {
            $res['OutputSize'] = $this->outputSize;
        }
        if (null !== $this->peakMemory) {
            $res['PeakMemory'] = $this->peakMemory;
        }
        if (null !== $this->scanCost) {
            $res['ScanCost'] = $this->scanCost;
        }
        if (null !== $this->scanRows) {
            $res['ScanRows'] = $this->scanRows;
        }
        if (null !== $this->scanSize) {
            $res['ScanSize'] = $this->scanSize;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['ElapsedTime'])) {
            $model->elapsedTime = $map['ElapsedTime'];
        }
        if (isset($map['InputRows'])) {
            $model->inputRows = $map['InputRows'];
        }
        if (isset($map['InputSize'])) {
            $model->inputSize = $map['InputSize'];
        }
        if (isset($map['OperatorCost'])) {
            $model->operatorCost = $map['OperatorCost'];
        }
        if (isset($map['OutputRows'])) {
            $model->outputRows = $map['OutputRows'];
        }
        if (isset($map['OutputSize'])) {
            $model->outputSize = $map['OutputSize'];
        }
        if (isset($map['PeakMemory'])) {
            $model->peakMemory = $map['PeakMemory'];
        }
        if (isset($map['ScanCost'])) {
            $model->scanCost = $map['ScanCost'];
        }
        if (isset($map['ScanRows'])) {
            $model->scanRows = $map['ScanRows'];
        }
        if (isset($map['ScanSize'])) {
            $model->scanSize = $map['ScanSize'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}

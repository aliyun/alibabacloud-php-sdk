<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPlanTaskResponseBody;

use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @var int
     */
    public $scanCost;

    /**
     * @var int
     */
    public $outputSize;

    /**
     * @var int
     */
    public $inputSize;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $operatorCost;

    /**
     * @var int
     */
    public $outputRows;

    /**
     * @var int
     */
    public $scanSize;

    /**
     * @var int
     */
    public $elapsedTime;

    /**
     * @var int
     */
    public $scanRows;

    /**
     * @var int
     */
    public $peakMemory;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var int
     */
    public $inputRows;
    protected $_name = [
        'scanCost'     => 'ScanCost',
        'outputSize'   => 'OutputSize',
        'inputSize'    => 'InputSize',
        'state'        => 'State',
        'operatorCost' => 'OperatorCost',
        'outputRows'   => 'OutputRows',
        'scanSize'     => 'ScanSize',
        'elapsedTime'  => 'ElapsedTime',
        'scanRows'     => 'ScanRows',
        'peakMemory'   => 'PeakMemory',
        'taskId'       => 'TaskId',
        'inputRows'    => 'InputRows',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scanCost) {
            $res['ScanCost'] = $this->scanCost;
        }
        if (null !== $this->outputSize) {
            $res['OutputSize'] = $this->outputSize;
        }
        if (null !== $this->inputSize) {
            $res['InputSize'] = $this->inputSize;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->operatorCost) {
            $res['OperatorCost'] = $this->operatorCost;
        }
        if (null !== $this->outputRows) {
            $res['OutputRows'] = $this->outputRows;
        }
        if (null !== $this->scanSize) {
            $res['ScanSize'] = $this->scanSize;
        }
        if (null !== $this->elapsedTime) {
            $res['ElapsedTime'] = $this->elapsedTime;
        }
        if (null !== $this->scanRows) {
            $res['ScanRows'] = $this->scanRows;
        }
        if (null !== $this->peakMemory) {
            $res['PeakMemory'] = $this->peakMemory;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->inputRows) {
            $res['InputRows'] = $this->inputRows;
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
        if (isset($map['ScanCost'])) {
            $model->scanCost = $map['ScanCost'];
        }
        if (isset($map['OutputSize'])) {
            $model->outputSize = $map['OutputSize'];
        }
        if (isset($map['InputSize'])) {
            $model->inputSize = $map['InputSize'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['OperatorCost'])) {
            $model->operatorCost = $map['OperatorCost'];
        }
        if (isset($map['OutputRows'])) {
            $model->outputRows = $map['OutputRows'];
        }
        if (isset($map['ScanSize'])) {
            $model->scanSize = $map['ScanSize'];
        }
        if (isset($map['ElapsedTime'])) {
            $model->elapsedTime = $map['ElapsedTime'];
        }
        if (isset($map['ScanRows'])) {
            $model->scanRows = $map['ScanRows'];
        }
        if (isset($map['PeakMemory'])) {
            $model->peakMemory = $map['PeakMemory'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['InputRows'])) {
            $model->inputRows = $map['InputRows'];
        }

        return $model;
    }
}

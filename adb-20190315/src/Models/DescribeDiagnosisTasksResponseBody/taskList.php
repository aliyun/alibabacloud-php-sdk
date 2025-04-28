<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDiagnosisTasksResponseBody;

use AlibabaCloud\Dara\Model;

class taskList extends Model
{
    /**
     * @var string
     */
    public $computeTimeRatio;

    /**
     * @var string
     */
    public $drivers;

    /**
     * @var int
     */
    public $elapsedTime;

    /**
     * @var int
     */
    public $inputDataSize;

    /**
     * @var int
     */
    public $inputRows;

    /**
     * @var int
     */
    public $operatorCost;

    /**
     * @var int
     */
    public $outputDataSize;

    /**
     * @var int
     */
    public $outputRows;

    /**
     * @var int
     */
    public $peakMemory;

    /**
     * @var string
     */
    public $queuedTime;

    /**
     * @var int
     */
    public $scanCost;

    /**
     * @var int
     */
    public $scanDataSize;

    /**
     * @var int
     */
    public $scanRows;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $taskCreateTime;

    /**
     * @var int
     */
    public $taskEndTime;

    /**
     * @var string
     */
    public $taskHost;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'computeTimeRatio' => 'ComputeTimeRatio',
        'drivers' => 'Drivers',
        'elapsedTime' => 'ElapsedTime',
        'inputDataSize' => 'InputDataSize',
        'inputRows' => 'InputRows',
        'operatorCost' => 'OperatorCost',
        'outputDataSize' => 'OutputDataSize',
        'outputRows' => 'OutputRows',
        'peakMemory' => 'PeakMemory',
        'queuedTime' => 'QueuedTime',
        'scanCost' => 'ScanCost',
        'scanDataSize' => 'ScanDataSize',
        'scanRows' => 'ScanRows',
        'state' => 'State',
        'taskCreateTime' => 'TaskCreateTime',
        'taskEndTime' => 'TaskEndTime',
        'taskHost' => 'TaskHost',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

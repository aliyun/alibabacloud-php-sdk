<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPlanResponseBody;

use AlibabaCloud\Tea\Model;

class stageList extends Model
{
    /**
     * @description The average `CPU Time` value on each compute node in the stage. Unit: milliseconds.
     *
     * @example 5984
     *
     * @var int
     */
    public $CPUTimeAvg;

    /**
     * @description The maximum `CPU Time` value on each compute node in the stage. Unit: milliseconds.
     *
     * @example 5984
     *
     * @var int
     */
    public $CPUTimeMax;

    /**
     * @description The minimum `CPU Time` value on each compute node in the stage. Unit: milliseconds.
     *
     * @example 47
     *
     * @var int
     */
    public $CPUTimeMin;

    /**
     * @description The average amount of input data on each compute node in the stage. Unit: bytes.
     *
     * @example 173
     *
     * @var int
     */
    public $inputSizeAvg;

    /**
     * @description The maximum amount of input data on each compute node in the stage. Unit: byte.
     *
     * @example 173
     *
     * @var int
     */
    public $inputSizeMax;

    /**
     * @description The minimum amount of input data on each compute node in the stage. Unit: bytes.
     *
     * @example 173
     *
     * @var int
     */
    public $inputSizeMin;

    /**
     * @description The total CPU time consumed by all operators in the stage, which is equivalent to the total CPU time of the stage. You can use this parameter to determine which parts of the stage consume a large amount of computing resources. Unit: milliseconds.
     *
     * @example 5984
     *
     * @var int
     */
    public $operatorCost;

    /**
     * @description The maximum memory usage when the SQL statement is executed. Unit: bytes.
     *
     * @example 74208
     *
     * @var int
     */
    public $peakMemory;

    /**
     * @description The average amount of data scanned by a scan operator on each storage node in the stage. Unit: bytes.
     *
     * @example 0
     *
     * @var int
     */
    public $scanSizeAvg;

    /**
     * @description The maximum amount of data scanned by a scan operator on each storage node in the stage. Unit: bytes.
     *
     * @example 0
     *
     * @var int
     */
    public $scanSizeMax;

    /**
     * @description The minimum amount of data scanned by a scan operator on each storage node in the stage. Unit: bytes.
     *
     * @example 0
     *
     * @var int
     */
    public $scanSizeMin;

    /**
     * @description The average amount of time consumed by a scan operator to read data on each storage node in the stage. Unit: milliseconds.
     *
     * @example 0
     *
     * @var int
     */
    public $scanTimeAvg;

    /**
     * @description The maximum amount of time consumed by a scan operator to read data on each storage node in the stage. Unit: milliseconds.
     *
     * @example 0
     *
     * @var int
     */
    public $scanTimeMax;

    /**
     * @description The minimum amount of time consumed by a scan operator to read data on each storage node in the stage. Unit: milliseconds.
     *
     * @example 0
     *
     * @var int
     */
    public $scanTimeMin;

    /**
     * @description The stage ID.
     *
     * @example 1
     *
     * @var int
     */
    public $stageId;

    /**
     * @description The final execution state of the stage. Valid values:
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
    protected $_name = [
        'CPUTimeAvg'   => 'CPUTimeAvg',
        'CPUTimeMax'   => 'CPUTimeMax',
        'CPUTimeMin'   => 'CPUTimeMin',
        'inputSizeAvg' => 'InputSizeAvg',
        'inputSizeMax' => 'InputSizeMax',
        'inputSizeMin' => 'InputSizeMin',
        'operatorCost' => 'OperatorCost',
        'peakMemory'   => 'PeakMemory',
        'scanSizeAvg'  => 'ScanSizeAvg',
        'scanSizeMax'  => 'ScanSizeMax',
        'scanSizeMin'  => 'ScanSizeMin',
        'scanTimeAvg'  => 'ScanTimeAvg',
        'scanTimeMax'  => 'ScanTimeMax',
        'scanTimeMin'  => 'ScanTimeMin',
        'stageId'      => 'StageId',
        'state'        => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CPUTimeAvg) {
            $res['CPUTimeAvg'] = $this->CPUTimeAvg;
        }
        if (null !== $this->CPUTimeMax) {
            $res['CPUTimeMax'] = $this->CPUTimeMax;
        }
        if (null !== $this->CPUTimeMin) {
            $res['CPUTimeMin'] = $this->CPUTimeMin;
        }
        if (null !== $this->inputSizeAvg) {
            $res['InputSizeAvg'] = $this->inputSizeAvg;
        }
        if (null !== $this->inputSizeMax) {
            $res['InputSizeMax'] = $this->inputSizeMax;
        }
        if (null !== $this->inputSizeMin) {
            $res['InputSizeMin'] = $this->inputSizeMin;
        }
        if (null !== $this->operatorCost) {
            $res['OperatorCost'] = $this->operatorCost;
        }
        if (null !== $this->peakMemory) {
            $res['PeakMemory'] = $this->peakMemory;
        }
        if (null !== $this->scanSizeAvg) {
            $res['ScanSizeAvg'] = $this->scanSizeAvg;
        }
        if (null !== $this->scanSizeMax) {
            $res['ScanSizeMax'] = $this->scanSizeMax;
        }
        if (null !== $this->scanSizeMin) {
            $res['ScanSizeMin'] = $this->scanSizeMin;
        }
        if (null !== $this->scanTimeAvg) {
            $res['ScanTimeAvg'] = $this->scanTimeAvg;
        }
        if (null !== $this->scanTimeMax) {
            $res['ScanTimeMax'] = $this->scanTimeMax;
        }
        if (null !== $this->scanTimeMin) {
            $res['ScanTimeMin'] = $this->scanTimeMin;
        }
        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stageList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CPUTimeAvg'])) {
            $model->CPUTimeAvg = $map['CPUTimeAvg'];
        }
        if (isset($map['CPUTimeMax'])) {
            $model->CPUTimeMax = $map['CPUTimeMax'];
        }
        if (isset($map['CPUTimeMin'])) {
            $model->CPUTimeMin = $map['CPUTimeMin'];
        }
        if (isset($map['InputSizeAvg'])) {
            $model->inputSizeAvg = $map['InputSizeAvg'];
        }
        if (isset($map['InputSizeMax'])) {
            $model->inputSizeMax = $map['InputSizeMax'];
        }
        if (isset($map['InputSizeMin'])) {
            $model->inputSizeMin = $map['InputSizeMin'];
        }
        if (isset($map['OperatorCost'])) {
            $model->operatorCost = $map['OperatorCost'];
        }
        if (isset($map['PeakMemory'])) {
            $model->peakMemory = $map['PeakMemory'];
        }
        if (isset($map['ScanSizeAvg'])) {
            $model->scanSizeAvg = $map['ScanSizeAvg'];
        }
        if (isset($map['ScanSizeMax'])) {
            $model->scanSizeMax = $map['ScanSizeMax'];
        }
        if (isset($map['ScanSizeMin'])) {
            $model->scanSizeMin = $map['ScanSizeMin'];
        }
        if (isset($map['ScanTimeAvg'])) {
            $model->scanTimeAvg = $map['ScanTimeAvg'];
        }
        if (isset($map['ScanTimeMax'])) {
            $model->scanTimeMax = $map['ScanTimeMax'];
        }
        if (isset($map['ScanTimeMin'])) {
            $model->scanTimeMin = $map['ScanTimeMin'];
        }
        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}

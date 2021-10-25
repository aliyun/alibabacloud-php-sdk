<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPlanResponseBody;

use AlibabaCloud\Tea\Model;

class stageList extends Model
{
    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $CPUTimeMax;

    /**
     * @var int
     */
    public $CPUTimeAvg;

    /**
     * @var int
     */
    public $operatorCost;

    /**
     * @var int
     */
    public $scanTimeMax;

    /**
     * @var int
     */
    public $stageId;

    /**
     * @var int
     */
    public $inputSizeMax;

    /**
     * @var int
     */
    public $scanSizeMax;

    /**
     * @var int
     */
    public $CPUTimeMin;

    /**
     * @var int
     */
    public $scanTimeMin;

    /**
     * @var int
     */
    public $scanSizeMin;

    /**
     * @var int
     */
    public $inputSizeMin;

    /**
     * @var int
     */
    public $peakMemory;

    /**
     * @var int
     */
    public $scanTimeAvg;

    /**
     * @var int
     */
    public $scanSizeAvg;

    /**
     * @var int
     */
    public $inputSizeAvg;
    protected $_name = [
        'state'        => 'State',
        'CPUTimeMax'   => 'CPUTimeMax',
        'CPUTimeAvg'   => 'CPUTimeAvg',
        'operatorCost' => 'OperatorCost',
        'scanTimeMax'  => 'ScanTimeMax',
        'stageId'      => 'StageId',
        'inputSizeMax' => 'InputSizeMax',
        'scanSizeMax'  => 'ScanSizeMax',
        'CPUTimeMin'   => 'CPUTimeMin',
        'scanTimeMin'  => 'ScanTimeMin',
        'scanSizeMin'  => 'ScanSizeMin',
        'inputSizeMin' => 'InputSizeMin',
        'peakMemory'   => 'PeakMemory',
        'scanTimeAvg'  => 'ScanTimeAvg',
        'scanSizeAvg'  => 'ScanSizeAvg',
        'inputSizeAvg' => 'InputSizeAvg',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->CPUTimeMax) {
            $res['CPUTimeMax'] = $this->CPUTimeMax;
        }
        if (null !== $this->CPUTimeAvg) {
            $res['CPUTimeAvg'] = $this->CPUTimeAvg;
        }
        if (null !== $this->operatorCost) {
            $res['OperatorCost'] = $this->operatorCost;
        }
        if (null !== $this->scanTimeMax) {
            $res['ScanTimeMax'] = $this->scanTimeMax;
        }
        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }
        if (null !== $this->inputSizeMax) {
            $res['InputSizeMax'] = $this->inputSizeMax;
        }
        if (null !== $this->scanSizeMax) {
            $res['ScanSizeMax'] = $this->scanSizeMax;
        }
        if (null !== $this->CPUTimeMin) {
            $res['CPUTimeMin'] = $this->CPUTimeMin;
        }
        if (null !== $this->scanTimeMin) {
            $res['ScanTimeMin'] = $this->scanTimeMin;
        }
        if (null !== $this->scanSizeMin) {
            $res['ScanSizeMin'] = $this->scanSizeMin;
        }
        if (null !== $this->inputSizeMin) {
            $res['InputSizeMin'] = $this->inputSizeMin;
        }
        if (null !== $this->peakMemory) {
            $res['PeakMemory'] = $this->peakMemory;
        }
        if (null !== $this->scanTimeAvg) {
            $res['ScanTimeAvg'] = $this->scanTimeAvg;
        }
        if (null !== $this->scanSizeAvg) {
            $res['ScanSizeAvg'] = $this->scanSizeAvg;
        }
        if (null !== $this->inputSizeAvg) {
            $res['InputSizeAvg'] = $this->inputSizeAvg;
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
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['CPUTimeMax'])) {
            $model->CPUTimeMax = $map['CPUTimeMax'];
        }
        if (isset($map['CPUTimeAvg'])) {
            $model->CPUTimeAvg = $map['CPUTimeAvg'];
        }
        if (isset($map['OperatorCost'])) {
            $model->operatorCost = $map['OperatorCost'];
        }
        if (isset($map['ScanTimeMax'])) {
            $model->scanTimeMax = $map['ScanTimeMax'];
        }
        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }
        if (isset($map['InputSizeMax'])) {
            $model->inputSizeMax = $map['InputSizeMax'];
        }
        if (isset($map['ScanSizeMax'])) {
            $model->scanSizeMax = $map['ScanSizeMax'];
        }
        if (isset($map['CPUTimeMin'])) {
            $model->CPUTimeMin = $map['CPUTimeMin'];
        }
        if (isset($map['ScanTimeMin'])) {
            $model->scanTimeMin = $map['ScanTimeMin'];
        }
        if (isset($map['ScanSizeMin'])) {
            $model->scanSizeMin = $map['ScanSizeMin'];
        }
        if (isset($map['InputSizeMin'])) {
            $model->inputSizeMin = $map['InputSizeMin'];
        }
        if (isset($map['PeakMemory'])) {
            $model->peakMemory = $map['PeakMemory'];
        }
        if (isset($map['ScanTimeAvg'])) {
            $model->scanTimeAvg = $map['ScanTimeAvg'];
        }
        if (isset($map['ScanSizeAvg'])) {
            $model->scanSizeAvg = $map['ScanSizeAvg'];
        }
        if (isset($map['InputSizeAvg'])) {
            $model->inputSizeAvg = $map['InputSizeAvg'];
        }

        return $model;
    }
}

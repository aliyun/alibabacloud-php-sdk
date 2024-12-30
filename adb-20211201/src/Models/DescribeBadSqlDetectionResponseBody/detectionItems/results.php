<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeBadSqlDetectionResponseBody\detectionItems;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeBadSqlDetectionResponseBody\detectionItems\results\diagnosisResults;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @example 709
     *
     * @var int
     */
    public $cost;

    /**
     * @var diagnosisResults[]
     */
    public $diagnosisResults;

    /**
     * @example 2345
     *
     * @var int
     */
    public $operatorCost;

    /**
     * @example 235433
     *
     * @var int
     */
    public $outputDataSize;

    /**
     * @example 3467484070025860498
     *
     * @var string
     */
    public $patternId;

    /**
     * @example 234
     *
     * @var int
     */
    public $peakMemory;

    /**
     * @example 202410161002191720161451770345363xxxx
     *
     * @var string
     */
    public $processId;

    /**
     * @example SELECT * FROM device WHERE product_key = \\"h66zXfxet2X\\" AND name = \\"device@zntbtfptv5_9237117\\"
     *
     * @var string
     */
    public $SQL;

    /**
     * @example 2342
     *
     * @var int
     */
    public $scanSize;

    /**
     * @example 2024-09-06T02:11:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 5
     *
     * @var int
     */
    public $totalStages;
    protected $_name = [
        'cost'             => 'Cost',
        'diagnosisResults' => 'DiagnosisResults',
        'operatorCost'     => 'OperatorCost',
        'outputDataSize'   => 'OutputDataSize',
        'patternId'        => 'PatternId',
        'peakMemory'       => 'PeakMemory',
        'processId'        => 'ProcessId',
        'SQL'              => 'SQL',
        'scanSize'         => 'ScanSize',
        'startTime'        => 'StartTime',
        'totalStages'      => 'TotalStages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cost) {
            $res['Cost'] = $this->cost;
        }
        if (null !== $this->diagnosisResults) {
            $res['DiagnosisResults'] = [];
            if (null !== $this->diagnosisResults && \is_array($this->diagnosisResults)) {
                $n = 0;
                foreach ($this->diagnosisResults as $item) {
                    $res['DiagnosisResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->operatorCost) {
            $res['OperatorCost'] = $this->operatorCost;
        }
        if (null !== $this->outputDataSize) {
            $res['OutputDataSize'] = $this->outputDataSize;
        }
        if (null !== $this->patternId) {
            $res['PatternId'] = $this->patternId;
        }
        if (null !== $this->peakMemory) {
            $res['PeakMemory'] = $this->peakMemory;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->SQL) {
            $res['SQL'] = $this->SQL;
        }
        if (null !== $this->scanSize) {
            $res['ScanSize'] = $this->scanSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->totalStages) {
            $res['TotalStages'] = $this->totalStages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cost'])) {
            $model->cost = $map['Cost'];
        }
        if (isset($map['DiagnosisResults'])) {
            if (!empty($map['DiagnosisResults'])) {
                $model->diagnosisResults = [];
                $n                       = 0;
                foreach ($map['DiagnosisResults'] as $item) {
                    $model->diagnosisResults[$n++] = null !== $item ? diagnosisResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OperatorCost'])) {
            $model->operatorCost = $map['OperatorCost'];
        }
        if (isset($map['OutputDataSize'])) {
            $model->outputDataSize = $map['OutputDataSize'];
        }
        if (isset($map['PatternId'])) {
            $model->patternId = $map['PatternId'];
        }
        if (isset($map['PeakMemory'])) {
            $model->peakMemory = $map['PeakMemory'];
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['SQL'])) {
            $model->SQL = $map['SQL'];
        }
        if (isset($map['ScanSize'])) {
            $model->scanSize = $map['ScanSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TotalStages'])) {
            $model->totalStages = $map['TotalStages'];
        }

        return $model;
    }
}

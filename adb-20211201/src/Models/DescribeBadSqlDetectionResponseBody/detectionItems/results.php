<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeBadSqlDetectionResponseBody\detectionItems;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeBadSqlDetectionResponseBody\detectionItems\results\diagnosisResults;

class results extends Model
{
    /**
     * @var int
     */
    public $cost;
    /**
     * @var diagnosisResults[]
     */
    public $diagnosisResults;
    /**
     * @var int
     */
    public $operatorCost;
    /**
     * @var int
     */
    public $outputDataSize;
    /**
     * @var string
     */
    public $patternId;
    /**
     * @var int
     */
    public $peakMemory;
    /**
     * @var string
     */
    public $processId;
    /**
     * @var string
     */
    public $SQL;
    /**
     * @var int
     */
    public $scanSize;
    /**
     * @var string
     */
    public $startTime;
    /**
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
        if (\is_array($this->diagnosisResults)) {
            Model::validateArray($this->diagnosisResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cost) {
            $res['Cost'] = $this->cost;
        }

        if (null !== $this->diagnosisResults) {
            if (\is_array($this->diagnosisResults)) {
                $res['DiagnosisResults'] = [];
                $n1                      = 0;
                foreach ($this->diagnosisResults as $item1) {
                    $res['DiagnosisResults'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cost'])) {
            $model->cost = $map['Cost'];
        }

        if (isset($map['DiagnosisResults'])) {
            if (!empty($map['DiagnosisResults'])) {
                $model->diagnosisResults = [];
                $n1                      = 0;
                foreach ($map['DiagnosisResults'] as $item1) {
                    $model->diagnosisResults[$n1++] = diagnosisResults::fromMap($item1);
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

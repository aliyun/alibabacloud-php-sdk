<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSqlPatternCompareReportResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\ItemsMetricValuesValue;

class items extends Model
{
    /**
     * @var string
     */
    public $avgExecutionTime;

    /**
     * @var string
     */
    public $avgPlanningTime;

    /**
     * @var string
     */
    public $avgRt;

    /**
     * @var string
     */
    public $maxExecutionTime;

    /**
     * @var string
     */
    public $maxPlanningTime;

    /**
     * @var string
     */
    public $maxRt;

    /**
     * @var ItemsMetricValuesValue[]
     */
    public $metricValues;

    /**
     * @var string
     */
    public $pattern;

    /**
     * @var int
     */
    public $queryCount;

    /**
     * @var string
     */
    public $queryCountDisplayValue;

    /**
     * @var int
     */
    public $rank;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $sqlPatternHash;

    /**
     * @var string
     */
    public $totalQueryTime;

    /**
     * @var string
     */
    public $totalScanCost;
    protected $_name = [
        'avgExecutionTime' => 'AvgExecutionTime',
        'avgPlanningTime' => 'AvgPlanningTime',
        'avgRt' => 'AvgRt',
        'maxExecutionTime' => 'MaxExecutionTime',
        'maxPlanningTime' => 'MaxPlanningTime',
        'maxRt' => 'MaxRt',
        'metricValues' => 'MetricValues',
        'pattern' => 'Pattern',
        'queryCount' => 'QueryCount',
        'queryCountDisplayValue' => 'QueryCountDisplayValue',
        'rank' => 'Rank',
        'riskLevel' => 'RiskLevel',
        'sqlPatternHash' => 'SqlPatternHash',
        'totalQueryTime' => 'TotalQueryTime',
        'totalScanCost' => 'TotalScanCost',
    ];

    public function validate()
    {
        if (\is_array($this->metricValues)) {
            Model::validateArray($this->metricValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avgExecutionTime) {
            $res['AvgExecutionTime'] = $this->avgExecutionTime;
        }

        if (null !== $this->avgPlanningTime) {
            $res['AvgPlanningTime'] = $this->avgPlanningTime;
        }

        if (null !== $this->avgRt) {
            $res['AvgRt'] = $this->avgRt;
        }

        if (null !== $this->maxExecutionTime) {
            $res['MaxExecutionTime'] = $this->maxExecutionTime;
        }

        if (null !== $this->maxPlanningTime) {
            $res['MaxPlanningTime'] = $this->maxPlanningTime;
        }

        if (null !== $this->maxRt) {
            $res['MaxRt'] = $this->maxRt;
        }

        if (null !== $this->metricValues) {
            if (\is_array($this->metricValues)) {
                $res['MetricValues'] = [];
                foreach ($this->metricValues as $key1 => $value1) {
                    $res['MetricValues'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->pattern) {
            $res['Pattern'] = $this->pattern;
        }

        if (null !== $this->queryCount) {
            $res['QueryCount'] = $this->queryCount;
        }

        if (null !== $this->queryCountDisplayValue) {
            $res['QueryCountDisplayValue'] = $this->queryCountDisplayValue;
        }

        if (null !== $this->rank) {
            $res['Rank'] = $this->rank;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->sqlPatternHash) {
            $res['SqlPatternHash'] = $this->sqlPatternHash;
        }

        if (null !== $this->totalQueryTime) {
            $res['TotalQueryTime'] = $this->totalQueryTime;
        }

        if (null !== $this->totalScanCost) {
            $res['TotalScanCost'] = $this->totalScanCost;
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
        if (isset($map['AvgExecutionTime'])) {
            $model->avgExecutionTime = $map['AvgExecutionTime'];
        }

        if (isset($map['AvgPlanningTime'])) {
            $model->avgPlanningTime = $map['AvgPlanningTime'];
        }

        if (isset($map['AvgRt'])) {
            $model->avgRt = $map['AvgRt'];
        }

        if (isset($map['MaxExecutionTime'])) {
            $model->maxExecutionTime = $map['MaxExecutionTime'];
        }

        if (isset($map['MaxPlanningTime'])) {
            $model->maxPlanningTime = $map['MaxPlanningTime'];
        }

        if (isset($map['MaxRt'])) {
            $model->maxRt = $map['MaxRt'];
        }

        if (isset($map['MetricValues'])) {
            if (!empty($map['MetricValues'])) {
                $model->metricValues = [];
                foreach ($map['MetricValues'] as $key1 => $value1) {
                    $model->metricValues[$key1] = ItemsMetricValuesValue::fromMap($value1);
                }
            }
        }

        if (isset($map['Pattern'])) {
            $model->pattern = $map['Pattern'];
        }

        if (isset($map['QueryCount'])) {
            $model->queryCount = $map['QueryCount'];
        }

        if (isset($map['QueryCountDisplayValue'])) {
            $model->queryCountDisplayValue = $map['QueryCountDisplayValue'];
        }

        if (isset($map['Rank'])) {
            $model->rank = $map['Rank'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['SqlPatternHash'])) {
            $model->sqlPatternHash = $map['SqlPatternHash'];
        }

        if (isset($map['TotalQueryTime'])) {
            $model->totalQueryTime = $map['TotalQueryTime'];
        }

        if (isset($map['TotalScanCost'])) {
            $model->totalScanCost = $map['TotalScanCost'];
        }

        return $model;
    }
}

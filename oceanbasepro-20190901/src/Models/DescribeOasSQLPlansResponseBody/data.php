<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasSQLPlansResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasSQLPlansResponseBody\data\planExplain;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasSQLPlansResponseBody\data\plans;

class data extends Model
{
    /**
     * @var float
     */
    public $avgCpuTime;

    /**
     * @var bool
     */
    public $bounded;

    /**
     * @var int
     */
    public $executions;

    /**
     * @var string
     */
    public $firstLoadTime;

    /**
     * @var bool
     */
    public $hitDiagnosis;

    /**
     * @var float
     */
    public $hitPercentage;

    /**
     * @var int
     */
    public $mergedVersion;

    /**
     * @var string
     */
    public $outlineId;

    /**
     * @var string
     */
    public $outlineStatus;

    /**
     * @var planExplain
     */
    public $planExplain;

    /**
     * @var string
     */
    public $planHash;

    /**
     * @var string
     */
    public $planType;

    /**
     * @var string
     */
    public $planUnionHash;

    /**
     * @var plans[]
     */
    public $plans;

    /**
     * @var string
     */
    public $querySql;

    /**
     * @var bool
     */
    public $tableScan;
    protected $_name = [
        'avgCpuTime' => 'AvgCpuTime',
        'bounded' => 'Bounded',
        'executions' => 'Executions',
        'firstLoadTime' => 'FirstLoadTime',
        'hitDiagnosis' => 'HitDiagnosis',
        'hitPercentage' => 'HitPercentage',
        'mergedVersion' => 'MergedVersion',
        'outlineId' => 'OutlineId',
        'outlineStatus' => 'OutlineStatus',
        'planExplain' => 'PlanExplain',
        'planHash' => 'PlanHash',
        'planType' => 'PlanType',
        'planUnionHash' => 'PlanUnionHash',
        'plans' => 'Plans',
        'querySql' => 'QuerySql',
        'tableScan' => 'TableScan',
    ];

    public function validate()
    {
        if (null !== $this->planExplain) {
            $this->planExplain->validate();
        }
        if (\is_array($this->plans)) {
            Model::validateArray($this->plans);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avgCpuTime) {
            $res['AvgCpuTime'] = $this->avgCpuTime;
        }

        if (null !== $this->bounded) {
            $res['Bounded'] = $this->bounded;
        }

        if (null !== $this->executions) {
            $res['Executions'] = $this->executions;
        }

        if (null !== $this->firstLoadTime) {
            $res['FirstLoadTime'] = $this->firstLoadTime;
        }

        if (null !== $this->hitDiagnosis) {
            $res['HitDiagnosis'] = $this->hitDiagnosis;
        }

        if (null !== $this->hitPercentage) {
            $res['HitPercentage'] = $this->hitPercentage;
        }

        if (null !== $this->mergedVersion) {
            $res['MergedVersion'] = $this->mergedVersion;
        }

        if (null !== $this->outlineId) {
            $res['OutlineId'] = $this->outlineId;
        }

        if (null !== $this->outlineStatus) {
            $res['OutlineStatus'] = $this->outlineStatus;
        }

        if (null !== $this->planExplain) {
            $res['PlanExplain'] = null !== $this->planExplain ? $this->planExplain->toArray($noStream) : $this->planExplain;
        }

        if (null !== $this->planHash) {
            $res['PlanHash'] = $this->planHash;
        }

        if (null !== $this->planType) {
            $res['PlanType'] = $this->planType;
        }

        if (null !== $this->planUnionHash) {
            $res['PlanUnionHash'] = $this->planUnionHash;
        }

        if (null !== $this->plans) {
            if (\is_array($this->plans)) {
                $res['Plans'] = [];
                $n1 = 0;
                foreach ($this->plans as $item1) {
                    $res['Plans'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->querySql) {
            $res['QuerySql'] = $this->querySql;
        }

        if (null !== $this->tableScan) {
            $res['TableScan'] = $this->tableScan;
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
        if (isset($map['AvgCpuTime'])) {
            $model->avgCpuTime = $map['AvgCpuTime'];
        }

        if (isset($map['Bounded'])) {
            $model->bounded = $map['Bounded'];
        }

        if (isset($map['Executions'])) {
            $model->executions = $map['Executions'];
        }

        if (isset($map['FirstLoadTime'])) {
            $model->firstLoadTime = $map['FirstLoadTime'];
        }

        if (isset($map['HitDiagnosis'])) {
            $model->hitDiagnosis = $map['HitDiagnosis'];
        }

        if (isset($map['HitPercentage'])) {
            $model->hitPercentage = $map['HitPercentage'];
        }

        if (isset($map['MergedVersion'])) {
            $model->mergedVersion = $map['MergedVersion'];
        }

        if (isset($map['OutlineId'])) {
            $model->outlineId = $map['OutlineId'];
        }

        if (isset($map['OutlineStatus'])) {
            $model->outlineStatus = $map['OutlineStatus'];
        }

        if (isset($map['PlanExplain'])) {
            $model->planExplain = planExplain::fromMap($map['PlanExplain']);
        }

        if (isset($map['PlanHash'])) {
            $model->planHash = $map['PlanHash'];
        }

        if (isset($map['PlanType'])) {
            $model->planType = $map['PlanType'];
        }

        if (isset($map['PlanUnionHash'])) {
            $model->planUnionHash = $map['PlanUnionHash'];
        }

        if (isset($map['Plans'])) {
            if (!empty($map['Plans'])) {
                $model->plans = [];
                $n1 = 0;
                foreach ($map['Plans'] as $item1) {
                    $model->plans[$n1] = plans::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['QuerySql'])) {
            $model->querySql = $map['QuerySql'];
        }

        if (isset($map['TableScan'])) {
            $model->tableScan = $map['TableScan'];
        }

        return $model;
    }
}

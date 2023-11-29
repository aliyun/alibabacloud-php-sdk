<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasSQLPlansResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasSQLPlansResponseBody\data\planExplain;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOasSQLPlansResponseBody\data\plans;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Average CPU time (in milliseconds) during the execution period.
     *
     * @example 1875.34
     *
     * @var float
     */
    public $avgCpuTime;

    /**
     * @description Whether to bind the execution plan.
     *
     * @example false
     *
     * @var bool
     */
    public $bounded;

    /**
     * @description Execution count.
     *
     * @example 1
     *
     * @var int
     */
    public $executions;

    /**
     * @description First loading time.
     *
     * @example 2023-04-12T04:46:38Z
     *
     * @var string
     */
    public $firstLoadTime;

    /**
     * @description Whether to hit the diagnosis.
     *
     * @example false
     *
     * @var bool
     */
    public $hitDiagnosis;

    /**
     * @description Hit rate.
     *
     * @example 100.0
     *
     * @var float
     */
    public $hitPercentage;

    /**
     * @description Merge version.
     *
     * @example 513
     *
     * @var int
     */
    public $mergedVersion;

    /**
     * @description Execution plan.
     *
     * @var planExplain
     */
    public $planExplain;

    /**
     * @description The internal identifier of the SQL execution plan in the diagnostic system.
     *
     * @example 1758****24913166****
     *
     * @var string
     */
    public $planHash;

    /**
     * @description Execution plan type.
     *
     * @example LOCAL
     *
     * @var string
     */
    public $planType;

    /**
     * @description The internal unique identifier of the SQL execution plan in the diagnostic system.
     *
     * @example "52c7c53****53e61b3f7586b17****ad"
     *
     * @var string
     */
    public $planUnionHash;

    /**
     * @description The list of the execution plan.
     *
     * @var plans[]
     */
    public $plans;

    /**
     * @description The SQL for the query.
     *
     * @example "select 1 from t"
     *
     * @var string
     */
    public $querySql;
    protected $_name = [
        'avgCpuTime'    => 'AvgCpuTime',
        'bounded'       => 'Bounded',
        'executions'    => 'Executions',
        'firstLoadTime' => 'FirstLoadTime',
        'hitDiagnosis'  => 'HitDiagnosis',
        'hitPercentage' => 'HitPercentage',
        'mergedVersion' => 'MergedVersion',
        'planExplain'   => 'PlanExplain',
        'planHash'      => 'PlanHash',
        'planType'      => 'PlanType',
        'planUnionHash' => 'PlanUnionHash',
        'plans'         => 'Plans',
        'querySql'      => 'QuerySql',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->planExplain) {
            $res['PlanExplain'] = null !== $this->planExplain ? $this->planExplain->toMap() : null;
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
            $res['Plans'] = [];
            if (null !== $this->plans && \is_array($this->plans)) {
                $n = 0;
                foreach ($this->plans as $item) {
                    $res['Plans'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->querySql) {
            $res['QuerySql'] = $this->querySql;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
                $n            = 0;
                foreach ($map['Plans'] as $item) {
                    $model->plans[$n++] = null !== $item ? plans::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['QuerySql'])) {
            $model->querySql = $map['QuerySql'];
        }

        return $model;
    }
}

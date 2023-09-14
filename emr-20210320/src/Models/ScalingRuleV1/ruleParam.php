<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ScalingRuleV1;

use AlibabaCloud\Tea\Model;

class ruleParam extends Model
{
    /**
     * @description [负载触发参数] 比较符。
     *
     * @example >
     *
     * @var string
     */
    public $comparisonOperator;

    /**
     * @description [负载触发参数] 统计次数。
     *
     * @example 1
     *
     * @var int
     */
    public $evaluationCount;

    /**
     * @description [时间调度参数] 周期类型周期过期时间。
     *
     * @example 0
     *
     * @var int
     */
    public $launchExpirationTime;

    /**
     * @description [时间调度参数] 周期类型周期开始时间。
     *
     * @example 2021-09-15T04:02Z
     *
     * @var string
     */
    public $launchTime;

    /**
     * @description [负载触发参数] 度量名称。
     *
     * @example YarnRootAvailableVCores
     *
     * @var string
     */
    public $metricName;

    /**
     * @description [负载触发参数] 统计时长,单位分钟。
     *
     * @example 5
     *
     * @var int
     */
    public $period;

    /**
     * @description [时间调度参数] 周期类型周期结束时间。
     *
     * @example 2021-09-16T05:02Z
     *
     * @var string
     */
    public $recurrenceEndTime;

    /**
     * @description [时间调度参数] 周期类型。
     *
     * @example Daily
     *
     * @var string
     */
    public $recurrenceType;

    /**
     * @description [时间调度参数] 周期类型周期值。
     *
     * @example 1
     *
     * @var string
     */
    public $recurrenceValue;

    /**
     * @description [负载触发参数] 统计方式。
     *
     * @example Average
     *
     * @var string
     */
    public $statistics;

    /**
     * @description [负载触发参数] 阈值。
     *
     * @example 1
     *
     * @var int
     */
    public $threshold;
    protected $_name = [
        'comparisonOperator'   => 'ComparisonOperator',
        'evaluationCount'      => 'EvaluationCount',
        'launchExpirationTime' => 'LaunchExpirationTime',
        'launchTime'           => 'LaunchTime',
        'metricName'           => 'MetricName',
        'period'               => 'Period',
        'recurrenceEndTime'    => 'RecurrenceEndTime',
        'recurrenceType'       => 'RecurrenceType',
        'recurrenceValue'      => 'RecurrenceValue',
        'statistics'           => 'Statistics',
        'threshold'            => 'Threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }
        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }
        if (null !== $this->launchExpirationTime) {
            $res['LaunchExpirationTime'] = $this->launchExpirationTime;
        }
        if (null !== $this->launchTime) {
            $res['LaunchTime'] = $this->launchTime;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->recurrenceEndTime) {
            $res['RecurrenceEndTime'] = $this->recurrenceEndTime;
        }
        if (null !== $this->recurrenceType) {
            $res['RecurrenceType'] = $this->recurrenceType;
        }
        if (null !== $this->recurrenceValue) {
            $res['RecurrenceValue'] = $this->recurrenceValue;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }
        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }
        if (isset($map['LaunchExpirationTime'])) {
            $model->launchExpirationTime = $map['LaunchExpirationTime'];
        }
        if (isset($map['LaunchTime'])) {
            $model->launchTime = $map['LaunchTime'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RecurrenceEndTime'])) {
            $model->recurrenceEndTime = $map['RecurrenceEndTime'];
        }
        if (isset($map['RecurrenceType'])) {
            $model->recurrenceType = $map['RecurrenceType'];
        }
        if (isset($map['RecurrenceValue'])) {
            $model->recurrenceValue = $map['RecurrenceValue'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}

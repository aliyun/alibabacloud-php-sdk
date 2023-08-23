<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeAlarmsResponseBody;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeAlarmsResponseBody\alarmList\dimensions;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeAlarmsResponseBody\alarmList\expressions;
use AlibabaCloud\Tea\Model;

class alarmList extends Model
{
    /**
     * @var string[]
     */
    public $alarmActions;

    /**
     * @example asg-bp1hvbnmkl10vll5****_f95ce797-dc2e-4bad-9618-14fee7d1****
     *
     * @var string
     */
    public $alarmTaskId;

    /**
     * @example >=
     *
     * @var string
     */
    public $comparisonOperator;

    /**
     * @example Test alarm task.
     *
     * @var string
     */
    public $description;

    /**
     * @var dimensions[]
     */
    public $dimensions;

    /**
     * @var string
     */
    public $effective;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example 3
     *
     * @var int
     */
    public $evaluationCount;

    /**
     * @var expressions[]
     */
    public $expressions;

    /**
     * @example &&
     *
     * @var string
     */
    public $expressionsLogicOperator;

    /**
     * @example CpuUtilization
     *
     * @var string
     */
    public $metricName;

    /**
     * @example system
     *
     * @var string
     */
    public $metricType;

    /**
     * @example TestAlarmTask
     *
     * @var string
     */
    public $name;

    /**
     * @example 300
     *
     * @var int
     */
    public $period;

    /**
     * @example asg-bp18p2yfxow2dloq****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @example ALARM
     *
     * @var string
     */
    public $state;

    /**
     * @example Average
     *
     * @var string
     */
    public $statistics;

    /**
     * @example 80.0
     *
     * @var float
     */
    public $threshold;
    protected $_name = [
        'alarmActions'             => 'AlarmActions',
        'alarmTaskId'              => 'AlarmTaskId',
        'comparisonOperator'       => 'ComparisonOperator',
        'description'              => 'Description',
        'dimensions'               => 'Dimensions',
        'effective'                => 'Effective',
        'enable'                   => 'Enable',
        'evaluationCount'          => 'EvaluationCount',
        'expressions'              => 'Expressions',
        'expressionsLogicOperator' => 'ExpressionsLogicOperator',
        'metricName'               => 'MetricName',
        'metricType'               => 'MetricType',
        'name'                     => 'Name',
        'period'                   => 'Period',
        'scalingGroupId'           => 'ScalingGroupId',
        'state'                    => 'State',
        'statistics'               => 'Statistics',
        'threshold'                => 'Threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmActions) {
            $res['AlarmActions'] = $this->alarmActions;
        }
        if (null !== $this->alarmTaskId) {
            $res['AlarmTaskId'] = $this->alarmTaskId;
        }
        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = [];
            if (null !== $this->dimensions && \is_array($this->dimensions)) {
                $n = 0;
                foreach ($this->dimensions as $item) {
                    $res['Dimensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->effective) {
            $res['Effective'] = $this->effective;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }
        if (null !== $this->expressions) {
            $res['Expressions'] = [];
            if (null !== $this->expressions && \is_array($this->expressions)) {
                $n = 0;
                foreach ($this->expressions as $item) {
                    $res['Expressions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->expressionsLogicOperator) {
            $res['ExpressionsLogicOperator'] = $this->expressionsLogicOperator;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
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
     * @return alarmList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmActions'])) {
            if (!empty($map['AlarmActions'])) {
                $model->alarmActions = $map['AlarmActions'];
            }
        }
        if (isset($map['AlarmTaskId'])) {
            $model->alarmTaskId = $map['AlarmTaskId'];
        }
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n                 = 0;
                foreach ($map['Dimensions'] as $item) {
                    $model->dimensions[$n++] = null !== $item ? dimensions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Effective'])) {
            $model->effective = $map['Effective'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }
        if (isset($map['Expressions'])) {
            if (!empty($map['Expressions'])) {
                $model->expressions = [];
                $n                  = 0;
                foreach ($map['Expressions'] as $item) {
                    $model->expressions[$n++] = null !== $item ? expressions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ExpressionsLogicOperator'])) {
            $model->expressionsLogicOperator = $map['ExpressionsLogicOperator'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
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

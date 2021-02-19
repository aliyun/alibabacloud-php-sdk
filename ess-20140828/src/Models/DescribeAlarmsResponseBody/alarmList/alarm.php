<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DescribeAlarmsResponseBody\alarmList;

use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeAlarmsResponseBody\alarmList\alarm\alarmActions;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeAlarmsResponseBody\alarmList\alarm\dimensions;
use AlibabaCloud\Tea\Model;

class alarm extends Model
{
    /**
     * @var string
     */
    public $alarmTaskId;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var int
     */
    public $evaluationCount;

    /**
     * @var string
     */
    public $state;

    /**
     * @var alarmActions
     */
    public $alarmActions;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $comparisonOperator;

    /**
     * @var string
     */
    public $effective;

    /**
     * @var string
     */
    public $description;

    /**
     * @var dimensions
     */
    public $dimensions;

    /**
     * @var string
     */
    public $metricType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $statistics;
    protected $_name = [
        'alarmTaskId'        => 'AlarmTaskId',
        'metricName'         => 'MetricName',
        'evaluationCount'    => 'EvaluationCount',
        'state'              => 'State',
        'alarmActions'       => 'AlarmActions',
        'scalingGroupId'     => 'ScalingGroupId',
        'period'             => 'Period',
        'comparisonOperator' => 'ComparisonOperator',
        'effective'          => 'Effective',
        'description'        => 'Description',
        'dimensions'         => 'Dimensions',
        'metricType'         => 'MetricType',
        'name'               => 'Name',
        'threshold'          => 'Threshold',
        'enable'             => 'Enable',
        'statistics'         => 'Statistics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmTaskId) {
            $res['AlarmTaskId'] = $this->alarmTaskId;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->alarmActions) {
            $res['AlarmActions'] = null !== $this->alarmActions ? $this->alarmActions->toMap() : null;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }
        if (null !== $this->effective) {
            $res['Effective'] = $this->effective;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = null !== $this->dimensions ? $this->dimensions->toMap() : null;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarm
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmTaskId'])) {
            $model->alarmTaskId = $map['AlarmTaskId'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['AlarmActions'])) {
            $model->alarmActions = alarmActions::fromMap($map['AlarmActions']);
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }
        if (isset($map['Effective'])) {
            $model->effective = $map['Effective'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Dimensions'])) {
            $model->dimensions = dimensions::fromMap($map['Dimensions']);
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }

        return $model;
    }
}

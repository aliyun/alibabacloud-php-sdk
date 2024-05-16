<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeAlarmsResponseBody;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeAlarmsResponseBody\alarmList\dimensions;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeAlarmsResponseBody\alarmList\expressions;
use AlibabaCloud\Tea\Model;

class alarmList extends Model
{
    /**
     * @description The list of unique identifiers of the scaling rules that are associated with the event-triggered task.
     *
     * @var string[]
     */
    public $alarmActions;

    /**
     * @description The ID of the event-triggered task.
     *
     * @example asg-bp1hvbnmkl10vll5****_f95ce797-dc2e-4bad-9618-14fee7d1****
     *
     * @var string
     */
    public $alarmTaskId;

    /**
     * @description The operator that is used to compare the metric value and the threshold.
     *
     *   Valid value if the metric value is greater than or equal to the threshold: >=
     *   Valid value if the metric value is less than or equal to the threshold: <=
     *   Valid value if the metric value is greater than the threshold: >
     *   Valid value if the metric value is less than the threshold: <
     *
     * @example >=
     *
     * @var string
     */
    public $comparisonOperator;

    /**
     * @description The description of the event-triggered task.
     *
     * @example Test alarm task.
     *
     * @var string
     */
    public $description;

    /**
     * @description Details of the dimensions.
     *
     * @var dimensions[]
     */
    public $dimensions;

    /**
     * @description > This parameter is in invitational preview and is unavailable.
     *
     * @example Test
     *
     * @var string
     */
    public $effective;

    /**
     * @description Indicates whether the event-triggered task is enabled. Valid values:
     *
     *   true: The event-triggered task is enabled.
     *   false: The event-triggered task is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The number of times that the threshold must be reached before a scaling rule can be executed. For example, if you set this parameter to 3, the average CPU utilization must reach or exceed 80% three times in a row before a scaling rule is triggered.
     *
     * @example 3
     *
     * @var int
     */
    public $evaluationCount;

    /**
     * @description The expressions that are specified in the multi-metric alert rule.
     *
     * @var expressions[]
     */
    public $expressions;

    /**
     * @description The relationship between the trigger conditions that are specified in the multi-metric alert rule. Valid values:
     *
     *   `&&`: An alert is triggered only if all metrics in the multi-metric alert rule meet the trigger conditions. In this case, an alert is triggered only if the results of all trigger conditions that are specified in the multi-metric alert rule are `true`.
     *   `||`: An alert is triggered if one of the metrics in the multi-metric alert rule meets the trigger conditions.
     *
     * @example &&
     *
     * @var string
     */
    public $expressionsLogicOperator;

    /**
     * @description The name of the metric. Valid values:
     *
     *   CpuUtilization: the CPU utilization of an ECS instance. Unit: %.
     *   IntranetTx: the outbound traffic over the internal network from an ECS instance. Unit: KB/min.
     *   IntranetRx: the inbound traffic over the Internet to an ECS instance that resides in a VPC. Unit: KB/min.
     *   VpcInternetTx: the outbound traffic over the Internet from an ECS instance that resides in a VPC. Unit: KB/min.
     *   VpcInternetRx: the inbound traffic over the Internet to an ECS instance that resides in a VPC. Unit: KB/min.
     *   SystemDiskReadBps: the number of bytes read from the system disk used by an ECS instance per second.
     *   SystemDiskWriteBps: the number of bytes written to the system disk used by an ECS instance per second.
     *   SystemDiskReadOps: the number of read operations on the system disk used by an ECS instance per second.
     *   SystemDiskWriteOps: the number of write operations on the system disk used by an ECS instance per second.
     *   CpuUtilizationAgent: the CPU utilization of an agent. Unit: %.
     *   GpuMemoryFreeUtilizationAgent: the percentage of idle GPU memory of an agent.
     *   GpuMemoryUtilizationAgent: the GPU memory usage of an agent. Unit: %.
     *   MemoryUtilization: the memory usage of an agent. Unit: %.
     *   LoadAverage: the average system load of an agent.
     *   TcpConnection: the total number of TCP connections of an agent.
     *   TcpConnection: the number of established TCP connections of an agent.
     *   PackagesNetOut: the number of packets that are sent by the internal NIC used by an agent.
     *   PackagesNetIn: the number of packets that are received by the internal NIC used by an agent.
     *   EciPodCpuUtilization: the CPU utilization of an elastic container instance. Unit: %.
     *   EciPodMemoryUtilization: the memory usage of an elastic container instance. Unit: %.
     *
     * For more information, see [Event-triggered task for system monitoring](https://help.aliyun.com/document_detail/74854.html).
     * @example CpuUtilization
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The type of the metric. Valid values:
     *
     *   system: system metrics of CloudMonitor
     *   custom: custom metrics that are reported to CloudMonitor
     *
     * @example system
     *
     * @var string
     */
    public $metricType;

    /**
     * @description The name of the event-triggered task.
     *
     * @example TestAlarmTask
     *
     * @var string
     */
    public $name;

    /**
     * @description The period of time during which statistics about the metric is collected. Unit: seconds. Valid values:
     *
     *   15
     *   60
     *   120
     *   300
     *   900
     *
     * > If your scaling group is of the ECS type and the event-triggered task associated with your scaling group monitors CloudMonitor metrics, you can set the Period parameter to 15. In most cases, the name of a CloudMonitor metric contains Agent.
     * @example 300
     *
     * @var int
     */
    public $period;

    /**
     * @description The scaling group ID of the event-triggered task.
     *
     * @example asg-bp18p2yfxow2dloq****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @description The status of the event-triggered task. Valid values:
     *
     *   ALARM: The alert condition is met and an alert is triggered.
     *   OK: The alert condition is not met.
     *   INSUFFICIENT_DATA: Auto Scaling cannot determine whether the alert condition is met due to insufficient data.
     *
     * @example ALARM
     *
     * @var string
     */
    public $state;

    /**
     * @description The method that is used to aggregate statistics for the metric. Valid values:
     *
     *   Average
     *   Minimum
     *   Maximum
     *
     * @example Average
     *
     * @var string
     */
    public $statistics;

    /**
     * @description The threshold of the metric value. If the threshold is reached the specified times within the specified period, a scaling rule is executed.
     *
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeAlarmsResponseBody;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeAlarmsResponseBody\alarmList\dimensions;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeAlarmsResponseBody\alarmList\expressions;
use AlibabaCloud\Tea\Model;

class alarmList extends Model
{
    /**
     * @description The unique identifiers of the scaling rules that are associated with the event-triggered task.
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
     * @description The operator that is used to compare the metric value and the metric threshold.
     *
     *   Valid value if the metric value is greater than or equal to the threshold: >=.
     *   Valid value if the metric value is less than or equal to the threshold: <=.
     *   Valid value if the metric value is greater than the threshold: >.
     *   Valid value if the metric value is less than the threshold: <.
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
     * @description The metric dimensions.
     *
     * @var dimensions[]
     */
    public $dimensions;

    /**
     * @description The effective period of the event-triggered task.
     *
     * @example Test
     *
     * @var string
     */
    public $effective;

    /**
     * @description Indicates whether the event-triggered task feature is enabled. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The number of consecutive times that the threshold must be reached before a scaling rule is executed. For example, if you set this parameter to 3, the average CPU utilization must reach or exceed 80% three times in a row before a scaling rule is executed.
     *
     * @example 3
     *
     * @var int
     */
    public $evaluationCount;

    /**
     * @description The alert conditions of the multi-metric alert rule.
     *
     * @var expressions[]
     */
    public $expressions;

    /**
     * @description The relationship between the trigger conditions that are specified in the multi-metric alert rule. Valid values:
     *
     *   `&&`: An alert is triggered only if all metrics in the multi-metric alert rule meet their trigger conditions. In this case, an alert is triggered only if the results of all trigger conditions that are specified in the multi-metric alert rule are `true`.
     *   `||`: An alert is triggered only if one of the metrics in the multi-metric alert rule meets its trigger condition.
     *
     * @example &&
     *
     * @var string
     */
    public $expressionsLogicOperator;

    /**
     * @description The metric name. Valid values:
     *
     *   CpuUtilization: the CPU utilization of an Elastic Compute Service (ECS) instance. Unit: %.
     *   ConcurrentConnections: the number of current connections to an ECS instance.
     *   IntranetTx: the outbound traffic over an internal network. Unit: KB/min.
     *   IntranetRx: the inbound traffic over an internal network. Unit: KB/min.
     *   VpcInternetTx: the outbound traffic over a virtual private cloud (VPC). Unit: KB/min.
     *   VpcInternetRx: the inbound traffic over a VPC. Unit: KB/min.
     *   SystemDiskReadBps: the number of bytes read from the system disk per second.
     *   SystemDiskWriteBps: the number of bytes written to the system disk per second.
     *   SystemDiskReadOps: the read IOPS of the system disk. Unit: counts/s.
     *   SystemDiskWriteOps: the write IOPS of the system disk. Unit: counts/s.
     *   CpuUtilizationAgent: the CPU utilization. Unit: %.
     *   GpuUtilizationAgent: the GPU utilization. Unit: %.
     *   GpuMemoryFreeUtilizationAgent: the idle GPU memory usage. Unit: %.
     *   GpuMemoryUtilizationAgent: the GPU memory usage. Unit: %.
     *   MemoryUtilization: the memory usage. Unit: %.
     *   LoadAverage: the average system load.
     *   TcpConnection: the total number of TCP connections.
     *   TcpConnection: the number of established TCP connections.
     *   PackagesNetOut: the number of packets sent by the internal NIC. Unit: counts/s.
     *   PackagesNetIn: the number of packets received by the internal NIC. Unit: counts/s.
     *   PackagesNetOut: the number of packets sent by the public NIC. Unit: counts/s.
     *   PackagesNetIn: the number of packets received by the public NIC. Unit: counts/s.
     *   EciPodCpuUtilization: the CPU utilization. Unit: %.
     *   EciPodMemoryUtilization: the memory usage. Unit: %.
     *   LoadBalancerRealServerAverageQps: the queries per second (QPS) of an instance.
     *
     * For more information, see [Event-triggered tasks of the system monitoring type](https://help.aliyun.com/document_detail/74854.html).
     * @example CpuUtilization
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The metric type. Valid values:
     *
     *   system: system metrics of CloudMonitor
     *   custom: custom metrics that are reported to CloudMonitor.
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
     * @description The statistical period of the metric data. Unit: seconds. Valid values:
     *
     *   15
     *   60
     *   120
     *   300
     *   900
     *
     * >  You can set the value of this parameter to 15 Seconds only for scaling groups of the ECS type.
     * @example 300
     *
     * @var int
     */
    public $period;

    /**
     * @description The ID of the scaling group to which the event-triggered task is associated.
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
     * @description The method that is used to aggregate the metric data. Valid values:
     *
     *   Average: the average value
     *   Minimum: the minimum value
     *   Maximum: the maximum value
     *
     * @example Average
     *
     * @var string
     */
    public $statistics;

    /**
     * @description The threshold of the metric. If the threshold is reached the specified number of times within the statistical period, a scaling rule is executed.
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

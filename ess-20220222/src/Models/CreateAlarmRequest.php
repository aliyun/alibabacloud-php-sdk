<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\CreateAlarmRequest\dimensions;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateAlarmRequest\expressions;
use AlibabaCloud\Tea\Model;

class CreateAlarmRequest extends Model
{
    /**
     * @description The list of unique identifiers of the scaling rules that are associated with the event-triggered task.
     *
     * @var string[]
     */
    public $alarmActions;

    /**
     * @description The operator that is used to compare the metric value and the threshold. Valid values:
     *
     *   If the metric value is greater than or equal to the threshold, set the value to: >=.
     *   If the metric value is less than or equal to the threshold, set the value to: <=.
     *   If the metric value is greater than the threshold, set the value to: >.
     *   If the metric value is less than the threshold, set the value to: <.
     *
     * Default value: >=.
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
     * @description The effective period of the event-triggered task. By default, the event-triggered task is in effect all the time.
     *
     * This parameter follows the cron expression format. The default format is `X X X X X ?`. In the format:
     *
     *   X: a placeholder for a field, which represents seconds, minutes, hours, days, and months in sequence. X can be a definite value or a special character that has logical meaning. For information about the valid values of X, see [Cron expression](https://help.aliyun.com/document_detail/25907.html).
     *   ?: No value is specified.
     *
     * > By default, this parameter value is specified in **UTC+8**. You can specify the time zone in the `TZ=+yy` format before a cron expression. y indicates the time zone. For example, `TZ=+00 * * 1-2 * * ?` specifies that the event-triggered task is in effect between 01:00 and 02:59 (UTC+0) every day.
     *
     * Sample values:
     *
     *   ` * * * * * ?  `: The event-triggered task is in effect all the time.
     *   ` * * 17-18 * * ?  `: The event-triggered task is in effect between 17:00 and 18:59 (UTC+8) every day.
     *   `TZ=+00 * * 1-2 * * ?`: The event-triggered task is in effect between 01:00 and 02:59 (UTC+0) every day.
     *
     * @example TZ=+00 * * 1-2 * * ?
     *
     * @var string
     */
    public $effective;

    /**
     * @description The number of times that the threshold must be reached before a scaling rule can be executed. For example, if you set this parameter to 3, the average CPU utilization must reach or exceed 80% three times in a row before a scaling rule is triggered.
     *
     * Default value: 3.
     * @example 3
     *
     * @var int
     */
    public $evaluationCount;

    /**
     * @description The information about the multi-metric alert rules.
     *
     * @var expressions[]
     */
    public $expressions;

    /**
     * @description The relationship between the trigger conditions in the multi-metric alert rule. Valid values:
     *
     *   `&&`: An alert is triggered only if all metrics in the multi-metric alert rule meet the trigger conditions. In this case, an alert is triggered only if the results of all trigger conditions that are specified in the multi-metric alert rule are `true`.
     *   `||`: An alert is triggered if one of the metrics in the multi-metric alert rule meets the trigger conditions.
     *
     * Default value: `&&`.
     * @example &&
     *
     * @var string
     */
    public $expressionsLogicOperator;

    /**
     * @description The ID of the application group to which the custom metric belongs. If you set the MetricType parameter to custom, you must specify this parameter.
     *
     * @example 4055401
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The metric name. The valid values of this parameter vary based on the metric type.
     *
     *   If you set MetricType to custom, the valid values are the metrics that you have.
     *
     *   If you set MetricType to system, this parameter has the following valid values:
     *
     *   CpuUtilization: the CPU utilization. Unit: %.
     *   ConcurrentConnections: the number of concurrent connections.
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
     *   PackagesNetOut: the number of packets sent by the internal network interface controller (NIC). Unit: counts/s.
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
     * @var int
     */
    public $ownerId;

    /**
     * @description The statistical period of the metric data. Unit: seconds. Valid values:
     *
     *   15
     *   60
     *   120
     *   300
     *   900
     *
     * Default value: 300.
     * @example 300
     *
     * @var int
     */
    public $period;

    /**
     * @description The region ID of the scaling group.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description The scaling group ID of the event-triggered task.
     *
     * This parameter is required.
     * @example asg-bp18p2yfxow2dloq****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @description The method that is used to aggregate statistics for the metric. Valid values:
     *
     *   Average
     *   Minimum
     *   Maximum
     *
     * Default value: Average.
     * @example Average
     *
     * @var string
     */
    public $statistics;

    /**
     * @description The threshold of the metric value. If the threshold is reached the specified number of times within the specified period, a scaling rule is executed.
     *
     * @example 80.0
     *
     * @var float
     */
    public $threshold;
    protected $_name = [
        'alarmActions'             => 'AlarmActions',
        'comparisonOperator'       => 'ComparisonOperator',
        'description'              => 'Description',
        'dimensions'               => 'Dimensions',
        'effective'                => 'Effective',
        'evaluationCount'          => 'EvaluationCount',
        'expressions'              => 'Expressions',
        'expressionsLogicOperator' => 'ExpressionsLogicOperator',
        'groupId'                  => 'GroupId',
        'metricName'               => 'MetricName',
        'metricType'               => 'MetricType',
        'name'                     => 'Name',
        'ownerId'                  => 'OwnerId',
        'period'                   => 'Period',
        'regionId'                 => 'RegionId',
        'resourceOwnerAccount'     => 'ResourceOwnerAccount',
        'scalingGroupId'           => 'ScalingGroupId',
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
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
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
     * @return CreateAlarmRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmActions'])) {
            if (!empty($map['AlarmActions'])) {
                $model->alarmActions = $map['AlarmActions'];
            }
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
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

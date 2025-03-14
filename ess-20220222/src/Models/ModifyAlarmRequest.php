<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyAlarmRequest\dimensions;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyAlarmRequest\expressions;
use AlibabaCloud\Tea\Model;

class ModifyAlarmRequest extends Model
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
     * This parameter is required.
     *
     * @example asg-bp1hvbnmkl10vll5****_f95ce797-dc2e-4bad-9618-14fee7d1****
     *
     * @var string
     */
    public $alarmTaskId;

    /**
     * @description The operator that is used to compare the metric value and the threshold. Valid values:
     *
     *   If the metric value is greater than or equal to the threshold, set the value to `>=`.
     *   If the metric value is less than or equal to the threshold, set the value to `<=`.
     *   If the metric value is greater than the threshold, set the value to `>`.
     *   If the metric value is less than the threshold, set the value to `<`.
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
     * @description The effective period of the event-triggered task.
     *
     * This parameter follows the cron expression format. The default format is `X X X X X ?`, in which:
     *
     *   X: a placeholder for a field, which represents seconds, minutes, hours, days, and months in sequence. X can be a definite value or a special character that has logical meaning. For information about the valid values of X, see [Cron expression](https://help.aliyun.com/document_detail/25907.html).
     *   ?: No value is specified.
     *
     * > By default, the value of this parameter is specified in **UTC+8**. You can specify the time zone in the `TZ=+yy` format before a cron expression. y indicates the time zone. For example, `TZ=+00 * * 1-2 * * ?` specifies that the event-triggered task is in effect between 01:00 and 02:59 (UTC+0) every day.
     *
     * Examples:
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
     * @description The relationship between the trigger conditions in the multi-metric alert rule. Valid values:
     *
     *   `&&`: An alert is triggered only if all metrics in the multi-metric alert rule meet the trigger conditions. In this case, an alert is triggered only if the results of all trigger conditions that are specified in the multi-metric alert rule are `true`.
     *   `||`: An alert is triggered if one of the metrics in the multi-metric alert rule meets the trigger condition.
     *
     * Default value: `&&`.
     *
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
     * @description The name of the metric. The valid values vary based on the metric type.
     *
     *   If you set the MetricType parameter to custom, the valid values are your custom metrics.
     *
     *   If you set the MetricType parameter to system, the MetricName parameter has the following valid values:
     *
     *   CpuUtilization: the CPU utilization of an ECS instance. Unit: %.
     *   IntranetTx: the outbound traffic over the internal network from an ECS instance. Unit: KB/min.
     *   IntranetRx: the inbound traffic over the Internet to an ECS instance that resides in a virtual private cloud (VPC). Unit: KB/min.
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
     *   PackagesNetOut: the number of packets that are sent by the internal network interface controller (NIC) used by an agent.
     *   PackagesNetIn: the number of packets that are received by the internal NIC used by an agent.
     *   EciPodCpuUtilization: the CPU utilization of an elastic container instance. Unit: %.
     *   EciPodMemoryUtilization: the memory usage of an elastic container instance. Unit: %.
     *
     * For more information, see [Event-triggered task for system monitoring](https://help.aliyun.com/document_detail/74854.html).
     *
     * @example MemoryUtilization
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
     * @example alarmtask****
     *
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The period of time during which statistics about the metric is collected. Unit: seconds. Valid values:
     *
     *   15
     *   60
     *   120
     *   300
     *   900
     *
     * > If your scaling group is of the ECS type and uses CloudMonitor metrics, you can set the Period parameter to 15. In other cases, you can set the Period parameter to 60, 120, 300, or 900. In most cases, the name of a CloudMonitor metric contains Agent.
     *
     * @example 300
     *
     * @var int
     */
    public $period;

    /**
     * @description The region ID of the event-triggered task.
     *
     * This parameter is required.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

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
     * @description The thresholds of the metric values in the multi-metric alert rule. If the thresholds are reached the specified number of times within the specified period, a scaling rule is executed.
     *
     * @example 80
     *
     * @var float
     */
    public $threshold;
    protected $_name = [
        'alarmActions' => 'AlarmActions',
        'alarmTaskId' => 'AlarmTaskId',
        'comparisonOperator' => 'ComparisonOperator',
        'description' => 'Description',
        'dimensions' => 'Dimensions',
        'effective' => 'Effective',
        'evaluationCount' => 'EvaluationCount',
        'expressions' => 'Expressions',
        'expressionsLogicOperator' => 'ExpressionsLogicOperator',
        'groupId' => 'GroupId',
        'metricName' => 'MetricName',
        'metricType' => 'MetricType',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
        'period' => 'Period',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'statistics' => 'Statistics',
        'threshold' => 'Threshold',
    ];

    public function validate() {}

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
     * @return ModifyAlarmRequest
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
                $n = 0;
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
                $n = 0;
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
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}

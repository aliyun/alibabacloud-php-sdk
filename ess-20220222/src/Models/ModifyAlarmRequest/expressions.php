<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyAlarmRequest;

use AlibabaCloud\Tea\Model;

class expressions extends Model
{
    /**
     * @description The operator that is used to compare the metric value and the metric threshold. Valid values:
     *
     *   If the metric value is greater than or equal to the metric threshold, set the value to `>=`.
     *   If the metric value is less than or equal to the metric threshold, set the value to `<=`.
     *   If the metric value is greater than the metric threshold, set the value to `>`.
     *   If the metric value is less than the metric threshold, set the value to `<`.
     *
     * Default value: >=
     * @example >=
     *
     * @var string
     */
    public $comparisonOperator;

    /**
     * @description The name of the metric that is specified in the multi-metric alert rule. Valid values of MetricName vary based on the value of MetricType.
     *
     *   If you set MetricType to custom, the valid values of MetricName are your custom metrics.
     *
     *   If you set MetricType to system, MetricName has the following valid values:
     *
     *   CpuUtilization: (ECS) the CPU utilization. Unit: %.
     *   IntranetTx: the outbound traffic over the internal network from an ECS instance. Unit: KB/min.
     *   IntranetRx: the inbound traffic over the internal network to an ECS instance. Unit: KB/min.
     *   VpcInternetTx: the outbound traffic over the Internet from an ECS instance that resides in a VPC. Unit: KB/min.
     *   VpcInternetRx: the inbound traffic over the Internet to an ECS instance that resides in a VPC. Unit: KB/min.
     *   SystemDiskReadBps: the number of bytes read from the system disk that is used by an ECS instance per second.
     *   SystemDiskWriteBps: the number of bytes written to the system disk that is used by an ECS instance per second.
     *   SystemDiskReadOps: the number of read operations on the system disk that is used by an ECS instance per second.
     *   SystemDiskWriteOps: the number of write operations on the system disk that is used by an ECS instance per second.
     *   CpuUtilizationAgent: the CPU utilization of an agent. Unit: %.
     *   GpuUtilizationAgent: the GPU utilization of an agent. Unit: %.
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
     * For more information, see [Event-triggered task for system monitoring](~~74854~~).
     * @example CpuUtilization
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The period of time during which the statistics of a metric in the multi-metric alert rule is collected. Unit: seconds. Valid values:
     *
     *   15
     *   60
     *   120
     *   300
     *   900
     *
     * Default value: 300
     * @example 300
     *
     * @var int
     */
    public $period;

    /**
     * @description The method that is used to aggregate the statistics of a metric that is specified in the multi-metric alert rule. Valid values:
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
     * @description The threshold of a metric in the multi-metric alert rule. If the threshold is reached the specified number of times within the specified period, a scaling rule is executed.
     *
     * @example 40.0
     *
     * @var float
     */
    public $threshold;
    protected $_name = [
        'comparisonOperator' => 'ComparisonOperator',
        'metricName'         => 'MetricName',
        'period'             => 'Period',
        'statistics'         => 'Statistics',
        'threshold'          => 'Threshold',
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
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
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
     * @return expressions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
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

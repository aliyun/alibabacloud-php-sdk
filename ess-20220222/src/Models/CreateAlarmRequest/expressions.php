<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateAlarmRequest;

use AlibabaCloud\Tea\Model;

class expressions extends Model
{
    /**
     * @description The operator that you want to use to compare the metric value and the threshold in the multi-metric alert rule. Valid values:
     *
     *   If the metric value is greater than or equal to the threshold, set the value to >=.
     *   If the metric value is less than or equal to the metric threshold, set the value to <=.
     *   If the metric value is greater than the metric threshold, set the value to >.
     *   If the metric value is less than the metric threshold, set the value to <.
     *
     * Default value: >=.
     * @example >=
     *
     * @var string
     */
    public $comparisonOperator;

    /**
     * @description The names of the metrics in the multi-metric alert rule. The valid values of this parameter vary based on the metric type.
     *
     *   If you set MetricType to custom, the valid values are the metrics that you have.
     *
     *   If you set MetricType to system, this parameter has the following valid values:
     *
     *   CpuUtilization: the CPU utilization. Unit: %.
     *   ConcurrentConnections: the number of concurrent connections.
     *   IntranetTx: the outbound traffic over an internal network. Unit: KB/min.
     *   IntranetRx: the inbound traffic over an internal network. Unit: KB/min.
     *   VpcInternetTx: the outbound traffic over a VPC. Unit: KB/min.
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
     *   LoadBalancerRealServerAverageQps: the QPS of an instance.
     *
     * For more information, see [Event-triggered tasks of the system monitoring type](https://help.aliyun.com/document_detail/74854.html).
     * @example CpuUtilization
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The statistical period of the metric data in the multi-metric alert rule. Unit: seconds. Valid values:
     *
     *   15
     *   60
     *   120
     *   300
     *   900
     *
     * Default value: 300.
     * @example 900
     *
     * @var int
     */
    public $period;

    /**
     * @description The method that you want to use to aggregate the metric data in the multi-metric alert rule. Valid values:
     *
     *   Average: the average value.
     *   Minimum: the minimum value
     *   Maximum: the maximum value
     *
     * Default value: Average.
     * @example Average
     *
     * @var string
     */
    public $statistics;

    /**
     * @description The threshold of the metric value in the multi-metric alert rule. If the threshold is reached the specified number of times within the statistical period, a scaling rule is executed.
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

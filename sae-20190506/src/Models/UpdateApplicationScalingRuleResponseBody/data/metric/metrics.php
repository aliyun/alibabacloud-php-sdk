<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\UpdateApplicationScalingRuleResponseBody\data\metric;

use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @description The limit on the metric.
     *
     *   The limit on the CPU utilization. Unit: percentage.
     *   The limit on the memory usage. Unit: percentage.
     *   The limit on the average number of active TCP connections per second.
     *   The limit on the QPS of the Internet-facing SLB instance.
     *   The limit on the response time of the Internet-facing SLB instance. Unit: milliseconds.
     *
     * @example 20
     *
     * @var int
     */
    public $metricTargetAverageUtilization;

    /**
     * @description The metric that is used to trigger the auto scaling policy. Valid values:
     *
     *   **CPU**: the CPU utilization.
     *   **MEMORY**: the memory usage.
     *   **tcpActiveConn**: the average number of active TCP connections of an application instance within 30 seconds.
     *   **SLB_QPS**: the average QPS of the Internet-facing SLB instance associated with an application instance within 15 seconds.
     *   **SLB_RT**: the average response time of the Internet-facing SLB instance within 15 seconds.
     *
     * @example CPU
     *
     * @var string
     */
    public $metricType;

    /**
     * @var string
     */
    public $slbId;

    /**
     * @var string
     */
    public $slbLogstore;

    /**
     * @var string
     */
    public $slbProject;

    /**
     * @var string
     */
    public $vport;
    protected $_name = [
        'metricTargetAverageUtilization' => 'MetricTargetAverageUtilization',
        'metricType'                     => 'MetricType',
        'slbId'                          => 'SlbId',
        'slbLogstore'                    => 'SlbLogstore',
        'slbProject'                     => 'SlbProject',
        'vport'                          => 'Vport',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricTargetAverageUtilization) {
            $res['MetricTargetAverageUtilization'] = $this->metricTargetAverageUtilization;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }
        if (null !== $this->slbLogstore) {
            $res['SlbLogstore'] = $this->slbLogstore;
        }
        if (null !== $this->slbProject) {
            $res['SlbProject'] = $this->slbProject;
        }
        if (null !== $this->vport) {
            $res['Vport'] = $this->vport;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricTargetAverageUtilization'])) {
            $model->metricTargetAverageUtilization = $map['MetricTargetAverageUtilization'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }
        if (isset($map['SlbLogstore'])) {
            $model->slbLogstore = $map['SlbLogstore'];
        }
        if (isset($map['SlbProject'])) {
            $model->slbProject = $map['SlbProject'];
        }
        if (isset($map['Vport'])) {
            $model->vport = $map['Vport'];
        }

        return $model;
    }
}

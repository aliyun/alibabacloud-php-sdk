<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules\metric\metricsStatus;

use AlibabaCloud\Tea\Model;

class nextScaleMetrics extends Model
{
    /**
     * @description The name of the metric.
     *
     *   **cpu**: the CPU utilization.
     *   **memory**: the memory usage.
     *   **tcpActiveConn**: the number of active TCP connections.
     *   **slb_incall_qps**: the QPS of the Internet-facing SLB instance.
     *   **slb_incall_rt**: the response time of the Internet-facing SLB instance.
     *
     * @example cpu
     *
     * @var string
     */
    public $name;

    /**
     * @description The metric value as a percentage that triggers the application scale-in next time.
     *
     * @example 10
     *
     * @var int
     */
    public $nextScaleInAverageUtilization;

    /**
     * @description The metric value as a percentage that triggers the application scale-out next time.
     *
     * @example 21
     *
     * @var int
     */
    public $nextScaleOutAverageUtilization;
    protected $_name = [
        'name'                           => 'Name',
        'nextScaleInAverageUtilization'  => 'NextScaleInAverageUtilization',
        'nextScaleOutAverageUtilization' => 'NextScaleOutAverageUtilization',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nextScaleInAverageUtilization) {
            $res['NextScaleInAverageUtilization'] = $this->nextScaleInAverageUtilization;
        }
        if (null !== $this->nextScaleOutAverageUtilization) {
            $res['NextScaleOutAverageUtilization'] = $this->nextScaleOutAverageUtilization;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nextScaleMetrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NextScaleInAverageUtilization'])) {
            $model->nextScaleInAverageUtilization = $map['NextScaleInAverageUtilization'];
        }
        if (isset($map['NextScaleOutAverageUtilization'])) {
            $model->nextScaleOutAverageUtilization = $map['NextScaleOutAverageUtilization'];
        }

        return $model;
    }
}

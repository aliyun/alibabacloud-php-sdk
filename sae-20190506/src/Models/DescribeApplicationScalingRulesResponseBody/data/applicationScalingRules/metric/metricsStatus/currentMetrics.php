<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules\metric\metricsStatus;

use AlibabaCloud\Tea\Model;

class currentMetrics extends Model
{
    /**
     * @description The current value of the metric.
     *
     * @example 0
     *
     * @var int
     */
    public $currentValue;

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
     * @description The type of the data. This parameter corresponds to the metric.
     *
     *   **Resource**: used when the metric is the **CPU utilization** or **memory usage**.
     *   **Pods**: used when the metric is the **number of active TCP connections**.
     *   **External**: used when the metric is about the **SLB** instance or from **Application Real-Time Monitoring Service (ARMS)**.
     *
     * @example Resource
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'currentValue' => 'CurrentValue',
        'name'         => 'Name',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentValue) {
            $res['CurrentValue'] = $this->currentValue;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return currentMetrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentValue'])) {
            $model->currentValue = $map['CurrentValue'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

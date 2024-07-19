<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceAutoScalerRequest;

use AlibabaCloud\Tea\Model;

class scaleStrategies extends Model
{
    /**
     * @description The name of the metric for triggering auto scaling. Valid values:
     *
     *   qps: the queries per second (QPS) for an individual instance.
     *   cpu: the CPU utilization.
     *
     * This parameter is required.
     * @example qps
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The service for which the metric is specified. If you do not set this parameter, the current service is specified by default.
     *
     * @example demo_svc
     *
     * @var string
     */
    public $service;

    /**
     * @description The threshold of the metric that triggers auto scaling.
     *
     *   If you set metricName to QPS, scale-out is triggered when the average QPS for a single instance is greater than this threshold.
     *   If you set metricName to CPU, scale-out is triggered when the average CPU utilization for a single instance is greater than this threshold.
     *
     * This parameter is required.
     * @example 100
     *
     * @var float
     */
    public $threshold;
    protected $_name = [
        'metricName' => 'metricName',
        'service'    => 'service',
        'threshold'  => 'threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricName) {
            $res['metricName'] = $this->metricName;
        }
        if (null !== $this->service) {
            $res['service'] = $this->service;
        }
        if (null !== $this->threshold) {
            $res['threshold'] = $this->threshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scaleStrategies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['metricName'])) {
            $model->metricName = $map['metricName'];
        }
        if (isset($map['service'])) {
            $model->service = $map['service'];
        }
        if (isset($map['threshold'])) {
            $model->threshold = $map['threshold'];
        }

        return $model;
    }
}

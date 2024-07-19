<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceAutoScalerResponseBody;

use AlibabaCloud\Tea\Model;

class currentMetrics extends Model
{
    /**
     * @description The metric name. Valid values:
     *
     *   QPS
     *   CPU
     *
     * @example qps
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The service for which the metric is specified.
     *
     * @example demo_svc
     *
     * @var string
     */
    public $service;

    /**
     * @description The metric value.
     *
     * @example 10
     *
     * @var float
     */
    public $value;
    protected $_name = [
        'metricName' => 'metricName',
        'service'    => 'service',
        'value'      => 'value',
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
        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['metricName'])) {
            $model->metricName = $map['metricName'];
        }
        if (isset($map['service'])) {
            $model->service = $map['service'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}

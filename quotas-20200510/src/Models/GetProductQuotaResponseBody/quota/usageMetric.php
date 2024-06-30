<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaResponseBody\quota;

use AlibabaCloud\Tea\Model;

class usageMetric extends Model
{
    /**
     * @var string[]
     */
    public $metricDimensions;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $metricNamespace;
    protected $_name = [
        'metricDimensions' => 'MetricDimensions',
        'metricName'       => 'MetricName',
        'metricNamespace'  => 'MetricNamespace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricDimensions) {
            $res['MetricDimensions'] = $this->metricDimensions;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->metricNamespace) {
            $res['MetricNamespace'] = $this->metricNamespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usageMetric
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricDimensions'])) {
            $model->metricDimensions = $map['MetricDimensions'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['MetricNamespace'])) {
            $model->metricNamespace = $map['MetricNamespace'];
        }

        return $model;
    }
}

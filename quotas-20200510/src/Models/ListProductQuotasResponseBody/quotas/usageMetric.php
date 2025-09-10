<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductQuotasResponseBody\quotas;

use AlibabaCloud\Dara\Model;

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
        'metricName' => 'MetricName',
        'metricNamespace' => 'MetricNamespace',
    ];

    public function validate()
    {
        if (\is_array($this->metricDimensions)) {
            Model::validateArray($this->metricDimensions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metricDimensions) {
            if (\is_array($this->metricDimensions)) {
                $res['MetricDimensions'] = [];
                foreach ($this->metricDimensions as $key1 => $value1) {
                    $res['MetricDimensions'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }

        if (null !== $this->metricNamespace) {
            $res['MetricNamespace'] = $this->metricNamespace;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricDimensions'])) {
            if (!empty($map['MetricDimensions'])) {
                $model->metricDimensions = [];
                foreach ($map['MetricDimensions'] as $key1 => $value1) {
                    $model->metricDimensions[$key1] = $value1;
                }
            }
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

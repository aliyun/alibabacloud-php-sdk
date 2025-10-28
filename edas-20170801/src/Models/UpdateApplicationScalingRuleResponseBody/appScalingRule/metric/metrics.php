<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\UpdateApplicationScalingRuleResponseBody\appScalingRule\metric;

use AlibabaCloud\Dara\Model;

class metrics extends Model
{
    /**
     * @var int
     */
    public $metricTargetAverageUtilization;

    /**
     * @var string
     */
    public $metricType;
    protected $_name = [
        'metricTargetAverageUtilization' => 'MetricTargetAverageUtilization',
        'metricType' => 'MetricType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metricTargetAverageUtilization) {
            $res['MetricTargetAverageUtilization'] = $this->metricTargetAverageUtilization;
        }

        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
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
        if (isset($map['MetricTargetAverageUtilization'])) {
            $model->metricTargetAverageUtilization = $map['MetricTargetAverageUtilization'];
        }

        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }

        return $model;
    }
}

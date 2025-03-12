<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListRecentGovernanceMetricsResponseBody\governanceMetrics;

use AlibabaCloud\Tea\Model;

class governanceMetric extends Model
{
    /**
     * @description The name of the governance item.
     *
     * @example RecentAccountLoginTimes
     *
     * @var string
     */
    public $governanceItem;

    /**
     * @description The type of the metric value. Valid values:
     *
     *   Number
     *   String
     *   Boolean
     *
     * @example Number
     *
     * @var string
     */
    public $metricType;

    /**
     * @description The metric value. The type of the metric value is determined by `MetricType`.
     *
     * @example 5
     *
     * @var mixed
     */
    public $metricValue;
    protected $_name = [
        'governanceItem' => 'GovernanceItem',
        'metricType'     => 'MetricType',
        'metricValue'    => 'MetricValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->governanceItem) {
            $res['GovernanceItem'] = $this->governanceItem;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->metricValue) {
            $res['MetricValue'] = $this->metricValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return governanceMetric
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GovernanceItem'])) {
            $model->governanceItem = $map['GovernanceItem'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['MetricValue'])) {
            $model->metricValue = $map['MetricValue'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListRecentGovernanceMetricsResponseBody\governanceMetrics;

use AlibabaCloud\Dara\Model;

class governanceMetric extends Model
{
    /**
     * @var string
     */
    public $governanceItem;

    /**
     * @var string
     */
    public $metricType;

    /**
     * @var mixed
     */
    public $metricValue;
    protected $_name = [
        'governanceItem' => 'GovernanceItem',
        'metricType' => 'MetricType',
        'metricValue' => 'MetricValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

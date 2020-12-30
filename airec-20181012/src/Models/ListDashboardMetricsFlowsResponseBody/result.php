<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\ListDashboardMetricsFlowsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var mixed[]
     */
    public $metricData;

    /**
     * @var string
     */
    public $metricType;
    protected $_name = [
        'metricData' => 'MetricData',
        'metricType' => 'MetricType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricData) {
            $res['MetricData'] = $this->metricData;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricData'])) {
            $model->metricData = $map['MetricData'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }

        return $model;
    }
}

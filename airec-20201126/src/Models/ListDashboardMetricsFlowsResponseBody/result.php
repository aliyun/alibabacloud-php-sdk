<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListDashboardMetricsFlowsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The metric data.
     *
     * @example xxx
     *
     * @var mixed[]
     */
    public $metricData;

    /**
     * @description The type of the metric.
     *
     * @example xxx
     *
     * @var string
     */
    public $metricType;
    protected $_name = [
        'metricData' => 'metricData',
        'metricType' => 'metricType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricData) {
            $res['metricData'] = $this->metricData;
        }
        if (null !== $this->metricType) {
            $res['metricType'] = $this->metricType;
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
        if (isset($map['metricData'])) {
            $model->metricData = $map['metricData'];
        }
        if (isset($map['metricType'])) {
            $model->metricType = $map['metricType'];
        }

        return $model;
    }
}

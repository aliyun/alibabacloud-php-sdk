<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeNetworkFlowTimeSeriesMetricResponseBody;

use AlibabaCloud\Tea\Model;

class networkFlowTimeSeries extends Model
{
    /**
     * @description The metric name, consistent with the Metric request parameter.
     *
     * @example total_requests
     *
     * @var string
     */
    public $metric;

    /**
     * @description The array of timestamps (seconds) marking the start of each time interval.
     *
     * @var string[]
     */
    public $timestamps;

    /**
     * @description The array of counts, each representing the count for the corresponding time interval.
     *
     * @var int[]
     */
    public $values;
    protected $_name = [
        'metric' => 'Metric',
        'timestamps' => 'Timestamps',
        'values' => 'Values',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }
        if (null !== $this->timestamps) {
            $res['Timestamps'] = $this->timestamps;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkFlowTimeSeries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }
        if (isset($map['Timestamps'])) {
            if (!empty($map['Timestamps'])) {
                $model->timestamps = $map['Timestamps'];
            }
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}

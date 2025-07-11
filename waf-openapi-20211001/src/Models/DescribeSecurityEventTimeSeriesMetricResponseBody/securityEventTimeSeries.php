<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTimeSeriesMetricResponseBody;

use AlibabaCloud\Tea\Model;

class securityEventTimeSeries extends Model
{
    /**
     * @description The metric. This value is the same as the value of Metric in the request parameters.
     *
     * @example monitored_requests
     *
     * @var string
     */
    public $metric;

    /**
     * @description The time points. Each point represents a time range.
     *
     * @var string[]
     */
    public $timestamps;

    /**
     * @description The data points. Each point represents a count for a time range.
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
     * @return securityEventTimeSeries
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

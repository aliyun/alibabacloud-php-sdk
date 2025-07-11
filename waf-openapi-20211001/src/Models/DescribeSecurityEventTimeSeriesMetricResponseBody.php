<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTimeSeriesMetricResponseBody\securityEventTimeSeries;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTimeSeriesMetricResponseBody\timeSeriesMetaData;
use AlibabaCloud\Tea\Model;

class DescribeSecurityEventTimeSeriesMetricResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example D827FCFE-90A7-4330-9326-*****4C7726
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The time series data returned. This operation can return time series for multiple metrics.
     *
     * @var securityEventTimeSeries[]
     */
    public $securityEventTimeSeries;

    /**
     * @description The metadata of the time series data returned.
     *
     * @var timeSeriesMetaData
     */
    public $timeSeriesMetaData;
    protected $_name = [
        'requestId' => 'RequestId',
        'securityEventTimeSeries' => 'SecurityEventTimeSeries',
        'timeSeriesMetaData' => 'TimeSeriesMetaData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityEventTimeSeries) {
            $res['SecurityEventTimeSeries'] = [];
            if (null !== $this->securityEventTimeSeries && \is_array($this->securityEventTimeSeries)) {
                $n = 0;
                foreach ($this->securityEventTimeSeries as $item) {
                    $res['SecurityEventTimeSeries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timeSeriesMetaData) {
            $res['TimeSeriesMetaData'] = null !== $this->timeSeriesMetaData ? $this->timeSeriesMetaData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecurityEventTimeSeriesMetricResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityEventTimeSeries'])) {
            if (!empty($map['SecurityEventTimeSeries'])) {
                $model->securityEventTimeSeries = [];
                $n = 0;
                foreach ($map['SecurityEventTimeSeries'] as $item) {
                    $model->securityEventTimeSeries[$n++] = null !== $item ? securityEventTimeSeries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TimeSeriesMetaData'])) {
            $model->timeSeriesMetaData = timeSeriesMetaData::fromMap($map['TimeSeriesMetaData']);
        }

        return $model;
    }
}

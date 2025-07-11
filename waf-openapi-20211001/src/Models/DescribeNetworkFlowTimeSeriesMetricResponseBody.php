<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeNetworkFlowTimeSeriesMetricResponseBody\networkFlowTimeSeries;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeNetworkFlowTimeSeriesMetricResponseBody\timeSeriesMetaData;
use AlibabaCloud\Tea\Model;

class DescribeNetworkFlowTimeSeriesMetricResponseBody extends Model
{
    /**
     * @description The array of time-series data. Supports returning data with multiple values.
     *
     * @var networkFlowTimeSeries[]
     */
    public $networkFlowTimeSeries;

    /**
     * @description The ID of the request.
     *
     * @example D827FCFE-90A7-4330-9326-D33C8B4C7726
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The metadata of the returned data.
     *
     * @var timeSeriesMetaData
     */
    public $timeSeriesMetaData;
    protected $_name = [
        'networkFlowTimeSeries' => 'NetworkFlowTimeSeries',
        'requestId' => 'RequestId',
        'timeSeriesMetaData' => 'TimeSeriesMetaData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkFlowTimeSeries) {
            $res['NetworkFlowTimeSeries'] = [];
            if (null !== $this->networkFlowTimeSeries && \is_array($this->networkFlowTimeSeries)) {
                $n = 0;
                foreach ($this->networkFlowTimeSeries as $item) {
                    $res['NetworkFlowTimeSeries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->timeSeriesMetaData) {
            $res['TimeSeriesMetaData'] = null !== $this->timeSeriesMetaData ? $this->timeSeriesMetaData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNetworkFlowTimeSeriesMetricResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkFlowTimeSeries'])) {
            if (!empty($map['NetworkFlowTimeSeries'])) {
                $model->networkFlowTimeSeries = [];
                $n = 0;
                foreach ($map['NetworkFlowTimeSeries'] as $item) {
                    $model->networkFlowTimeSeries[$n++] = null !== $item ? networkFlowTimeSeries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TimeSeriesMetaData'])) {
            $model->timeSeriesMetaData = timeSeriesMetaData::fromMap($map['TimeSeriesMetaData']);
        }

        return $model;
    }
}

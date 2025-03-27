<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeNetworkFlowTimeSeriesMetricResponseBody\networkFlowTimeSeries;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeNetworkFlowTimeSeriesMetricResponseBody\timeSeriesMetaData;

class DescribeNetworkFlowTimeSeriesMetricResponseBody extends Model
{
    /**
     * @var networkFlowTimeSeries[]
     */
    public $networkFlowTimeSeries;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var timeSeriesMetaData
     */
    public $timeSeriesMetaData;
    protected $_name = [
        'networkFlowTimeSeries' => 'NetworkFlowTimeSeries',
        'requestId' => 'RequestId',
        'timeSeriesMetaData' => 'TimeSeriesMetaData',
    ];

    public function validate()
    {
        if (\is_array($this->networkFlowTimeSeries)) {
            Model::validateArray($this->networkFlowTimeSeries);
        }
        if (null !== $this->timeSeriesMetaData) {
            $this->timeSeriesMetaData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkFlowTimeSeries) {
            if (\is_array($this->networkFlowTimeSeries)) {
                $res['NetworkFlowTimeSeries'] = [];
                $n1 = 0;
                foreach ($this->networkFlowTimeSeries as $item1) {
                    $res['NetworkFlowTimeSeries'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->timeSeriesMetaData) {
            $res['TimeSeriesMetaData'] = null !== $this->timeSeriesMetaData ? $this->timeSeriesMetaData->toArray($noStream) : $this->timeSeriesMetaData;
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
        if (isset($map['NetworkFlowTimeSeries'])) {
            if (!empty($map['NetworkFlowTimeSeries'])) {
                $model->networkFlowTimeSeries = [];
                $n1 = 0;
                foreach ($map['NetworkFlowTimeSeries'] as $item1) {
                    $model->networkFlowTimeSeries[$n1++] = networkFlowTimeSeries::fromMap($item1);
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

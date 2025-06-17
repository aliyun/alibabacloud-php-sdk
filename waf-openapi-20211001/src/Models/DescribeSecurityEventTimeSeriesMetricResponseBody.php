<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTimeSeriesMetricResponseBody\securityEventTimeSeries;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTimeSeriesMetricResponseBody\timeSeriesMetaData;

class DescribeSecurityEventTimeSeriesMetricResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var securityEventTimeSeries[]
     */
    public $securityEventTimeSeries;

    /**
     * @var timeSeriesMetaData
     */
    public $timeSeriesMetaData;
    protected $_name = [
        'requestId' => 'RequestId',
        'securityEventTimeSeries' => 'SecurityEventTimeSeries',
        'timeSeriesMetaData' => 'TimeSeriesMetaData',
    ];

    public function validate()
    {
        if (\is_array($this->securityEventTimeSeries)) {
            Model::validateArray($this->securityEventTimeSeries);
        }
        if (null !== $this->timeSeriesMetaData) {
            $this->timeSeriesMetaData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityEventTimeSeries) {
            if (\is_array($this->securityEventTimeSeries)) {
                $res['SecurityEventTimeSeries'] = [];
                $n1 = 0;
                foreach ($this->securityEventTimeSeries as $item1) {
                    $res['SecurityEventTimeSeries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecurityEventTimeSeries'])) {
            if (!empty($map['SecurityEventTimeSeries'])) {
                $model->securityEventTimeSeries = [];
                $n1 = 0;
                foreach ($map['SecurityEventTimeSeries'] as $item1) {
                    $model->securityEventTimeSeries[$n1] = securityEventTimeSeries::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TimeSeriesMetaData'])) {
            $model->timeSeriesMetaData = timeSeriesMetaData::fromMap($map['TimeSeriesMetaData']);
        }

        return $model;
    }
}

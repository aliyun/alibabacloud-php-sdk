<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelUserMetricsResponseBody\metricDatas;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelUserMetricsResponseBody\overallData;

class DescribeChannelUserMetricsResponseBody extends Model
{
    /**
     * @var metricDatas[]
     */
    public $metricDatas;

    /**
     * @var overallData
     */
    public $overallData;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'metricDatas' => 'MetricDatas',
        'overallData' => 'OverallData',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->metricDatas)) {
            Model::validateArray($this->metricDatas);
        }
        if (null !== $this->overallData) {
            $this->overallData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metricDatas) {
            if (\is_array($this->metricDatas)) {
                $res['MetricDatas'] = [];
                $n1 = 0;
                foreach ($this->metricDatas as $item1) {
                    $res['MetricDatas'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->overallData) {
            $res['OverallData'] = null !== $this->overallData ? $this->overallData->toArray($noStream) : $this->overallData;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MetricDatas'])) {
            if (!empty($map['MetricDatas'])) {
                $model->metricDatas = [];
                $n1 = 0;
                foreach ($map['MetricDatas'] as $item1) {
                    $model->metricDatas[$n1++] = metricDatas::fromMap($item1);
                }
            }
        }

        if (isset($map['OverallData'])) {
            $model->overallData = overallData::fromMap($map['OverallData']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

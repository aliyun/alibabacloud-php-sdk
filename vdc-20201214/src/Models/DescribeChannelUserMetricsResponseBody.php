<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelUserMetricsResponseBody\metricDatas;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelUserMetricsResponseBody\overallData;
use AlibabaCloud\Tea\Model;

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
     * @example F10D39C3-B58B-4A74-89B5-34162BA121E7
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'metricDatas' => 'MetricDatas',
        'overallData' => 'OverallData',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricDatas) {
            $res['MetricDatas'] = [];
            if (null !== $this->metricDatas && \is_array($this->metricDatas)) {
                $n = 0;
                foreach ($this->metricDatas as $item) {
                    $res['MetricDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->overallData) {
            $res['OverallData'] = null !== $this->overallData ? $this->overallData->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeChannelUserMetricsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricDatas'])) {
            if (!empty($map['MetricDatas'])) {
                $model->metricDatas = [];
                $n                  = 0;
                foreach ($map['MetricDatas'] as $item) {
                    $model->metricDatas[$n++] = null !== $item ? metricDatas::fromMap($item) : $item;
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

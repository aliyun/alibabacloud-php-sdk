<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelOverallDataResponseBody\callInfo;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelOverallDataResponseBody\metricDatas;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelOverallDataResponseBody\overallData;
use AlibabaCloud\Tea\Model;

class DescribeChannelOverallDataResponseBody extends Model
{
    /**
     * @var callInfo
     */
    public $callInfo;

    /**
     * @var metricDatas[]
     */
    public $metricDatas;

    /**
     * @var overallData
     */
    public $overallData;

    /**
     * @example 231470C1-ACFB-4C9F-844F-4CFE1E3804C5
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'callInfo'    => 'CallInfo',
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
        if (null !== $this->callInfo) {
            $res['CallInfo'] = null !== $this->callInfo ? $this->callInfo->toMap() : null;
        }
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
     * @return DescribeChannelOverallDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallInfo'])) {
            $model->callInfo = callInfo::fromMap($map['CallInfo']);
        }
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

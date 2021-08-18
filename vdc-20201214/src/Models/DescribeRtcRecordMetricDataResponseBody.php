<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeRtcRecordMetricDataResponseBody\rtcRecordMetricData;
use AlibabaCloud\Tea\Model;

class DescribeRtcRecordMetricDataResponseBody extends Model
{
    /**
     * @description 录制用量查询数据
     *
     * @var rtcRecordMetricData[]
     */
    public $rtcRecordMetricData;

    /**
     * @description 请求Id
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'rtcRecordMetricData' => 'RtcRecordMetricData',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rtcRecordMetricData) {
            $res['RtcRecordMetricData'] = [];
            if (null !== $this->rtcRecordMetricData && \is_array($this->rtcRecordMetricData)) {
                $n = 0;
                foreach ($this->rtcRecordMetricData as $item) {
                    $res['RtcRecordMetricData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRtcRecordMetricDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RtcRecordMetricData'])) {
            if (!empty($map['RtcRecordMetricData'])) {
                $model->rtcRecordMetricData = [];
                $n                          = 0;
                foreach ($map['RtcRecordMetricData'] as $item) {
                    $model->rtcRecordMetricData[$n++] = null !== $item ? rtcRecordMetricData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

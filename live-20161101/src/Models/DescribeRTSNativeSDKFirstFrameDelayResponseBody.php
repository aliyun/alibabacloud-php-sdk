<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKFirstFrameDelayResponseBody\frameDelayData;
use AlibabaCloud\Tea\Model;

class DescribeRTSNativeSDKFirstFrameDelayResponseBody extends Model
{
    /**
     * @var string
     */
    public $dataInterval;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var frameDelayData[]
     */
    public $frameDelayData;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval'   => 'DataInterval',
        'endTime'        => 'EndTime',
        'frameDelayData' => 'FrameDelayData',
        'requestId'      => 'RequestId',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->frameDelayData) {
            $res['FrameDelayData'] = [];
            if (null !== $this->frameDelayData && \is_array($this->frameDelayData)) {
                $n = 0;
                foreach ($this->frameDelayData as $item) {
                    $res['FrameDelayData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRTSNativeSDKFirstFrameDelayResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FrameDelayData'])) {
            if (!empty($map['FrameDelayData'])) {
                $model->frameDelayData = [];
                $n                     = 0;
                foreach ($map['FrameDelayData'] as $item) {
                    $model->frameDelayData[$n++] = null !== $item ? frameDelayData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}

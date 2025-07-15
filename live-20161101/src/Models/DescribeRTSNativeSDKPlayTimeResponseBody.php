<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKPlayTimeResponseBody\playTimeData;
use AlibabaCloud\Tea\Model;

class DescribeRTSNativeSDKPlayTimeResponseBody extends Model
{
    /**
     * @description The time granularity.
     *
     * @example 300
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description The end of the time range for which the data was queried.
     *
     * @example 2021-12-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The average playback duration and average stuttering duration at each interval. Unit: milliseconds.
     *
     * @var playTimeData[]
     */
    public $playTimeData;

    /**
     * @description The ID of the request.
     *
     * @example 7BF95F2A-3B24-4CDE-9346-7F6FA86697A1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range for which the data was queried.
     *
     * @example 2021-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval' => 'DataInterval',
        'endTime' => 'EndTime',
        'playTimeData' => 'PlayTimeData',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->playTimeData) {
            $res['PlayTimeData'] = [];
            if (null !== $this->playTimeData && \is_array($this->playTimeData)) {
                $n = 0;
                foreach ($this->playTimeData as $item) {
                    $res['PlayTimeData'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeRTSNativeSDKPlayTimeResponseBody
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
        if (isset($map['PlayTimeData'])) {
            if (!empty($map['PlayTimeData'])) {
                $model->playTimeData = [];
                $n = 0;
                foreach ($map['PlayTimeData'] as $item) {
                    $model->playTimeData[$n++] = null !== $item ? playTimeData::fromMap($item) : $item;
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

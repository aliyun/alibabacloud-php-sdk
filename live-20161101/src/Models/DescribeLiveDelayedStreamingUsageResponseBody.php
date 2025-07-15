<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDelayedStreamingUsageResponseBody\delayData;
use AlibabaCloud\Tea\Model;

class DescribeLiveDelayedStreamingUsageResponseBody extends Model
{
    /**
     * @description The details about the stream delay usage data.
     *
     * @var delayData
     */
    public $delayData;

    /**
     * @description The end of the time range during which the data was queried.
     *
     * @example 2022-10-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The request ID.
     *
     * @example 4B460F8B-993C-4F48-B98A-910811DEBFEB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range during which the data was queried.
     *
     * @example 2022-10-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'delayData' => 'DelayData',
        'endTime' => 'EndTime',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->delayData) {
            $res['DelayData'] = null !== $this->delayData ? $this->delayData->toMap() : null;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
     * @return DescribeLiveDelayedStreamingUsageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DelayData'])) {
            $model->delayData = delayData::fromMap($map['DelayData']);
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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

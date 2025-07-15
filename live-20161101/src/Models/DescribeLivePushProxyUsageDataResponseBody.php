<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePushProxyUsageDataResponseBody\pushProxyData;
use AlibabaCloud\Tea\Model;

class DescribeLivePushProxyUsageDataResponseBody extends Model
{
    /**
     * @description The end time.
     *
     * @example 2022-10-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The usage data of live center stream relay.
     *
     * @var pushProxyData
     */
    public $pushProxyData;

    /**
     * @description The request ID.
     *
     * @example 4B460F8B-993C-4F48-B98A-910811DEBFEB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The start time.
     *
     * @example 2022-10-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'pushProxyData' => 'PushProxyData',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pushProxyData) {
            $res['PushProxyData'] = null !== $this->pushProxyData ? $this->pushProxyData->toMap() : null;
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
     * @return DescribeLivePushProxyUsageDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PushProxyData'])) {
            $model->pushProxyData = pushProxyData::fromMap($map['PushProxyData']);
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

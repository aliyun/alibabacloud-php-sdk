<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKVvDataResponseBody\vvData;
use AlibabaCloud\Tea\Model;

class DescribeRTSNativeSDKVvDataResponseBody extends Model
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
     * @description The ID of the request.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD8
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

    /**
     * @description The total number of playbacks and the number of successful playbacks at each interval.
     *
     * @var vvData[]
     */
    public $vvData;
    protected $_name = [
        'dataInterval' => 'DataInterval',
        'endTime' => 'EndTime',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
        'vvData' => 'VvData',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->vvData) {
            $res['VvData'] = [];
            if (null !== $this->vvData && \is_array($this->vvData)) {
                $n = 0;
                foreach ($this->vvData as $item) {
                    $res['VvData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRTSNativeSDKVvDataResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['VvData'])) {
            if (!empty($map['VvData'])) {
                $model->vvData = [];
                $n = 0;
                foreach ($map['VvData'] as $item) {
                    $model->vvData[$n++] = null !== $item ? vvData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

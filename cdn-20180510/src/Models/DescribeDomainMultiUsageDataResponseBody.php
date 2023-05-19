<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainMultiUsageDataResponseBody\requestPerInterval;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainMultiUsageDataResponseBody\trafficPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeDomainMultiUsageDataResponseBody extends Model
{
    /**
     * @description The end of the time range that was queried.
     *
     * @example 2017-12-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The type of data returned.
     *
     * >  For Alibaba Cloud CDN, the valid value is Simple.
     * @example 3C6CCEC4-6B88-4D4A-93E4-D47B3D92CF8F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the request.
     *
     * @var requestPerInterval
     */
    public $requestPerInterval;

    /**
     * @description The accelerated domain names. You can specify multiple accelerated domain names and separate domain names with commas (,).
     *
     * > *   You can specify at most 30 accelerated domain names.
     *   If you do not set this parameter, the data of all accelerated domain names that belong to your Alibaba Cloud account is queried.
     *
     * @example 2017-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @var trafficPerInterval
     */
    public $trafficPerInterval;
    protected $_name = [
        'endTime'            => 'EndTime',
        'requestId'          => 'RequestId',
        'requestPerInterval' => 'RequestPerInterval',
        'startTime'          => 'StartTime',
        'trafficPerInterval' => 'TrafficPerInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->requestPerInterval) {
            $res['RequestPerInterval'] = null !== $this->requestPerInterval ? $this->requestPerInterval->toMap() : null;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->trafficPerInterval) {
            $res['TrafficPerInterval'] = null !== $this->trafficPerInterval ? $this->trafficPerInterval->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainMultiUsageDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RequestPerInterval'])) {
            $model->requestPerInterval = requestPerInterval::fromMap($map['RequestPerInterval']);
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TrafficPerInterval'])) {
            $model->trafficPerInterval = trafficPerInterval::fromMap($map['TrafficPerInterval']);
        }

        return $model;
    }
}

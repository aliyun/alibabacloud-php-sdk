<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainMultiUsageDataResponseBody\requestPerInterval;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainMultiUsageDataResponseBody\trafficPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainMultiUsageDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var requestPerInterval
     */
    public $requestPerInterval;

    /**
     * @var trafficPerInterval
     */
    public $trafficPerInterval;
    protected $_name = [
        'endTime'            => 'EndTime',
        'requestId'          => 'RequestId',
        'startTime'          => 'StartTime',
        'requestPerInterval' => 'RequestPerInterval',
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->requestPerInterval) {
            $res['RequestPerInterval'] = null !== $this->requestPerInterval ? $this->requestPerInterval->toMap() : null;
        }
        if (null !== $this->trafficPerInterval) {
            $res['TrafficPerInterval'] = null !== $this->trafficPerInterval ? $this->trafficPerInterval->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnDomainMultiUsageDataResponseBody
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['RequestPerInterval'])) {
            $model->requestPerInterval = requestPerInterval::fromMap($map['RequestPerInterval']);
        }
        if (isset($map['TrafficPerInterval'])) {
            $model->trafficPerInterval = trafficPerInterval::fromMap($map['TrafficPerInterval']);
        }

        return $model;
    }
}

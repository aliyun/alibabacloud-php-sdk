<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainMultiUsageDataResponseBody\requestPerInterval;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainMultiUsageDataResponseBody\trafficPerInterval;

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
     * @var requestPerInterval
     */
    public $requestPerInterval;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var trafficPerInterval
     */
    public $trafficPerInterval;
    protected $_name = [
        'endTime' => 'EndTime',
        'requestId' => 'RequestId',
        'requestPerInterval' => 'RequestPerInterval',
        'startTime' => 'StartTime',
        'trafficPerInterval' => 'TrafficPerInterval',
    ];

    public function validate()
    {
        if (null !== $this->requestPerInterval) {
            $this->requestPerInterval->validate();
        }
        if (null !== $this->trafficPerInterval) {
            $this->trafficPerInterval->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->requestPerInterval) {
            $res['RequestPerInterval'] = null !== $this->requestPerInterval ? $this->requestPerInterval->toArray($noStream) : $this->requestPerInterval;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->trafficPerInterval) {
            $res['TrafficPerInterval'] = null !== $this->trafficPerInterval ? $this->trafficPerInterval->toArray($noStream) : $this->trafficPerInterval;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

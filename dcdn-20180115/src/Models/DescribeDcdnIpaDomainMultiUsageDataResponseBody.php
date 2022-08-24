<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnIpaDomainMultiUsageDataResponseBody\trafficPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeDcdnIpaDomainMultiUsageDataResponseBody extends Model
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
     * @var trafficPerInterval
     */
    public $trafficPerInterval;
    protected $_name = [
        'endTime'            => 'EndTime',
        'requestId'          => 'RequestId',
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
     * @return DescribeDcdnIpaDomainMultiUsageDataResponseBody
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
        if (isset($map['TrafficPerInterval'])) {
            $model->trafficPerInterval = trafficPerInterval::fromMap($map['TrafficPerInterval']);
        }

        return $model;
    }
}

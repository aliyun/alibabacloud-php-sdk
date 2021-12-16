<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainTrafficDataResponseBody\trafficDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainTrafficDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $dataInterval;

    /**
     * @var string
     */
    public $domainName;

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
     * @var trafficDataPerInterval
     */
    public $trafficDataPerInterval;
    protected $_name = [
        'dataInterval'           => 'DataInterval',
        'domainName'             => 'DomainName',
        'endTime'                => 'EndTime',
        'requestId'              => 'RequestId',
        'startTime'              => 'StartTime',
        'trafficDataPerInterval' => 'TrafficDataPerInterval',
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
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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
        if (null !== $this->trafficDataPerInterval) {
            $res['TrafficDataPerInterval'] = null !== $this->trafficDataPerInterval ? $this->trafficDataPerInterval->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnDomainTrafficDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
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
        if (isset($map['TrafficDataPerInterval'])) {
            $model->trafficDataPerInterval = trafficDataPerInterval::fromMap($map['TrafficDataPerInterval']);
        }

        return $model;
    }
}

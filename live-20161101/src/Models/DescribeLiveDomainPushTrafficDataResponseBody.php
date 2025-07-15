<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainPushTrafficDataResponseBody\trafficDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainPushTrafficDataResponseBody extends Model
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
     * @description The ingest domain.
     *
     * @example demo.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range during which the data was queried.
     *
     * @example 2017-12-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The request ID.
     *
     * @example 3C6CCEC4-6B88-4D4A-93E4-D47B3D92CF8F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range during which the data was queried.
     *
     * @example 2017-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The traffic data that was collected at each interval.
     *
     * @var trafficDataPerInterval
     */
    public $trafficDataPerInterval;
    protected $_name = [
        'dataInterval' => 'DataInterval',
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
        'trafficDataPerInterval' => 'TrafficDataPerInterval',
    ];

    public function validate() {}

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
     * @return DescribeLiveDomainPushTrafficDataResponseBody
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

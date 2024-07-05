<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainTrafficDataResponseBody\trafficDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeVodDomainTrafficDataResponseBody extends Model
{
    /**
     * @description The time interval at which data is returned, which is the time granularity. Unit: seconds.
     *
     * @example 3600
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description The accelerated domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range.
     *
     * @example 2019-01-20T14:59:58Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the request.
     *
     * @example D94E471F-1A27-442E-552D-D4D2000C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range.
     *
     * @example 2019-01-20T13:59:58Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The total amount of network traffic.
     *
     * @example 5906662826
     *
     * @var string
     */
    public $totalTraffic;

    /**
     * @description The amount of network traffic at each time interval.
     *
     * @var trafficDataPerInterval
     */
    public $trafficDataPerInterval;
    protected $_name = [
        'dataInterval'           => 'DataInterval',
        'domainName'             => 'DomainName',
        'endTime'                => 'EndTime',
        'requestId'              => 'RequestId',
        'startTime'              => 'StartTime',
        'totalTraffic'           => 'TotalTraffic',
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
        if (null !== $this->totalTraffic) {
            $res['TotalTraffic'] = $this->totalTraffic;
        }
        if (null !== $this->trafficDataPerInterval) {
            $res['TrafficDataPerInterval'] = null !== $this->trafficDataPerInterval ? $this->trafficDataPerInterval->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodDomainTrafficDataResponseBody
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
        if (isset($map['TotalTraffic'])) {
            $model->totalTraffic = $map['TotalTraffic'];
        }
        if (isset($map['TrafficDataPerInterval'])) {
            $model->trafficDataPerInterval = trafficDataPerInterval::fromMap($map['TrafficDataPerInterval']);
        }

        return $model;
    }
}

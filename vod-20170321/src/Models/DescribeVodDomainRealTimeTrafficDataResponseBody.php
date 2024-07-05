<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealTimeTrafficDataResponseBody\realTimeTrafficDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeVodDomainRealTimeTrafficDataResponseBody extends Model
{
    /**
     * @description The time interval at which data is returned. Unit: seconds.
     *
     * The returned value varies based on the time range per query. Valid values: 60 (1 minute), 300 (5 minutes), and 3600 (1 hour). For more information, see the **Time granularity** section in the **API documentation**.
     * @example 60
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
     * @example 2019-12-10T20:01:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The details of traffic data in each time interval.
     *
     * @var realTimeTrafficDataPerInterval
     */
    public $realTimeTrafficDataPerInterval;

    /**
     * @description The ID of the request.
     *
     * @example A666D44F-19D6-490E-97CF-1A64AB962C57
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range.
     *
     * @example 2019-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval'                   => 'DataInterval',
        'domainName'                     => 'DomainName',
        'endTime'                        => 'EndTime',
        'realTimeTrafficDataPerInterval' => 'RealTimeTrafficDataPerInterval',
        'requestId'                      => 'RequestId',
        'startTime'                      => 'StartTime',
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
        if (null !== $this->realTimeTrafficDataPerInterval) {
            $res['RealTimeTrafficDataPerInterval'] = null !== $this->realTimeTrafficDataPerInterval ? $this->realTimeTrafficDataPerInterval->toMap() : null;
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
     * @return DescribeVodDomainRealTimeTrafficDataResponseBody
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
        if (isset($map['RealTimeTrafficDataPerInterval'])) {
            $model->realTimeTrafficDataPerInterval = realTimeTrafficDataPerInterval::fromMap($map['RealTimeTrafficDataPerInterval']);
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

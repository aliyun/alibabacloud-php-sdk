<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainHitRateDataResponseBody\hitRateInterval;
use AlibabaCloud\Tea\Model;

class DescribeVodDomainHitRateDataResponseBody extends Model
{
    /**
     * @description The time interval at which data is returned, which is the time granularity. Unit: seconds.
     *
     * @example 300
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
     * @example 2024-01-20T14:59:58Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The byte hit rate data at each time interval.
     *
     * @var hitRateInterval
     */
    public $hitRateInterval;

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
     * @example 2024-01-20T13:59:58Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval'    => 'DataInterval',
        'domainName'      => 'DomainName',
        'endTime'         => 'EndTime',
        'hitRateInterval' => 'HitRateInterval',
        'requestId'       => 'RequestId',
        'startTime'       => 'StartTime',
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
        if (null !== $this->hitRateInterval) {
            $res['HitRateInterval'] = null !== $this->hitRateInterval ? $this->hitRateInterval->toMap() : null;
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
     * @return DescribeVodDomainHitRateDataResponseBody
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
        if (isset($map['HitRateInterval'])) {
            $model->hitRateInterval = hitRateInterval::fromMap($map['HitRateInterval']);
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

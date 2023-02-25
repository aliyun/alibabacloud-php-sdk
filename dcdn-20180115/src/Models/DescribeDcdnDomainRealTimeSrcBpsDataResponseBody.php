<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeSrcBpsDataResponseBody\realTimeSrcBpsDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainRealTimeSrcBpsDataResponseBody extends Model
{
    /**
     * @description The time interval between the data entries returned. Unit: seconds.
     *
     * The time granularity varies with the maximum time range per query. Valid values: 60 (1 minute), 300 (5 minutes), and 3600(1 hour). For more information, see **Description**.
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
     * @description The end of the time range during which data was queried.
     *
     * @example 2015-12-10T20:01:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The back-to-origin bandwidth data returned at each time interval. Unit: bit/s.
     *
     * @var realTimeSrcBpsDataPerInterval
     */
    public $realTimeSrcBpsDataPerInterval;

    /**
     * @description The ID of the request.
     *
     * @example 7CBCD6AD-B016-42E5-AE0B-B3731DE8F755
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range during which data was queried.
     *
     * @example 2015-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval'                  => 'DataInterval',
        'domainName'                    => 'DomainName',
        'endTime'                       => 'EndTime',
        'realTimeSrcBpsDataPerInterval' => 'RealTimeSrcBpsDataPerInterval',
        'requestId'                     => 'RequestId',
        'startTime'                     => 'StartTime',
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
        if (null !== $this->realTimeSrcBpsDataPerInterval) {
            $res['RealTimeSrcBpsDataPerInterval'] = null !== $this->realTimeSrcBpsDataPerInterval ? $this->realTimeSrcBpsDataPerInterval->toMap() : null;
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
     * @return DescribeDcdnDomainRealTimeSrcBpsDataResponseBody
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
        if (isset($map['RealTimeSrcBpsDataPerInterval'])) {
            $model->realTimeSrcBpsDataPerInterval = realTimeSrcBpsDataPerInterval::fromMap($map['RealTimeSrcBpsDataPerInterval']);
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

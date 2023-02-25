<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainHitRateDataResponseBody\hitRatePerInterval;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainHitRateDataResponseBody extends Model
{
    /**
     * @description The time interval between the data entries returned. Unit: seconds.
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
     * @description The end of the time range during which data was queried.
     *
     * @example 2018-03-02T15:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The byte hit ratio at each time interval. The byte hit ratio is measured in percentage.
     *
     * @var hitRatePerInterval
     */
    public $hitRatePerInterval;

    /**
     * @description The ID of the request.
     *
     * @example 4D07ABFE-4737-4834-B1B9-A661308C47B4
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range during which data was queried.
     *
     * @example 2018-03-02T12:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval'       => 'DataInterval',
        'domainName'         => 'DomainName',
        'endTime'            => 'EndTime',
        'hitRatePerInterval' => 'HitRatePerInterval',
        'requestId'          => 'RequestId',
        'startTime'          => 'StartTime',
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
        if (null !== $this->hitRatePerInterval) {
            $res['HitRatePerInterval'] = null !== $this->hitRatePerInterval ? $this->hitRatePerInterval->toMap() : null;
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
     * @return DescribeDcdnDomainHitRateDataResponseBody
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
        if (isset($map['HitRatePerInterval'])) {
            $model->hitRatePerInterval = hitRatePerInterval::fromMap($map['HitRatePerInterval']);
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

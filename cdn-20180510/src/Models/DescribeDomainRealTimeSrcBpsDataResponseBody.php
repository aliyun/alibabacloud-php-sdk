<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeSrcBpsDataResponseBody\realTimeSrcBpsDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeDomainRealTimeSrcBpsDataResponseBody extends Model
{
    /**
     * @example 60
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 2019-12-10T20:01:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @var realTimeSrcBpsDataPerInterval
     */
    public $realTimeSrcBpsDataPerInterval;

    /**
     * @example 7CBCD6AD-B016-42E5-AE0B-B3731DE8F755
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2019-12-10T20:00:00Z
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
     * @return DescribeDomainRealTimeSrcBpsDataResponseBody
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

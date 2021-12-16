<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeSrcTrafficDataResponseBody\realTimeSrcTrafficDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainRealTimeSrcTrafficDataResponseBody extends Model
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
     * @var realTimeSrcTrafficDataPerInterval
     */
    public $realTimeSrcTrafficDataPerInterval;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval'                      => 'DataInterval',
        'domainName'                        => 'DomainName',
        'endTime'                           => 'EndTime',
        'realTimeSrcTrafficDataPerInterval' => 'RealTimeSrcTrafficDataPerInterval',
        'requestId'                         => 'RequestId',
        'startTime'                         => 'StartTime',
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
        if (null !== $this->realTimeSrcTrafficDataPerInterval) {
            $res['RealTimeSrcTrafficDataPerInterval'] = null !== $this->realTimeSrcTrafficDataPerInterval ? $this->realTimeSrcTrafficDataPerInterval->toMap() : null;
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
     * @return DescribeDcdnDomainRealTimeSrcTrafficDataResponseBody
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
        if (isset($map['RealTimeSrcTrafficDataPerInterval'])) {
            $model->realTimeSrcTrafficDataPerInterval = realTimeSrcTrafficDataPerInterval::fromMap($map['RealTimeSrcTrafficDataPerInterval']);
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

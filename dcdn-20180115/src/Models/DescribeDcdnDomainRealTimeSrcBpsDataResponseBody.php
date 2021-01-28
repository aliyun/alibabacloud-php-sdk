<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeSrcBpsDataResponseBody\realTimeSrcBpsDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainRealTimeSrcBpsDataResponseBody extends Model
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
    public $domainName;

    /**
     * @var realTimeSrcBpsDataPerInterval
     */
    public $realTimeSrcBpsDataPerInterval;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $dataInterval;
    protected $_name = [
        'endTime'                       => 'EndTime',
        'requestId'                     => 'RequestId',
        'domainName'                    => 'DomainName',
        'realTimeSrcBpsDataPerInterval' => 'RealTimeSrcBpsDataPerInterval',
        'startTime'                     => 'StartTime',
        'dataInterval'                  => 'DataInterval',
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
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->realTimeSrcBpsDataPerInterval) {
            $res['RealTimeSrcBpsDataPerInterval'] = null !== $this->realTimeSrcBpsDataPerInterval ? $this->realTimeSrcBpsDataPerInterval->toMap() : null;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['RealTimeSrcBpsDataPerInterval'])) {
            $model->realTimeSrcBpsDataPerInterval = realTimeSrcBpsDataPerInterval::fromMap($map['RealTimeSrcBpsDataPerInterval']);
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }

        return $model;
    }
}

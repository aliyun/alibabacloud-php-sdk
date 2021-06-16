<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeSrcBpsDataResponseBody\realTimeSrcBpsDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeDomainRealTimeSrcBpsDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $dataInterval;

    /**
     * @var realTimeSrcBpsDataPerInterval
     */
    public $realTimeSrcBpsDataPerInterval;
    protected $_name = [
        'endTime'                       => 'EndTime',
        'startTime'                     => 'StartTime',
        'requestId'                     => 'RequestId',
        'domainName'                    => 'DomainName',
        'dataInterval'                  => 'DataInterval',
        'realTimeSrcBpsDataPerInterval' => 'RealTimeSrcBpsDataPerInterval',
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->realTimeSrcBpsDataPerInterval) {
            $res['RealTimeSrcBpsDataPerInterval'] = null !== $this->realTimeSrcBpsDataPerInterval ? $this->realTimeSrcBpsDataPerInterval->toMap() : null;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['RealTimeSrcBpsDataPerInterval'])) {
            $model->realTimeSrcBpsDataPerInterval = realTimeSrcBpsDataPerInterval::fromMap($map['RealTimeSrcBpsDataPerInterval']);
        }

        return $model;
    }
}

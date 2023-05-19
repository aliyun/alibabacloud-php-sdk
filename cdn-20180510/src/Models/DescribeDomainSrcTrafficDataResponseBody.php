<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainSrcTrafficDataResponseBody\srcTrafficDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeDomainSrcTrafficDataResponseBody extends Model
{
    /**
     * @example 300
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
     * @example 2015-12-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example A666D44F-19D6-490E-97CF-1A64AB962C57
     *
     * @var string
     */
    public $requestId;

    /**
     * @var srcTrafficDataPerInterval
     */
    public $srcTrafficDataPerInterval;

    /**
     * @example 2015-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval'              => 'DataInterval',
        'domainName'                => 'DomainName',
        'endTime'                   => 'EndTime',
        'requestId'                 => 'RequestId',
        'srcTrafficDataPerInterval' => 'SrcTrafficDataPerInterval',
        'startTime'                 => 'StartTime',
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
        if (null !== $this->srcTrafficDataPerInterval) {
            $res['SrcTrafficDataPerInterval'] = null !== $this->srcTrafficDataPerInterval ? $this->srcTrafficDataPerInterval->toMap() : null;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainSrcTrafficDataResponseBody
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
        if (isset($map['SrcTrafficDataPerInterval'])) {
            $model->srcTrafficDataPerInterval = srcTrafficDataPerInterval::fromMap($map['SrcTrafficDataPerInterval']);
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainOriginTrafficDataResponseBody\originTrafficDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeScdnDomainOriginTrafficDataResponseBody extends Model
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
     * @example 2017-12-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @var originTrafficDataPerInterval
     */
    public $originTrafficDataPerInterval;

    /**
     * @example A666D44F-19D6-490E-97CF-1A64AB962C57
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2017-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval'                 => 'DataInterval',
        'domainName'                   => 'DomainName',
        'endTime'                      => 'EndTime',
        'originTrafficDataPerInterval' => 'OriginTrafficDataPerInterval',
        'requestId'                    => 'RequestId',
        'startTime'                    => 'StartTime',
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
        if (null !== $this->originTrafficDataPerInterval) {
            $res['OriginTrafficDataPerInterval'] = null !== $this->originTrafficDataPerInterval ? $this->originTrafficDataPerInterval->toMap() : null;
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
     * @return DescribeScdnDomainOriginTrafficDataResponseBody
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
        if (isset($map['OriginTrafficDataPerInterval'])) {
            $model->originTrafficDataPerInterval = originTrafficDataPerInterval::fromMap($map['OriginTrafficDataPerInterval']);
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

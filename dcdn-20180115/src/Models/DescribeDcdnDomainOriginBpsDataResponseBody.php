<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainOriginBpsDataResponseBody\originBpsDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainOriginBpsDataResponseBody extends Model
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
     * @example 2019-12-11T00:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @var originBpsDataPerInterval
     */
    public $originBpsDataPerInterval;

    /**
     * @example 7CBCD6AD-B016-42E5-AE0B-B3731DE8F755
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2019-12-10T00:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval'             => 'DataInterval',
        'domainName'               => 'DomainName',
        'endTime'                  => 'EndTime',
        'originBpsDataPerInterval' => 'OriginBpsDataPerInterval',
        'requestId'                => 'RequestId',
        'startTime'                => 'StartTime',
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
        if (null !== $this->originBpsDataPerInterval) {
            $res['OriginBpsDataPerInterval'] = null !== $this->originBpsDataPerInterval ? $this->originBpsDataPerInterval->toMap() : null;
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
     * @return DescribeDcdnDomainOriginBpsDataResponseBody
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
        if (isset($map['OriginBpsDataPerInterval'])) {
            $model->originBpsDataPerInterval = originBpsDataPerInterval::fromMap($map['OriginBpsDataPerInterval']);
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

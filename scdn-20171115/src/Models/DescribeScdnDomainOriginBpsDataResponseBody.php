<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainOriginBpsDataResponseBody\originBpsDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeScdnDomainOriginBpsDataResponseBody extends Model
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
     * @example 2017-12-10T20:00:00Z
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
     * @return DescribeScdnDomainOriginBpsDataResponseBody
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

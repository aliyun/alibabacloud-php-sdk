<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainBpsDataResponseBody\bpsDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainBpsDataResponseBody extends Model
{
    /**
     * @description The bandwidth data returned at each interval.
     *
     * @var bpsDataPerInterval
     */
    public $bpsDataPerInterval;

    /**
     * @description The time granularity of the query. Unit: seconds.
     *
     * @example 300
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description The streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range during which the data was queried. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-12-10T09:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The request ID.
     *
     * @example B955107D-E658-4E77-B913-E0AC3D31693E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range during which the data was queried. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-12-10T08:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'bpsDataPerInterval' => 'BpsDataPerInterval',
        'dataInterval' => 'DataInterval',
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bpsDataPerInterval) {
            $res['BpsDataPerInterval'] = null !== $this->bpsDataPerInterval ? $this->bpsDataPerInterval->toMap() : null;
        }
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainBpsDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BpsDataPerInterval'])) {
            $model->bpsDataPerInterval = bpsDataPerInterval::fromMap($map['BpsDataPerInterval']);
        }
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}

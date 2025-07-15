<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRealTimeBpsDataResponseBody\realTimeBpsDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainRealTimeBpsDataResponseBody extends Model
{
    /**
     * @description The interval at which data was queried.
     *
     * @example 60
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description The streaming domain name or names that was queried.
     *
     * @example example.com,example.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range in which data was queried. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2015-11-30T05:40:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The bandwidth data that was collected every minute.
     *
     * @var realTimeBpsDataPerInterval
     */
    public $realTimeBpsDataPerInterval;

    /**
     * @description The ID of the request.
     *
     * @example BC858082-736F-4A25-867B-E5B67C85ACF7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range in which data was queried. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2015-11-30T05:33:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval' => 'DataInterval',
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'realTimeBpsDataPerInterval' => 'RealTimeBpsDataPerInterval',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

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
        if (null !== $this->realTimeBpsDataPerInterval) {
            $res['RealTimeBpsDataPerInterval'] = null !== $this->realTimeBpsDataPerInterval ? $this->realTimeBpsDataPerInterval->toMap() : null;
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
     * @return DescribeLiveDomainRealTimeBpsDataResponseBody
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
        if (isset($map['RealTimeBpsDataPerInterval'])) {
            $model->realTimeBpsDataPerInterval = realTimeBpsDataPerInterval::fromMap($map['RealTimeBpsDataPerInterval']);
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRealTimeHttpCodeDataResponseBody\realTimeHttpCodeData;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainRealTimeHttpCodeDataResponseBody extends Model
{
    /**
     * @description The time interval between the entries returned. Unit: seconds Default value: 60.
     *
     * @example 60
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description The streaming domain.
     *
     * @example example.com,example.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range during which the data was queried. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2015-11-30T05:40:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The proportions of HTTP status codes at each time interval.
     *
     * @var realTimeHttpCodeData
     */
    public $realTimeHttpCodeData;

    /**
     * @description The request ID.
     *
     * @example BC858082-736F-4A25-867B-E5B67C85ACF7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range during which the data was queried. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
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
        'realTimeHttpCodeData' => 'RealTimeHttpCodeData',
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
        if (null !== $this->realTimeHttpCodeData) {
            $res['RealTimeHttpCodeData'] = null !== $this->realTimeHttpCodeData ? $this->realTimeHttpCodeData->toMap() : null;
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
     * @return DescribeLiveDomainRealTimeHttpCodeDataResponseBody
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
        if (isset($map['RealTimeHttpCodeData'])) {
            $model->realTimeHttpCodeData = realTimeHttpCodeData::fromMap($map['RealTimeHttpCodeData']);
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

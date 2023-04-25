<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeHttpCodeDataResponseBody\realTimeHttpCodeData;
use AlibabaCloud\Tea\Model;

class DescribeDomainRealTimeHttpCodeDataResponseBody extends Model
{
    /**
     * @description The time interval between the data entries returned. Unit: seconds.
     *
     * Depending on the maximum time range per query, the value is 60 (1 minute), 300 (5 minutes), or 3600 (1 hour). For more information, see the "Time granularity" section in Usage notes.
     * @example 60
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description The accelerated domain name.
     *
     * @example example.com,example.org
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range during which data was queried.
     *
     * @example 2019-11-29T05:42:00Z
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
     * @description The ID of the request.
     *
     * @example BC858082-736F-4A25-867B-E5B67C85ACF7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The start of the time range during which data was queried.
     *
     * @example 2019-11-29T05:39:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval'         => 'DataInterval',
        'domainName'           => 'DomainName',
        'endTime'              => 'EndTime',
        'realTimeHttpCodeData' => 'RealTimeHttpCodeData',
        'requestId'            => 'RequestId',
        'startTime'            => 'StartTime',
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
     * @return DescribeDomainRealTimeHttpCodeDataResponseBody
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

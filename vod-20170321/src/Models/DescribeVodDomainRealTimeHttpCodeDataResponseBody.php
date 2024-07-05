<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealTimeHttpCodeDataResponseBody\realTimeHttpCodeData;
use AlibabaCloud\Tea\Model;

class DescribeVodDomainRealTimeHttpCodeDataResponseBody extends Model
{
    /**
     * @description The time interval at which data is returned. Unit: seconds.
     *
     * The returned value varies based on the time range per query. Valid values: 60 (1 minute), 300 (5 minutes), and 3600 (1 hour). For more information, see the **Time granularity** section in the **API documentation**.
     * @example 60
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description The accelerated domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range.
     *
     * @example 2019-11-30T05:40:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The proportion of each HTTP status code in each time interval.
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
     * @description The beginning of the time range.
     *
     * @example 2019-11-30T05:39:00Z
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
     * @return DescribeVodDomainRealTimeHttpCodeDataResponseBody
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

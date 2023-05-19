<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeSrcHttpCodeDataResponseBody\realTimeSrcHttpCodeData;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainRealTimeSrcHttpCodeDataResponseBody extends Model
{
    /**
     * @description The HTTP status code.
     *
     * @example 60
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description The proportions of HTTP status codes.
     *
     * @example example.com,example.org
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The time interval between the data entries returned. Unit: seconds.
     *
     * @example 2019-11-30T05:40:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The proportion of the HTTP status code.
     *
     * @var realTimeSrcHttpCodeData
     */
    public $realTimeSrcHttpCodeData;

    /**
     * @description The timestamp of the data returned.
     *
     * @example BC858082-736F-4A25-867B-E5B67C85ACF7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The proportions of HTTP status codes at each time interval.
     *
     * @example 2019-11-30T05:33:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval'            => 'DataInterval',
        'domainName'              => 'DomainName',
        'endTime'                 => 'EndTime',
        'realTimeSrcHttpCodeData' => 'RealTimeSrcHttpCodeData',
        'requestId'               => 'RequestId',
        'startTime'               => 'StartTime',
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
        if (null !== $this->realTimeSrcHttpCodeData) {
            $res['RealTimeSrcHttpCodeData'] = null !== $this->realTimeSrcHttpCodeData ? $this->realTimeSrcHttpCodeData->toMap() : null;
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
     * @return DescribeDcdnDomainRealTimeSrcHttpCodeDataResponseBody
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
        if (isset($map['RealTimeSrcHttpCodeData'])) {
            $model->realTimeSrcHttpCodeData = realTimeSrcHttpCodeData::fromMap($map['RealTimeSrcHttpCodeData']);
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

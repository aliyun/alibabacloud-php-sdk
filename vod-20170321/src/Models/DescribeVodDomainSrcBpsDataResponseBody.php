<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainSrcBpsDataResponseBody\srcBpsDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeVodDomainSrcBpsDataResponseBody extends Model
{
    /**
     * @description The time interval between the entries returned. Unit: seconds.
     *
     * @example 300
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description The accelerated domain name.
     *
     * @example sample.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range during which data was queried.
     *
     * @example 2022-08-23T02:02:57Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-4A13-BEF6-****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Details about the origin bandwidth data returned at each time interval. Unit: bit/s.
     *
     * @var srcBpsDataPerInterval
     */
    public $srcBpsDataPerInterval;

    /**
     * @description The start of the time range during which data was queried.
     *
     * @example 2022-07-12T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval'          => 'DataInterval',
        'domainName'            => 'DomainName',
        'endTime'               => 'EndTime',
        'requestId'             => 'RequestId',
        'srcBpsDataPerInterval' => 'SrcBpsDataPerInterval',
        'startTime'             => 'StartTime',
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
        if (null !== $this->srcBpsDataPerInterval) {
            $res['SrcBpsDataPerInterval'] = null !== $this->srcBpsDataPerInterval ? $this->srcBpsDataPerInterval->toMap() : null;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodDomainSrcBpsDataResponseBody
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
        if (isset($map['SrcBpsDataPerInterval'])) {
            $model->srcBpsDataPerInterval = srcBpsDataPerInterval::fromMap($map['SrcBpsDataPerInterval']);
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}

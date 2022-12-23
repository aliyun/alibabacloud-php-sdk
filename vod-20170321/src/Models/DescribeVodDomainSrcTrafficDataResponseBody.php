<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainSrcTrafficDataResponseBody\srcTrafficDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeVodDomainSrcTrafficDataResponseBody extends Model
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
     * @example 2022-09-23T15:59:59Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 25818875-5F78-4AF6-D7393642CA58****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var srcTrafficDataPerInterval
     */
    public $srcTrafficDataPerInterval;

    /**
     * @example 2022-08-29T16:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 5906662826
     *
     * @var string
     */
    public $totalTraffic;
    protected $_name = [
        'dataInterval'              => 'DataInterval',
        'domainName'                => 'DomainName',
        'endTime'                   => 'EndTime',
        'requestId'                 => 'RequestId',
        'srcTrafficDataPerInterval' => 'SrcTrafficDataPerInterval',
        'startTime'                 => 'StartTime',
        'totalTraffic'              => 'TotalTraffic',
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
        if (null !== $this->srcTrafficDataPerInterval) {
            $res['SrcTrafficDataPerInterval'] = null !== $this->srcTrafficDataPerInterval ? $this->srcTrafficDataPerInterval->toMap() : null;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->totalTraffic) {
            $res['TotalTraffic'] = $this->totalTraffic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodDomainSrcTrafficDataResponseBody
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
        if (isset($map['SrcTrafficDataPerInterval'])) {
            $model->srcTrafficDataPerInterval = srcTrafficDataPerInterval::fromMap($map['SrcTrafficDataPerInterval']);
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TotalTraffic'])) {
            $model->totalTraffic = $map['TotalTraffic'];
        }

        return $model;
    }
}

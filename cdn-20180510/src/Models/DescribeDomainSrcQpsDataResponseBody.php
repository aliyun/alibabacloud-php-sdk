<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainSrcQpsDataResponseBody\srcQpsDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeDomainSrcQpsDataResponseBody extends Model
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
     * @example 2019-11-30T05:40:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 7CBCD6AD-B016-42E5-AE0B-B3731DE8F755
     *
     * @var string
     */
    public $requestId;

    /**
     * @var srcQpsDataPerInterval
     */
    public $srcQpsDataPerInterval;

    /**
     * @example 2019-11-30T05:33:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval'          => 'DataInterval',
        'domainName'            => 'DomainName',
        'endTime'               => 'EndTime',
        'requestId'             => 'RequestId',
        'srcQpsDataPerInterval' => 'SrcQpsDataPerInterval',
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
        if (null !== $this->srcQpsDataPerInterval) {
            $res['SrcQpsDataPerInterval'] = null !== $this->srcQpsDataPerInterval ? $this->srcQpsDataPerInterval->toMap() : null;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainSrcQpsDataResponseBody
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
        if (isset($map['SrcQpsDataPerInterval'])) {
            $model->srcQpsDataPerInterval = srcQpsDataPerInterval::fromMap($map['SrcQpsDataPerInterval']);
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}

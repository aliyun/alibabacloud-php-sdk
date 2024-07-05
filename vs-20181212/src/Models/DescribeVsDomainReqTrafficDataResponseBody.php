<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainReqTrafficDataResponseBody\reqTrafficDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeVsDomainReqTrafficDataResponseBody extends Model
{
    /**
     * @example 3600
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 2021-09-22T03:40:41Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @var reqTrafficDataPerInterval
     */
    public $reqTrafficDataPerInterval;

    /**
     * @example 9BEC5E85-C76B-56EF-A922-860EFDB8B64B
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2021-09-21T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval'              => 'DataInterval',
        'domainName'                => 'DomainName',
        'endTime'                   => 'EndTime',
        'reqTrafficDataPerInterval' => 'ReqTrafficDataPerInterval',
        'requestId'                 => 'RequestId',
        'startTime'                 => 'StartTime',
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
        if (null !== $this->reqTrafficDataPerInterval) {
            $res['ReqTrafficDataPerInterval'] = null !== $this->reqTrafficDataPerInterval ? $this->reqTrafficDataPerInterval->toMap() : null;
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
     * @return DescribeVsDomainReqTrafficDataResponseBody
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
        if (isset($map['ReqTrafficDataPerInterval'])) {
            $model->reqTrafficDataPerInterval = reqTrafficDataPerInterval::fromMap($map['ReqTrafficDataPerInterval']);
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

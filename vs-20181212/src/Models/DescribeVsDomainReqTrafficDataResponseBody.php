<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainReqTrafficDataResponseBody\reqTrafficDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeVsDomainReqTrafficDataResponseBody extends Model
{
    /**
     * @var reqTrafficDataPerInterval
     */
    public $reqTrafficDataPerInterval;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $dataInterval;
    protected $_name = [
        'reqTrafficDataPerInterval' => 'ReqTrafficDataPerInterval',
        'endTime'                   => 'EndTime',
        'requestId'                 => 'RequestId',
        'domainName'                => 'DomainName',
        'startTime'                 => 'StartTime',
        'dataInterval'              => 'DataInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reqTrafficDataPerInterval) {
            $res['ReqTrafficDataPerInterval'] = null !== $this->reqTrafficDataPerInterval ? $this->reqTrafficDataPerInterval->toMap() : null;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
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
        if (isset($map['ReqTrafficDataPerInterval'])) {
            $model->reqTrafficDataPerInterval = reqTrafficDataPerInterval::fromMap($map['ReqTrafficDataPerInterval']);
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainSrcTrafficDataResponseBody\srcTrafficDataPerInterval;

class DescribeVodDomainSrcTrafficDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $dataInterval;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var srcTrafficDataPerInterval
     */
    public $srcTrafficDataPerInterval;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $totalTraffic;
    protected $_name = [
        'dataInterval' => 'DataInterval',
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'requestId' => 'RequestId',
        'srcTrafficDataPerInterval' => 'SrcTrafficDataPerInterval',
        'startTime' => 'StartTime',
        'totalTraffic' => 'TotalTraffic',
    ];

    public function validate()
    {
        if (null !== $this->srcTrafficDataPerInterval) {
            $this->srcTrafficDataPerInterval->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['SrcTrafficDataPerInterval'] = null !== $this->srcTrafficDataPerInterval ? $this->srcTrafficDataPerInterval->toArray($noStream) : $this->srcTrafficDataPerInterval;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->totalTraffic) {
            $res['TotalTraffic'] = $this->totalTraffic;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainSrcBpsDataResponseBody\srcBpsDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeDomainSrcBpsDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

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
    public $dataInterval;

    /**
     * @var srcBpsDataPerInterval
     */
    public $srcBpsDataPerInterval;
    protected $_name = [
        'endTime'               => 'EndTime',
        'startTime'             => 'StartTime',
        'requestId'             => 'RequestId',
        'domainName'            => 'DomainName',
        'dataInterval'          => 'DataInterval',
        'srcBpsDataPerInterval' => 'SrcBpsDataPerInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->srcBpsDataPerInterval) {
            $res['SrcBpsDataPerInterval'] = null !== $this->srcBpsDataPerInterval ? $this->srcBpsDataPerInterval->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainSrcBpsDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['SrcBpsDataPerInterval'])) {
            $model->srcBpsDataPerInterval = srcBpsDataPerInterval::fromMap($map['SrcBpsDataPerInterval']);
        }

        return $model;
    }
}

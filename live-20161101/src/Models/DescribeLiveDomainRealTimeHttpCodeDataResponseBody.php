<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRealTimeHttpCodeDataResponseBody\realTimeHttpCodeData;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainRealTimeHttpCodeDataResponseBody extends Model
{
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

    /**
     * @var realTimeHttpCodeData
     */
    public $realTimeHttpCodeData;
    protected $_name = [
        'endTime'              => 'EndTime',
        'requestId'            => 'RequestId',
        'domainName'           => 'DomainName',
        'startTime'            => 'StartTime',
        'dataInterval'         => 'DataInterval',
        'realTimeHttpCodeData' => 'RealTimeHttpCodeData',
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
        if (null !== $this->realTimeHttpCodeData) {
            $res['RealTimeHttpCodeData'] = null !== $this->realTimeHttpCodeData ? $this->realTimeHttpCodeData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainRealTimeHttpCodeDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['RealTimeHttpCodeData'])) {
            $model->realTimeHttpCodeData = realTimeHttpCodeData::fromMap($map['RealTimeHttpCodeData']);
        }

        return $model;
    }
}

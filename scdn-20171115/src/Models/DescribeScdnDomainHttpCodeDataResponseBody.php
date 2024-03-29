<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainHttpCodeDataResponseBody\dataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeScdnDomainHttpCodeDataResponseBody extends Model
{
    /**
     * @example 3600
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @var dataPerInterval
     */
    public $dataPerInterval;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 2018-03-01T13:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 91FC2D9D-B042-4634-8A5C-7B8E7482C22D
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2018-03-01T05:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval'    => 'DataInterval',
        'dataPerInterval' => 'DataPerInterval',
        'domainName'      => 'DomainName',
        'endTime'         => 'EndTime',
        'requestId'       => 'RequestId',
        'startTime'       => 'StartTime',
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
        if (null !== $this->dataPerInterval) {
            $res['DataPerInterval'] = null !== $this->dataPerInterval ? $this->dataPerInterval->toMap() : null;
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScdnDomainHttpCodeDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['DataPerInterval'])) {
            $model->dataPerInterval = dataPerInterval::fromMap($map['DataPerInterval']);
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}

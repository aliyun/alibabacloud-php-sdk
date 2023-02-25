<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainWebsocketHttpCodeDataResponseBody\httpCodeDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainWebsocketHttpCodeDataResponseBody extends Model
{
    /**
     * @description The time interval between the data entries returned. Unit: seconds.
     *
     * @example 3600
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description The accelerated domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range during which data was queried.
     *
     * @example 2018-03-01T13:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The HTTP status codes.
     *
     * @var httpCodeDataPerInterval
     */
    public $httpCodeDataPerInterval;

    /**
     * @description The ID of the request.
     *
     * @example 91FC2D9D-B042-4634-8A5C-7B8E7482C22D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range during which data was queried.
     *
     * @example 2018-03-01T05:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval'            => 'DataInterval',
        'domainName'              => 'DomainName',
        'endTime'                 => 'EndTime',
        'httpCodeDataPerInterval' => 'HttpCodeDataPerInterval',
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
        if (null !== $this->httpCodeDataPerInterval) {
            $res['HttpCodeDataPerInterval'] = null !== $this->httpCodeDataPerInterval ? $this->httpCodeDataPerInterval->toMap() : null;
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
     * @return DescribeDcdnDomainWebsocketHttpCodeDataResponseBody
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
        if (isset($map['HttpCodeDataPerInterval'])) {
            $model->httpCodeDataPerInterval = httpCodeDataPerInterval::fromMap($map['HttpCodeDataPerInterval']);
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

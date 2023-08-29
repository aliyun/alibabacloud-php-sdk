<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnTopDomainsByFlowResponseBody\topDomains;
use AlibabaCloud\Tea\Model;

class DescribeDcdnTopDomainsByFlowResponseBody extends Model
{
    /**
     * @description The total number of accelerated domains under your account.
     *
     * @example 68
     *
     * @var int
     */
    public $domainCount;

    /**
     * @description The total number of accelerated domains that are in the **Enabled** state under your account.
     *
     * @example 68
     *
     * @var int
     */
    public $domainOnlineCount;

    /**
     * @description The end of the reporting period.
     *
     * @example 2016-03-14T07:34:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The request ID.
     *
     * @example 4E09C5D7-E1CF-4CAA-A45E-8727F4C8FD70
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the reporting period.
     *
     * @example 2016-03-14T06:34:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The top N domain names ranked by network traffic.
     *
     * @var topDomains
     */
    public $topDomains;
    protected $_name = [
        'domainCount'       => 'DomainCount',
        'domainOnlineCount' => 'DomainOnlineCount',
        'endTime'           => 'EndTime',
        'requestId'         => 'RequestId',
        'startTime'         => 'StartTime',
        'topDomains'        => 'TopDomains',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainCount) {
            $res['DomainCount'] = $this->domainCount;
        }
        if (null !== $this->domainOnlineCount) {
            $res['DomainOnlineCount'] = $this->domainOnlineCount;
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
        if (null !== $this->topDomains) {
            $res['TopDomains'] = null !== $this->topDomains ? $this->topDomains->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnTopDomainsByFlowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainCount'])) {
            $model->domainCount = $map['DomainCount'];
        }
        if (isset($map['DomainOnlineCount'])) {
            $model->domainOnlineCount = $map['DomainOnlineCount'];
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
        if (isset($map['TopDomains'])) {
            $model->topDomains = topDomains::fromMap($map['TopDomains']);
        }

        return $model;
    }
}

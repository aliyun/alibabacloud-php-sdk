<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveTopDomainsByFlowResponseBody\topDomains;
use AlibabaCloud\Tea\Model;

class DescribeLiveTopDomainsByFlowResponseBody extends Model
{
    /**
     * @description The total number of domain names in your account.
     *
     * @example 1
     *
     * @var int
     */
    public $domainCount;

    /**
     * @description The total number of domain names that are in the Enabled state in your account.
     *
     * @example 1
     *
     * @var int
     */
    public $domainOnlineCount;

    /**
     * @description The end of the time range for which data was queried.
     *
     * @example 2018-03-20T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The request ID.
     *
     * @example 33834C3E-388E-5FFE-A8AE-63575035C064
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range for which data was queried.
     *
     * @example 2018-03-17T16:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The top domain names ranked by traffic.
     *
     * @var topDomains
     */
    public $topDomains;
    protected $_name = [
        'domainCount' => 'DomainCount',
        'domainOnlineCount' => 'DomainOnlineCount',
        'endTime' => 'EndTime',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
        'topDomains' => 'TopDomains',
    ];

    public function validate() {}

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
     * @return DescribeLiveTopDomainsByFlowResponseBody
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

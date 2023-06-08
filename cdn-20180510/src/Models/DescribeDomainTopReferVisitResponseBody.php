<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopReferVisitResponseBody\topReferList;
use AlibabaCloud\Tea\Model;

class DescribeDomainTopReferVisitResponseBody extends Model
{
    /**
     * @description The accelerated domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The ID of the request.
     *
     * @example 95994621-8382-464B-8762-C708E73568D1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range that was queried.
     *
     * @example 2019-12-21T12:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The most frequently requested web pages.
     *
     * @var topReferList
     */
    public $topReferList;
    protected $_name = [
        'domainName'   => 'DomainName',
        'requestId'    => 'RequestId',
        'startTime'    => 'StartTime',
        'topReferList' => 'TopReferList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->topReferList) {
            $res['TopReferList'] = null !== $this->topReferList ? $this->topReferList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainTopReferVisitResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TopReferList'])) {
            $model->topReferList = topReferList::fromMap($map['TopReferList']);
        }

        return $model;
    }
}

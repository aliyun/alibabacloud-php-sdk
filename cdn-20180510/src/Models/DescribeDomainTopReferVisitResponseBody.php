<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopReferVisitResponseBody\topReferList;
use AlibabaCloud\Tea\Model;

class DescribeDomainTopReferVisitResponseBody extends Model
{
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
     * @var topReferList
     */
    public $topReferList;
    protected $_name = [
        'startTime'    => 'StartTime',
        'requestId'    => 'RequestId',
        'domainName'   => 'DomainName',
        'topReferList' => 'TopReferList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['TopReferList'])) {
            $model->topReferList = topReferList::fromMap($map['TopReferList']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainTopReferVisitResponseBody\topReferList;

class DescribeDcdnDomainTopReferVisitResponseBody extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var topReferList
     */
    public $topReferList;
    protected $_name = [
        'domainName' => 'DomainName',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
        'topReferList' => 'TopReferList',
    ];

    public function validate()
    {
        if (null !== $this->topReferList) {
            $this->topReferList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['TopReferList'] = null !== $this->topReferList ? $this->topReferList->toArray($noStream) : $this->topReferList;
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopUrlVisitResponseBody\allUrlList;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopUrlVisitResponseBody\url200List;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopUrlVisitResponseBody\url300List;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopUrlVisitResponseBody\url400List;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopUrlVisitResponseBody\url500List;
use AlibabaCloud\Tea\Model;

class DescribeDomainTopUrlVisitResponseBody extends Model
{
    /**
     * @var allUrlList
     */
    public $allUrlList;

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
     * @var url200List
     */
    public $url200List;

    /**
     * @var url300List
     */
    public $url300List;

    /**
     * @var url400List
     */
    public $url400List;

    /**
     * @var url500List
     */
    public $url500List;
    protected $_name = [
        'allUrlList' => 'AllUrlList',
        'domainName' => 'DomainName',
        'requestId'  => 'RequestId',
        'startTime'  => 'StartTime',
        'url200List' => 'Url200List',
        'url300List' => 'Url300List',
        'url400List' => 'Url400List',
        'url500List' => 'Url500List',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allUrlList) {
            $res['AllUrlList'] = null !== $this->allUrlList ? $this->allUrlList->toMap() : null;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->url200List) {
            $res['Url200List'] = null !== $this->url200List ? $this->url200List->toMap() : null;
        }
        if (null !== $this->url300List) {
            $res['Url300List'] = null !== $this->url300List ? $this->url300List->toMap() : null;
        }
        if (null !== $this->url400List) {
            $res['Url400List'] = null !== $this->url400List ? $this->url400List->toMap() : null;
        }
        if (null !== $this->url500List) {
            $res['Url500List'] = null !== $this->url500List ? $this->url500List->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainTopUrlVisitResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllUrlList'])) {
            $model->allUrlList = allUrlList::fromMap($map['AllUrlList']);
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Url200List'])) {
            $model->url200List = url200List::fromMap($map['Url200List']);
        }
        if (isset($map['Url300List'])) {
            $model->url300List = url300List::fromMap($map['Url300List']);
        }
        if (isset($map['Url400List'])) {
            $model->url400List = url400List::fromMap($map['Url400List']);
        }
        if (isset($map['Url500List'])) {
            $model->url500List = url500List::fromMap($map['Url500List']);
        }

        return $model;
    }
}

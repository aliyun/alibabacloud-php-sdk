<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDomainResponseBody\domainList;
use AlibabaCloud\Tea\Model;

class DescribeOutgoingDomainResponseBody extends Model
{
    /**
     * @description An array that consists of the domain names in outbound connections.
     *
     * @var domainList[]
     */
    public $domainList;

    /**
     * @description The ID of the request.
     *
     * @example F0F82705-CFC7-5F83-86C8-A063892F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of the domain names in outbound connections.
     *
     * @example 132
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'domainList' => 'DomainList',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainList) {
            $res['DomainList'] = [];
            if (null !== $this->domainList && \is_array($this->domainList)) {
                $n = 0;
                foreach ($this->domainList as $item) {
                    $res['DomainList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOutgoingDomainResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainList'])) {
            if (!empty($map['DomainList'])) {
                $model->domainList = [];
                $n                 = 0;
                foreach ($map['DomainList'] as $item) {
                    $model->domainList[$n++] = null !== $item ? domainList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

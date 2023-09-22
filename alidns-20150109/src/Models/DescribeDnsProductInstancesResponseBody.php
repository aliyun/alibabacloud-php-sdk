<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsProductInstancesResponseBody\dnsProducts;
use AlibabaCloud\Tea\Model;

class DescribeDnsProductInstancesResponseBody extends Model
{
    /**
     * @description The number of domain names that have been bound to the DNS instance.
     *
     * @var dnsProducts
     */
    public $dnsProducts;

    /**
     * @example PUBLIC
     *
     * @var string
     */
    public $domainType;

    /**
     * @description Indicates whether the request for domain name resolution was in the black hole.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The type of the overseas line.
     *
     * @example 2
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The number of monitored nodes.
     *
     * @example 536E9CAD-DB30-4647-AC87-AA5CC38C5382
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of Alibaba Cloud DNS instances obtained by this operation.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dnsProducts' => 'DnsProducts',
        'domainType'  => 'DomainType',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnsProducts) {
            $res['DnsProducts'] = null !== $this->dnsProducts ? $this->dnsProducts->toMap() : null;
        }
        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return DescribeDnsProductInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnsProducts'])) {
            $model->dnsProducts = dnsProducts::fromMap($map['DnsProducts']);
        }
        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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

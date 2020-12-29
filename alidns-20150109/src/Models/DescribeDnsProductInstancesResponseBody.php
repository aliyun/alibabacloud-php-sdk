<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsProductInstancesResponseBody\dnsProducts;
use AlibabaCloud\Tea\Model;

class DescribeDnsProductInstancesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $domainType;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var dnsProducts[]
     */
    public $dnsProducts;
    protected $_name = [
        'totalCount'  => 'TotalCount',
        'domainType'  => 'DomainType',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'pageNumber'  => 'PageNumber',
        'dnsProducts' => 'DnsProducts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->dnsProducts) {
            $res['DnsProducts'] = [];
            if (null !== $this->dnsProducts && \is_array($this->dnsProducts)) {
                $n = 0;
                foreach ($this->dnsProducts as $item) {
                    $res['DnsProducts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['DnsProducts'])) {
            if (!empty($map['DnsProducts'])) {
                $model->dnsProducts = [];
                $n                  = 0;
                foreach ($map['DnsProducts'] as $item) {
                    $model->dnsProducts[$n++] = null !== $item ? dnsProducts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

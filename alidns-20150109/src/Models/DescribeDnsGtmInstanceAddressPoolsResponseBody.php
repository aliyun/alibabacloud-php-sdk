<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceAddressPoolsResponseBody\addrPools;
use AlibabaCloud\Tea\Model;

class DescribeDnsGtmInstanceAddressPoolsResponseBody extends Model
{
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
     * @var int
     */
    public $totalPages;

    /**
     * @var int
     */
    public $totalItems;

    /**
     * @var addrPools[]
     */
    public $addrPools;
    protected $_name = [
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'pageNumber' => 'PageNumber',
        'totalPages' => 'TotalPages',
        'totalItems' => 'TotalItems',
        'addrPools'  => 'AddrPools',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
        }
        if (null !== $this->totalItems) {
            $res['TotalItems'] = $this->totalItems;
        }
        if (null !== $this->addrPools) {
            $res['AddrPools'] = [];
            if (null !== $this->addrPools && \is_array($this->addrPools)) {
                $n = 0;
                foreach ($this->addrPools as $item) {
                    $res['AddrPools'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDnsGtmInstanceAddressPoolsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }
        if (isset($map['TotalItems'])) {
            $model->totalItems = $map['TotalItems'];
        }
        if (isset($map['AddrPools'])) {
            if (!empty($map['AddrPools'])) {
                $model->addrPools = [];
                $n                = 0;
                foreach ($map['AddrPools'] as $item) {
                    $model->addrPools[$n++] = null !== $item ? addrPools::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

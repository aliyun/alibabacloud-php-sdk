<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmAddressPoolsResponseBody\addressPools;
use AlibabaCloud\Tea\Model;

class SearchCloudGtmAddressPoolsResponseBody extends Model
{
    /**
     * @var addressPools
     */
    public $addressPools;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 536E9CAD-DB30-4647-AC87-AA5CC38C5382
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 11
     *
     * @var int
     */
    public $totalItems;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalPages;
    protected $_name = [
        'addressPools' => 'AddressPools',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
        'totalItems'   => 'TotalItems',
        'totalPages'   => 'TotalPages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressPools) {
            $res['AddressPools'] = null !== $this->addressPools ? $this->addressPools->toMap() : null;
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
        if (null !== $this->totalItems) {
            $res['TotalItems'] = $this->totalItems;
        }
        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchCloudGtmAddressPoolsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressPools'])) {
            $model->addressPools = addressPools::fromMap($map['AddressPools']);
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
        if (isset($map['TotalItems'])) {
            $model->totalItems = $map['TotalItems'];
        }
        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstancesResponseBody\gtmInstances;
use AlibabaCloud\Tea\Model;

class DescribeDnsGtmInstancesResponseBody extends Model
{
    /**
     * @description The returned instances.
     *
     * @var gtmInstances[]
     */
    public $gtmInstances;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 84314904-D047-4176-A0EC-256D7F68C7F5
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned on all pages.
     *
     * @example 100
     *
     * @var int
     */
    public $totalItems;

    /**
     * @description The total number of returned pages.
     *
     * @example 123
     *
     * @var int
     */
    public $totalPages;
    protected $_name = [
        'gtmInstances' => 'GtmInstances',
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
        if (null !== $this->gtmInstances) {
            $res['GtmInstances'] = [];
            if (null !== $this->gtmInstances && \is_array($this->gtmInstances)) {
                $n = 0;
                foreach ($this->gtmInstances as $item) {
                    $res['GtmInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeDnsGtmInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GtmInstances'])) {
            if (!empty($map['GtmInstances'])) {
                $model->gtmInstances = [];
                $n                   = 0;
                foreach ($map['GtmInstances'] as $item) {
                    $model->gtmInstances[$n++] = null !== $item ? gtmInstances::fromMap($item) : $item;
                }
            }
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

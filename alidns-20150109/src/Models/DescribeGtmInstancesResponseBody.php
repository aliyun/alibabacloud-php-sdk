<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstancesResponseBody\gtmInstances;
use AlibabaCloud\Tea\Model;

class DescribeGtmInstancesResponseBody extends Model
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
     * @var gtmInstances[]
     */
    public $gtmInstances;

    /**
     * @var int
     */
    public $totalPages;

    /**
     * @var int
     */
    public $totalItems;
    protected $_name = [
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
        'pageNumber'   => 'PageNumber',
        'gtmInstances' => 'GtmInstances',
        'totalPages'   => 'TotalPages',
        'totalItems'   => 'TotalItems',
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
        if (null !== $this->gtmInstances) {
            $res['GtmInstances'] = [];
            if (null !== $this->gtmInstances && \is_array($this->gtmInstances)) {
                $n = 0;
                foreach ($this->gtmInstances as $item) {
                    $res['GtmInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
        }
        if (null !== $this->totalItems) {
            $res['TotalItems'] = $this->totalItems;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGtmInstancesResponseBody
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
        if (isset($map['GtmInstances'])) {
            if (!empty($map['GtmInstances'])) {
                $model->gtmInstances = [];
                $n                   = 0;
                foreach ($map['GtmInstances'] as $item) {
                    $model->gtmInstances[$n++] = null !== $item ? gtmInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }
        if (isset($map['TotalItems'])) {
            $model->totalItems = $map['TotalItems'];
        }

        return $model;
    }
}

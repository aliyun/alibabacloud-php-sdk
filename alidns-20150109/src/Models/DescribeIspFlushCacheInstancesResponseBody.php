<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeIspFlushCacheInstancesResponseBody\ispFlushCacheInstances;
use AlibabaCloud\Tea\Model;

class DescribeIspFlushCacheInstancesResponseBody extends Model
{
    /**
     * @var ispFlushCacheInstances[]
     */
    public $ispFlushCacheInstances;

    /**
     * @var int
     */
    public $pageNumber;

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
    public $totalItems;

    /**
     * @var int
     */
    public $totalPages;
    protected $_name = [
        'ispFlushCacheInstances' => 'IspFlushCacheInstances',
        'pageNumber'             => 'PageNumber',
        'pageSize'               => 'PageSize',
        'requestId'              => 'RequestId',
        'totalItems'             => 'TotalItems',
        'totalPages'             => 'TotalPages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ispFlushCacheInstances) {
            $res['IspFlushCacheInstances'] = [];
            if (null !== $this->ispFlushCacheInstances && \is_array($this->ispFlushCacheInstances)) {
                $n = 0;
                foreach ($this->ispFlushCacheInstances as $item) {
                    $res['IspFlushCacheInstances'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeIspFlushCacheInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IspFlushCacheInstances'])) {
            if (!empty($map['IspFlushCacheInstances'])) {
                $model->ispFlushCacheInstances = [];
                $n                             = 0;
                foreach ($map['IspFlushCacheInstances'] as $item) {
                    $model->ispFlushCacheInstances[$n++] = null !== $item ? ispFlushCacheInstances::fromMap($item) : $item;
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

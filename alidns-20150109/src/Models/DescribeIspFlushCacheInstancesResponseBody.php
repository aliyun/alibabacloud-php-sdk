<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeIspFlushCacheInstancesResponseBody\ispFlushCacheInstances;

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
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalItems' => 'TotalItems',
        'totalPages' => 'TotalPages',
    ];

    public function validate()
    {
        if (\is_array($this->ispFlushCacheInstances)) {
            Model::validateArray($this->ispFlushCacheInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ispFlushCacheInstances) {
            if (\is_array($this->ispFlushCacheInstances)) {
                $res['IspFlushCacheInstances'] = [];
                $n1 = 0;
                foreach ($this->ispFlushCacheInstances as $item1) {
                    $res['IspFlushCacheInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IspFlushCacheInstances'])) {
            if (!empty($map['IspFlushCacheInstances'])) {
                $model->ispFlushCacheInstances = [];
                $n1 = 0;
                foreach ($map['IspFlushCacheInstances'] as $item1) {
                    $model->ispFlushCacheInstances[$n1] = ispFlushCacheInstances::fromMap($item1);
                    ++$n1;
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

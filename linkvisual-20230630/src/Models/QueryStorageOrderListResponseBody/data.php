<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models\QueryStorageOrderListResponseBody;

use AlibabaCloud\SDK\Linkvisual\V20230630\Models\QueryStorageOrderListResponseBody\data\storageOrderList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $pageCount;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var storageOrderList[]
     */
    public $storageOrderList;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'pageCount'        => 'PageCount',
        'pageNo'           => 'PageNo',
        'pageSize'         => 'PageSize',
        'storageOrderList' => 'StorageOrderList',
        'total'            => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageCount) {
            $res['PageCount'] = $this->pageCount;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->storageOrderList) {
            $res['StorageOrderList'] = [];
            if (null !== $this->storageOrderList && \is_array($this->storageOrderList)) {
                $n = 0;
                foreach ($this->storageOrderList as $item) {
                    $res['StorageOrderList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageCount'])) {
            $model->pageCount = $map['PageCount'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StorageOrderList'])) {
            if (!empty($map['StorageOrderList'])) {
                $model->storageOrderList = [];
                $n                       = 0;
                foreach ($map['StorageOrderList'] as $item) {
                    $model->storageOrderList[$n++] = null !== $item ? storageOrderList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}

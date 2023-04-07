<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsInvoiceScanQueryResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsInvoiceScanQueryResponseBody\module\items;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var items[]
     */
    public $items;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 2
     *
     * @var int
     */
    public $totalPage;

    /**
     * @example 30
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'items'     => 'items',
        'pageNo'    => 'page_no',
        'pageSize'  => 'page_size',
        'totalPage' => 'total_page',
        'totalSize' => 'total_size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNo) {
            $res['page_no'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->totalPage) {
            $res['total_page'] = $this->totalPage;
        }
        if (null !== $this->totalSize) {
            $res['total_size'] = $this->totalSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['page_no'])) {
            $model->pageNo = $map['page_no'];
        }
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }
        if (isset($map['total_page'])) {
            $model->totalPage = $map['total_page'];
        }
        if (isset($map['total_size'])) {
            $model->totalSize = $map['total_size'];
        }

        return $model;
    }
}

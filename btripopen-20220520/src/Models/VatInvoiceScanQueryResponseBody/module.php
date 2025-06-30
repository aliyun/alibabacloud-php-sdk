<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\VatInvoiceScanQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\VatInvoiceScanQueryResponseBody\module\items;

class module extends Model
{
    /**
     * @var items[]
     */
    public $items;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalPage;

    /**
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'items' => 'items',
        'pageNo' => 'page_no',
        'pageSize' => 'page_size',
        'totalPage' => 'total_page',
        'totalSize' => 'total_size',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
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

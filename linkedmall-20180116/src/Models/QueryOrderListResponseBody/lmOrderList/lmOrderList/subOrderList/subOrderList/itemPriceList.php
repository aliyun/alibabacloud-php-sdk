<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderListResponseBody\lmOrderList\lmOrderList\subOrderList\subOrderList;

use AlibabaCloud\Tea\Model;

class itemPriceList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderListResponseBody\lmOrderList\lmOrderList\subOrderList\subOrderList\itemPriceList\itemPriceList[]
     */
    public $itemPriceList;
    protected $_name = [
        'itemPriceList' => 'ItemPriceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemPriceList) {
            $res['ItemPriceList'] = [];
            if (null !== $this->itemPriceList && \is_array($this->itemPriceList)) {
                $n = 0;
                foreach ($this->itemPriceList as $item) {
                    $res['ItemPriceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itemPriceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemPriceList'])) {
            if (!empty($map['ItemPriceList'])) {
                $model->itemPriceList = [];
                $n                    = 0;
                foreach ($map['ItemPriceList'] as $item) {
                    $model->itemPriceList[$n++] = null !== $item ? \AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderListResponseBody\lmOrderList\lmOrderList\subOrderList\subOrderList\itemPriceList\itemPriceList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

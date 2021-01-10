<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderDetailInnerResponseBody\model\order\subItemOrderList\subItemOrder;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderDetailInnerResponseBody\model\order\subItemOrderList\subItemOrder\itemPriceList\itemPrice;
use AlibabaCloud\Tea\Model;

class itemPriceList extends Model
{
    /**
     * @var itemPrice[]
     */
    public $itemPrice;
    protected $_name = [
        'itemPrice' => 'ItemPrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemPrice) {
            $res['ItemPrice'] = [];
            if (null !== $this->itemPrice && \is_array($this->itemPrice)) {
                $n = 0;
                foreach ($this->itemPrice as $item) {
                    $res['ItemPrice'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ItemPrice'])) {
            if (!empty($map['ItemPrice'])) {
                $model->itemPrice = [];
                $n                = 0;
                foreach ($map['ItemPrice'] as $item) {
                    $model->itemPrice[$n++] = null !== $item ? itemPrice::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

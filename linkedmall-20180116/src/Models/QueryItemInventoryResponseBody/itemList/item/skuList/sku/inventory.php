<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemInventoryResponseBody\itemList\item\skuList\sku;

use AlibabaCloud\Tea\Model;

class inventory extends Model
{
    /**
     * @var int
     */
    public $quantity;
    protected $_name = [
        'quantity' => 'Quantity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inventory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        return $model;
    }
}

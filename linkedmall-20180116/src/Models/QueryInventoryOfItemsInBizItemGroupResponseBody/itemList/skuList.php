<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryInventoryOfItemsInBizItemGroupResponseBody\itemList;

use AlibabaCloud\Tea\Model;

class skuList extends Model
{
    /**
     * @var int
     */
    public $skuId;

    /**
     * @var int
     */
    public $quantity;
    protected $_name = [
        'skuId'    => 'SkuId',
        'quantity' => 'Quantity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skuList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryInventoryOfItemsInBizItemGroupResponseBody\itemList;

use AlibabaCloud\Tea\Model;

class skuList extends Model
{
    /**
     * @example 4100
     *
     * @var int
     */
    public $quantity;

    /**
     * @example 467******9928
     *
     * @var int
     */
    public $skuId;
    protected $_name = [
        'quantity' => 'Quantity',
        'skuId'    => 'SkuId',
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
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
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
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemInventoryResponseBody\itemList\item\skuList;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemInventoryResponseBody\itemList\item\skuList\sku\inventory;
use AlibabaCloud\Tea\Model;

class sku extends Model
{
    /**
     * @var inventory
     */
    public $inventory;

    /**
     * @description skuId
     *
     * @example 4901251235576
     *
     * @var int
     */
    public $skuId;
    protected $_name = [
        'inventory' => 'Inventory',
        'skuId'     => 'SkuId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inventory) {
            $res['Inventory'] = null !== $this->inventory ? $this->inventory->toMap() : null;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sku
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Inventory'])) {
            $model->inventory = inventory::fromMap($map['Inventory']);
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }

        return $model;
    }
}

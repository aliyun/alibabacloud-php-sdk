<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderRequest;

use AlibabaCloud\Tea\Model;

class itemList extends Model
{
    /**
     * @example 620033847326
     *
     * @var int
     */
    public $itemId;

    /**
     * @example 10016572-654408058233
     *
     * @var string
     */
    public $lmItemId;

    /**
     * @example 1
     *
     * @var int
     */
    public $quantity;

    /**
     * @example 4415814743135
     *
     * @var int
     */
    public $skuId;
    protected $_name = [
        'itemId'   => 'ItemId',
        'lmItemId' => 'LmItemId',
        'quantity' => 'Quantity',
        'skuId'    => 'SkuId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
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
     * @return itemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }

        return $model;
    }
}

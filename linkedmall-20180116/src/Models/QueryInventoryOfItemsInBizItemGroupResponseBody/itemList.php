<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryInventoryOfItemsInBizItemGroupResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryInventoryOfItemsInBizItemGroupResponseBody\itemList\skuList;
use AlibabaCloud\Tea\Model;

class itemList extends Model
{
    /**
     * @example ******058233
     *
     * @var int
     */
    public $itemId;

    /**
     * @example 10016572-******058233
     *
     * @var string
     */
    public $lmItemId;

    /**
     * @example 10000
     *
     * @var int
     */
    public $quantity;

    /**
     * @var skuList[]
     */
    public $skuList;

    /**
     * @example 5000
     *
     * @var int
     */
    public $totalQuantity;

    /**
     * @example 900
     *
     * @var int
     */
    public $totalSoldQuantity;
    protected $_name = [
        'itemId'            => 'ItemId',
        'lmItemId'          => 'LmItemId',
        'quantity'          => 'Quantity',
        'skuList'           => 'SkuList',
        'totalQuantity'     => 'TotalQuantity',
        'totalSoldQuantity' => 'TotalSoldQuantity',
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
        if (null !== $this->skuList) {
            $res['SkuList'] = [];
            if (null !== $this->skuList && \is_array($this->skuList)) {
                $n = 0;
                foreach ($this->skuList as $item) {
                    $res['SkuList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalQuantity) {
            $res['TotalQuantity'] = $this->totalQuantity;
        }
        if (null !== $this->totalSoldQuantity) {
            $res['TotalSoldQuantity'] = $this->totalSoldQuantity;
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
        if (isset($map['SkuList'])) {
            if (!empty($map['SkuList'])) {
                $model->skuList = [];
                $n              = 0;
                foreach ($map['SkuList'] as $item) {
                    $model->skuList[$n++] = null !== $item ? skuList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalQuantity'])) {
            $model->totalQuantity = $map['TotalQuantity'];
        }
        if (isset($map['TotalSoldQuantity'])) {
            $model->totalSoldQuantity = $map['TotalSoldQuantity'];
        }

        return $model;
    }
}

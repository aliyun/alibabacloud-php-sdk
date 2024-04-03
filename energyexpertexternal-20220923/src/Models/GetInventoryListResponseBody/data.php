<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetInventoryListResponseBody;

use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetInventoryListResponseBody\data\items;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Inventory detail.
     *
     * @var items[]
     */
    public $items;

    /**
     * @description Unit of product.
     *
     * @example kg
     *
     * @var string
     */
    public $productUnit;

    /**
     * @description Emission Unit: The default value is kgCO₂ /productUnit. productUnit is the unit selected for the product. The unit value is changed to tCO₂ e/productUnit or gCO₂ e/productUnit based on the emission quantity. For more information, see the quantity column.
     *
     * @example kgCO₂e/kg
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'items'       => 'items',
        'productUnit' => 'productUnit',
        'unit'        => 'unit',
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
        if (null !== $this->productUnit) {
            $res['productUnit'] = $this->productUnit;
        }
        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['productUnit'])) {
            $model->productUnit = $map['productUnit'];
        }
        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        return $model;
    }
}

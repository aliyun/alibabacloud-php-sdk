<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpBenchmarkSummaryResponseBody;

use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpBenchmarkSummaryResponseBody\data\items;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Carbon Reduction Contribution Top4 Details.
     *
     * @var items[]
     */
    public $items;

    /**
     * @description Emission amount is presented with four decimal places. Normally, modeling doesn\\"t result in negative values, but users can represent carbon reductions as negatives. The amount, paired with the unit, defines the emissions. Both are dynamically adjusted. If emissions exceed `1000 kgCO₂e/productUnit`, they convert to `tCO₂e/productUnit`. If they fall below `1 kgCO₂e/productUnit`, they convert to `gCO₂e/productUnit`. Otherwise, they stay in `kgCO₂e/productUnit`.
     *
     * @example 1000.0000
     *
     * @var int
     */
    public $quantity;

    /**
     * @description Unit of emissions. The default value is `kgCO₂e/productUnit.` `productUnit` is the unit selected for the product. The unit value is changed to `tCO₂e/productUnit` or `gCO₂e/productUnit`. For more information, see the remarks in the quantity column.
     *
     * @example kgCO₂e/t
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'items'    => 'items',
        'quantity' => 'quantity',
        'unit'     => 'unit',
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
        if (null !== $this->quantity) {
            $res['quantity'] = $this->quantity;
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
        if (isset($map['quantity'])) {
            $model->quantity = $map['quantity'];
        }
        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpBenchmarkSummaryResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description Name of carbon reduction details.
     *
     * @example Energy-Replacement
     *
     * @var string
     */
    public $name;

    /**
     * @description Percentage of emissions. The value is of the string type. Two decimal places are reserved for numbers. For example, "99.01" indicates the 99.01% of this type of emissions to the total emissions. Note that the returned string itself does not contain a percent sign.
     *
     * @example 99.01
     *
     * @var string
     */
    public $percent;

    /**
     * @description Emission amount is presented with four decimal places. Normally, modeling doesn\\"t result in negative values, but users can represent carbon reductions as negatives. The amount, paired with the unit, defines the emissions. Both are dynamically adjusted. If emissions exceed `1000 kgCO₂e/productUnit`, they convert to `tCO₂e/productUnit`. If they fall below `1 kgCO₂e/productUnit`, they convert to `gCO₂e/productUnit`. Otherwise, they stay in `kgCO₂e/productUnit`.
     *
     * @example 9.9763
     *
     * @var int
     */
    public $quantity;

    /**
     * @description Unit of emissions. The default value is `kgCO₂e/productUnit.` `productUnit` is the unit selected for the product. The unit value is changed to `tCO₂e/productUnit` or `gCO₂e/productUnit`. For more information, see the remarks in the quantity column.
     *
     * @example kgCO₂e/kg
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'name'     => 'name',
        'percent'  => 'percent',
        'quantity' => 'quantity',
        'unit'     => 'unit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->percent) {
            $res['percent'] = $this->percent;
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
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['percent'])) {
            $model->percent = $map['percent'];
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

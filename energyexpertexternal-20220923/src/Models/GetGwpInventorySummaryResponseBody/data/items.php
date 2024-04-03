<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpInventorySummaryResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description Inventory resource type name.
     *
     * @example Energy
     *
     * @var string
     */
    public $name;

    /**
     * @description Percentage.
     *
     * @example 99.01
     *
     * @var string
     */
    public $percent;

    /**
     * @description Quantity.
     *
     * @example 9.9763
     *
     * @var float
     */
    public $quantity;

    /**
     * @description The unit.
     *
     * @example kgCO₂e/Piece(s)
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

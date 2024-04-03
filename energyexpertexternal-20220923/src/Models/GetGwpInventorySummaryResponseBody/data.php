<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpInventorySummaryResponseBody;

use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpInventorySummaryResponseBody\data\items;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Top 4 types of carbon footprint contribution.
     *
     * @var items[]
     */
    public $items;

    /**
     * @description The emission quantity.
     *
     * @example 1.0100
     *
     * @var float
     */
    public $quantity;

    /**
     * @description The time when the result was generated, in the millisecond timestamp format.
     *
     * @example 1709108026000
     *
     * @var int
     */
    public $resultGenerateTime;

    /**
     * @description Emission Unit.
     *
     * @example tCO₂e/Piece(s)
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'items'              => 'items',
        'quantity'           => 'quantity',
        'resultGenerateTime' => 'resultGenerateTime',
        'unit'               => 'unit',
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
        if (null !== $this->resultGenerateTime) {
            $res['resultGenerateTime'] = $this->resultGenerateTime;
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
        if (isset($map['resultGenerateTime'])) {
            $model->resultGenerateTime = $map['resultGenerateTime'];
        }
        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        return $model;
    }
}

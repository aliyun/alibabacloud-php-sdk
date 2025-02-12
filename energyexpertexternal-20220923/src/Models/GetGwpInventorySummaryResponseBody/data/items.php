<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpInventorySummaryResponseBody\data;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $percent;
    /**
     * @var float
     */
    public $quantity;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

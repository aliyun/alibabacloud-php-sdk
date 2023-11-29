<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleFlightItemListBestPriceItemShoppingItemMapValue\cabinQuantityList;

use AlibabaCloud\Tea\Model;

class cabin extends Model
{
    /**
     * @example Y
     *
     * @var string
     */
    public $cabin;

    /**
     * @example Y
     *
     * @var string
     */
    public $cabinClass;

    /**
     * @var string
     */
    public $cabinClassName;

    /**
     * @example A
     *
     * @var string
     */
    public $quantity;
    protected $_name = [
        'cabin'          => 'cabin',
        'cabinClass'     => 'cabin_class',
        'cabinClassName' => 'cabin_class_name',
        'quantity'       => 'quantity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cabin) {
            $res['cabin'] = $this->cabin;
        }
        if (null !== $this->cabinClass) {
            $res['cabin_class'] = $this->cabinClass;
        }
        if (null !== $this->cabinClassName) {
            $res['cabin_class_name'] = $this->cabinClassName;
        }
        if (null !== $this->quantity) {
            $res['quantity'] = $this->quantity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cabin
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cabin'])) {
            $model->cabin = $map['cabin'];
        }
        if (isset($map['cabin_class'])) {
            $model->cabinClass = $map['cabin_class'];
        }
        if (isset($map['cabin_class_name'])) {
            $model->cabinClassName = $map['cabin_class_name'];
        }
        if (isset($map['quantity'])) {
            $model->quantity = $map['quantity'];
        }

        return $model;
    }
}

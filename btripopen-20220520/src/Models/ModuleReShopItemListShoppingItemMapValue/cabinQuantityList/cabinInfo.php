<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleReShopItemListShoppingItemMapValue\cabinQuantityList;

use AlibabaCloud\Dara\Model;

class cabinInfo extends Model
{
    /**
     * @var string
     */
    public $cabin;

    /**
     * @var string
     */
    public $cabinClass;

    /**
     * @var string
     */
    public $cabinClassName;

    /**
     * @var string
     */
    public $quantity;

    /**
     * @var string
     */
    public $cabinClassMemo;

    /**
     * @var string
     */
    public $specification;
    protected $_name = [
        'cabin' => 'cabin',
        'cabinClass' => 'cabin_class',
        'cabinClassName' => 'cabin_class_name',
        'quantity' => 'quantity',
        'cabinClassMemo' => 'cabin_class_memo',
        'specification' => 'specification',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->cabinClassMemo) {
            $res['cabin_class_memo'] = $this->cabinClassMemo;
        }

        if (null !== $this->specification) {
            $res['specification'] = $this->specification;
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

        if (isset($map['cabin_class_memo'])) {
            $model->cabinClassMemo = $map['cabin_class_memo'];
        }

        if (isset($map['specification'])) {
            $model->specification = $map['specification'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class ModuleItemListShoppingItemMapValueCabinQuantityValue extends Model
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
    public $cabinClassMemo;

    /**
     * @var string
     */
    public $specification;

    /**
     * @var string
     */
    public $quantity;

    /**
     * @var string[]
     */
    public $linkCabins;

    /**
     * @var bool
     */
    public $reshopChangeCabin;

    /**
     * @var int
     */
    public $childCabinType;

    /**
     * @var string
     */
    public $infantBasicCabin;

    /**
     * @var int
     */
    public $innerCabinClass;
    protected $_name = [
        'cabin' => 'cabin',
        'cabinClass' => 'cabin_class',
        'cabinClassName' => 'cabin_class_name',
        'cabinClassMemo' => 'cabin_class_memo',
        'specification' => 'specification',
        'quantity' => 'quantity',
        'linkCabins' => 'link_cabins',
        'reshopChangeCabin' => 'reshop_change_cabin',
        'childCabinType' => 'child_cabin_type',
        'infantBasicCabin' => 'infant_basic_cabin',
        'innerCabinClass' => 'inner_cabin_class',
    ];

    public function validate()
    {
        if (\is_array($this->linkCabins)) {
            Model::validateArray($this->linkCabins);
        }
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

        if (null !== $this->cabinClassMemo) {
            $res['cabin_class_memo'] = $this->cabinClassMemo;
        }

        if (null !== $this->specification) {
            $res['specification'] = $this->specification;
        }

        if (null !== $this->quantity) {
            $res['quantity'] = $this->quantity;
        }

        if (null !== $this->linkCabins) {
            if (\is_array($this->linkCabins)) {
                $res['link_cabins'] = [];
                $n1 = 0;
                foreach ($this->linkCabins as $item1) {
                    $res['link_cabins'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->reshopChangeCabin) {
            $res['reshop_change_cabin'] = $this->reshopChangeCabin;
        }

        if (null !== $this->childCabinType) {
            $res['child_cabin_type'] = $this->childCabinType;
        }

        if (null !== $this->infantBasicCabin) {
            $res['infant_basic_cabin'] = $this->infantBasicCabin;
        }

        if (null !== $this->innerCabinClass) {
            $res['inner_cabin_class'] = $this->innerCabinClass;
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

        if (isset($map['cabin_class_memo'])) {
            $model->cabinClassMemo = $map['cabin_class_memo'];
        }

        if (isset($map['specification'])) {
            $model->specification = $map['specification'];
        }

        if (isset($map['quantity'])) {
            $model->quantity = $map['quantity'];
        }

        if (isset($map['link_cabins'])) {
            if (!empty($map['link_cabins'])) {
                $model->linkCabins = [];
                $n1 = 0;
                foreach ($map['link_cabins'] as $item1) {
                    $model->linkCabins[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['reshop_change_cabin'])) {
            $model->reshopChangeCabin = $map['reshop_change_cabin'];
        }

        if (isset($map['child_cabin_type'])) {
            $model->childCabinType = $map['child_cabin_type'];
        }

        if (isset($map['infant_basic_cabin'])) {
            $model->infantBasicCabin = $map['infant_basic_cabin'];
        }

        if (isset($map['inner_cabin_class'])) {
            $model->innerCabinClass = $map['inner_cabin_class'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class ModuleItemListShoppingItemMapValueCabinQuantityValue extends Model
{
    /**
     * @example R
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
     * @var string
     */
    public $cabinClassMemo;

    /**
     * @var string
     */
    public $specification;

    /**
     * @example A
     *
     * @var string
     */
    public $quantity;

    /**
     * @var string[]
     */
    public $linkCabins;

    /**
     * @example false
     *
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
     * @example 2
     *
     * @var int
     */
    public $innerCabinClass;
    protected $_name = [
        'cabin'             => 'cabin',
        'cabinClass'        => 'cabin_class',
        'cabinClassName'    => 'cabin_class_name',
        'cabinClassMemo'    => 'cabin_class_memo',
        'specification'     => 'specification',
        'quantity'          => 'quantity',
        'linkCabins'        => 'link_cabins',
        'reshopChangeCabin' => 'reshop_change_cabin',
        'childCabinType'    => 'child_cabin_type',
        'infantBasicCabin'  => 'infant_basic_cabin',
        'innerCabinClass'   => 'inner_cabin_class',
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
            $res['link_cabins'] = $this->linkCabins;
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

    /**
     * @param array $map
     *
     * @return ModuleItemListShoppingItemMapValueCabinQuantityValue
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
                $model->linkCabins = $map['link_cabins'];
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

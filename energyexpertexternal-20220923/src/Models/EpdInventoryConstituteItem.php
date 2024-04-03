<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Tea\Model;

class EpdInventoryConstituteItem extends Model
{
    /**
     * @var float
     */
    public $carbonEmission;

    /**
     * @var string
     */
    public $factor;

    /**
     * @var string
     */
    public $factorDataset;

    /**
     * @var string
     */
    public $factorId;

    /**
     * @var int
     */
    public $factorType;

    /**
     * @var string
     */
    public $factorUnit;

    /**
     * @var int
     */
    public $inventoryId;

    /**
     * @var string
     */
    public $inventoryUnit;

    /**
     * @var float
     */
    public $inventoryValue;

    /**
     * @var float
     */
    public $inventoryValuePerProduct;

    /**
     * @var string
     */
    public $inventoryValuePerProductUnit;

    /**
     * @var \AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\EpdInventoryConstituteItem[]
     */
    public $items;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $num;

    /**
     * @var float
     */
    public $percent;

    /**
     * @var float
     */
    public $quantity;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var int
     */
    public $state;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'carbonEmission'               => 'carbonEmission',
        'factor'                       => 'factor',
        'factorDataset'                => 'factorDataset',
        'factorId'                     => 'factorId',
        'factorType'                   => 'factorType',
        'factorUnit'                   => 'factorUnit',
        'inventoryId'                  => 'inventoryId',
        'inventoryUnit'                => 'inventoryUnit',
        'inventoryValue'               => 'inventoryValue',
        'inventoryValuePerProduct'     => 'inventoryValuePerProduct',
        'inventoryValuePerProductUnit' => 'inventoryValuePerProductUnit',
        'items'                        => 'items',
        'name'                         => 'name',
        'num'                          => 'num',
        'percent'                      => 'percent',
        'quantity'                     => 'quantity',
        'resourceType'                 => 'resourceType',
        'state'                        => 'state',
        'unit'                         => 'unit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->carbonEmission) {
            $res['carbonEmission'] = $this->carbonEmission;
        }
        if (null !== $this->factor) {
            $res['factor'] = $this->factor;
        }
        if (null !== $this->factorDataset) {
            $res['factorDataset'] = $this->factorDataset;
        }
        if (null !== $this->factorId) {
            $res['factorId'] = $this->factorId;
        }
        if (null !== $this->factorType) {
            $res['factorType'] = $this->factorType;
        }
        if (null !== $this->factorUnit) {
            $res['factorUnit'] = $this->factorUnit;
        }
        if (null !== $this->inventoryId) {
            $res['inventoryId'] = $this->inventoryId;
        }
        if (null !== $this->inventoryUnit) {
            $res['inventoryUnit'] = $this->inventoryUnit;
        }
        if (null !== $this->inventoryValue) {
            $res['inventoryValue'] = $this->inventoryValue;
        }
        if (null !== $this->inventoryValuePerProduct) {
            $res['inventoryValuePerProduct'] = $this->inventoryValuePerProduct;
        }
        if (null !== $this->inventoryValuePerProductUnit) {
            $res['inventoryValuePerProductUnit'] = $this->inventoryValuePerProductUnit;
        }
        if (null !== $this->items) {
            $res['items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->num) {
            $res['num'] = $this->num;
        }
        if (null !== $this->percent) {
            $res['percent'] = $this->percent;
        }
        if (null !== $this->quantity) {
            $res['quantity'] = $this->quantity;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EpdInventoryConstituteItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['carbonEmission'])) {
            $model->carbonEmission = $map['carbonEmission'];
        }
        if (isset($map['factor'])) {
            $model->factor = $map['factor'];
        }
        if (isset($map['factorDataset'])) {
            $model->factorDataset = $map['factorDataset'];
        }
        if (isset($map['factorId'])) {
            $model->factorId = $map['factorId'];
        }
        if (isset($map['factorType'])) {
            $model->factorType = $map['factorType'];
        }
        if (isset($map['factorUnit'])) {
            $model->factorUnit = $map['factorUnit'];
        }
        if (isset($map['inventoryId'])) {
            $model->inventoryId = $map['inventoryId'];
        }
        if (isset($map['inventoryUnit'])) {
            $model->inventoryUnit = $map['inventoryUnit'];
        }
        if (isset($map['inventoryValue'])) {
            $model->inventoryValue = $map['inventoryValue'];
        }
        if (isset($map['inventoryValuePerProduct'])) {
            $model->inventoryValuePerProduct = $map['inventoryValuePerProduct'];
        }
        if (isset($map['inventoryValuePerProductUnit'])) {
            $model->inventoryValuePerProductUnit = $map['inventoryValuePerProductUnit'];
        }
        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['items'] as $item) {
                    $model->items[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['num'])) {
            $model->num = $map['num'];
        }
        if (isset($map['percent'])) {
            $model->percent = $map['percent'];
        }
        if (isset($map['quantity'])) {
            $model->quantity = $map['quantity'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        return $model;
    }
}

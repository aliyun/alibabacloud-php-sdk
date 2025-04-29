<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleItemListSubItemsShoppingItemMapValue\searchPrice;

class ModuleItemListSubItemsShoppingItemMapValue extends Model
{
    /**
     * @var searchPrice
     */
    public $searchPrice;

    /**
     * @var string
     */
    public $id;

    /**
     * @var ModuleItemListSubItemsShoppingItemMapValueCabinQuantityValue[]
     */
    public $cabinQuantity;

    /**
     * @var ModuleItemListSubItemsShoppingItemMapValueSegmentPriceValue[]
     */
    public $segmentPrice;
    protected $_name = [
        'searchPrice' => 'search_price',
        'id' => 'id',
        'cabinQuantity' => 'cabin_quantity',
        'segmentPrice' => 'segment_price',
    ];

    public function validate()
    {
        if (null !== $this->searchPrice) {
            $this->searchPrice->validate();
        }
        if (\is_array($this->cabinQuantity)) {
            Model::validateArray($this->cabinQuantity);
        }
        if (\is_array($this->segmentPrice)) {
            Model::validateArray($this->segmentPrice);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->searchPrice) {
            $res['search_price'] = null !== $this->searchPrice ? $this->searchPrice->toArray($noStream) : $this->searchPrice;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->cabinQuantity) {
            if (\is_array($this->cabinQuantity)) {
                $res['cabin_quantity'] = [];
                foreach ($this->cabinQuantity as $key1 => $value1) {
                    $res['cabin_quantity'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->segmentPrice) {
            if (\is_array($this->segmentPrice)) {
                $res['segment_price'] = [];
                foreach ($this->segmentPrice as $key1 => $value1) {
                    $res['segment_price'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
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
        if (isset($map['search_price'])) {
            $model->searchPrice = searchPrice::fromMap($map['search_price']);
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['cabin_quantity'])) {
            if (!empty($map['cabin_quantity'])) {
                $model->cabinQuantity = [];
                foreach ($map['cabin_quantity'] as $key1 => $value1) {
                    $model->cabinQuantity[$key1] = ModuleItemListSubItemsShoppingItemMapValueCabinQuantityValue::fromMap($value1);
                }
            }
        }

        if (isset($map['segment_price'])) {
            if (!empty($map['segment_price'])) {
                $model->segmentPrice = [];
                foreach ($map['segment_price'] as $key1 => $value1) {
                    $model->segmentPrice[$key1] = ModuleItemListSubItemsShoppingItemMapValueSegmentPriceValue::fromMap($value1);
                }
            }
        }

        return $model;
    }
}

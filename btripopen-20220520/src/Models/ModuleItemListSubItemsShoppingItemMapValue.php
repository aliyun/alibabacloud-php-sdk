<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleItemListSubItemsShoppingItemMapValue\cabinQuantityList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleItemListSubItemsShoppingItemMapValue\searchPrice;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleItemListSubItemsShoppingItemMapValue\segmentPriceList;

class ModuleItemListSubItemsShoppingItemMapValue extends Model
{
    /**
     * @var cabinQuantityList[]
     */
    public $cabinQuantityList;

    /**
     * @var searchPrice
     */
    public $searchPrice;

    /**
     * @var segmentPriceList[]
     */
    public $segmentPriceList;

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
        'cabinQuantityList' => 'cabin_quantity_list',
        'searchPrice' => 'search_price',
        'segmentPriceList' => 'segment_price_list',
        'id' => 'id',
        'cabinQuantity' => 'cabin_quantity',
        'segmentPrice' => 'segment_price',
    ];

    public function validate()
    {
        if (\is_array($this->cabinQuantityList)) {
            Model::validateArray($this->cabinQuantityList);
        }
        if (null !== $this->searchPrice) {
            $this->searchPrice->validate();
        }
        if (\is_array($this->segmentPriceList)) {
            Model::validateArray($this->segmentPriceList);
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
        if (null !== $this->cabinQuantityList) {
            if (\is_array($this->cabinQuantityList)) {
                $res['cabin_quantity_list'] = [];
                $n1 = 0;
                foreach ($this->cabinQuantityList as $item1) {
                    $res['cabin_quantity_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->searchPrice) {
            $res['search_price'] = null !== $this->searchPrice ? $this->searchPrice->toArray($noStream) : $this->searchPrice;
        }

        if (null !== $this->segmentPriceList) {
            if (\is_array($this->segmentPriceList)) {
                $res['segment_price_list'] = [];
                $n1 = 0;
                foreach ($this->segmentPriceList as $item1) {
                    $res['segment_price_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['cabin_quantity_list'])) {
            if (!empty($map['cabin_quantity_list'])) {
                $model->cabinQuantityList = [];
                $n1 = 0;
                foreach ($map['cabin_quantity_list'] as $item1) {
                    $model->cabinQuantityList[$n1] = cabinQuantityList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['search_price'])) {
            $model->searchPrice = searchPrice::fromMap($map['search_price']);
        }

        if (isset($map['segment_price_list'])) {
            if (!empty($map['segment_price_list'])) {
                $model->segmentPriceList = [];
                $n1 = 0;
                foreach ($map['segment_price_list'] as $item1) {
                    $model->segmentPriceList[$n1] = segmentPriceList::fromMap($item1);
                    ++$n1;
                }
            }
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleItemListShoppingItemMapValue\cabinQuantityList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleItemListShoppingItemMapValue\searchPrice;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleItemListShoppingItemMapValue\segmentPriceList;
use AlibabaCloud\Tea\Model;

class ModuleItemListShoppingItemMapValue extends Model
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
     * @description id
     *
     * @example ADT07df0bd9-f803-4a50-8449-f4bd675d9939
     *
     * @var string
     */
    public $id;

    /**
     * @var ModuleItemListShoppingItemMapValueCabinQuantityValue[]
     */
    public $cabinQuantity;

    /**
     * @var ModuleItemListShoppingItemMapValueSegmentPriceValue[]
     */
    public $segmentPrice;
    protected $_name = [
        'cabinQuantityList' => 'cabin_quantity_list',
        'searchPrice'       => 'search_price',
        'segmentPriceList'  => 'segment_price_list',
        'id'                => 'id',
        'cabinQuantity'     => 'cabin_quantity',
        'segmentPrice'      => 'segment_price',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cabinQuantityList) {
            $res['cabin_quantity_list'] = [];
            if (null !== $this->cabinQuantityList && \is_array($this->cabinQuantityList)) {
                $n = 0;
                foreach ($this->cabinQuantityList as $item) {
                    $res['cabin_quantity_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->searchPrice) {
            $res['search_price'] = null !== $this->searchPrice ? $this->searchPrice->toMap() : null;
        }
        if (null !== $this->segmentPriceList) {
            $res['segment_price_list'] = [];
            if (null !== $this->segmentPriceList && \is_array($this->segmentPriceList)) {
                $n = 0;
                foreach ($this->segmentPriceList as $item) {
                    $res['segment_price_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->cabinQuantity) {
            $res['cabin_quantity'] = [];
            if (null !== $this->cabinQuantity && \is_array($this->cabinQuantity)) {
                foreach ($this->cabinQuantity as $key => $val) {
                    $res['cabin_quantity'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->segmentPrice) {
            $res['segment_price'] = [];
            if (null !== $this->segmentPrice && \is_array($this->segmentPrice)) {
                foreach ($this->segmentPrice as $key => $val) {
                    $res['segment_price'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModuleItemListShoppingItemMapValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cabin_quantity_list'])) {
            if (!empty($map['cabin_quantity_list'])) {
                $model->cabinQuantityList = [];
                $n                        = 0;
                foreach ($map['cabin_quantity_list'] as $item) {
                    $model->cabinQuantityList[$n++] = null !== $item ? cabinQuantityList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['search_price'])) {
            $model->searchPrice = searchPrice::fromMap($map['search_price']);
        }
        if (isset($map['segment_price_list'])) {
            if (!empty($map['segment_price_list'])) {
                $model->segmentPriceList = [];
                $n                       = 0;
                foreach ($map['segment_price_list'] as $item) {
                    $model->segmentPriceList[$n++] = null !== $item ? segmentPriceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['cabin_quantity'])) {
            $model->cabinQuantity = $map['cabin_quantity'];
        }
        if (isset($map['segment_price'])) {
            $model->segmentPrice = $map['segment_price'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleItemListSubItemsShoppingItemMapValue\searchPrice;
use AlibabaCloud\Tea\Model;

class ModuleItemListSubItemsShoppingItemMapValue extends Model
{
    /**
     * @var searchPrice
     */
    public $searchPrice;

    /**
     * @description id
     *
     * @example ADT07df0bd9-f803-4a50-8449-f4bd675d9939
     *
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
        'searchPrice'   => 'search_price',
        'id'            => 'id',
        'cabinQuantity' => 'cabin_quantity',
        'segmentPrice'  => 'segment_price',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->searchPrice) {
            $res['search_price'] = null !== $this->searchPrice ? $this->searchPrice->toMap() : null;
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
     * @return ModuleItemListSubItemsShoppingItemMapValue
     */
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
            $model->cabinQuantity = $map['cabin_quantity'];
        }
        if (isset($map['segment_price'])) {
            $model->segmentPrice = $map['segment_price'];
        }

        return $model;
    }
}

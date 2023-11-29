<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleGroupItemShoppingItemMapValue\cabinQuantityList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleGroupItemShoppingItemMapValue\searchPrice;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleGroupItemShoppingItemMapValue\segmentPriceList;
use AlibabaCloud\Tea\Model;

class ModuleGroupItemShoppingItemMapValue extends Model
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
    protected $_name = [
        'cabinQuantityList' => 'cabin_quantity_list',
        'searchPrice'       => 'search_price',
        'segmentPriceList'  => 'segment_price_list',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModuleGroupItemShoppingItemMapValue
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

        return $model;
    }
}

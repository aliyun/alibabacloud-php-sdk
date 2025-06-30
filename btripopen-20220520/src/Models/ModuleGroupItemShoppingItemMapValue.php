<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleGroupItemShoppingItemMapValue\cabinQuantityList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleGroupItemShoppingItemMapValue\searchPrice;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleGroupItemShoppingItemMapValue\segmentPriceList;

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
        'searchPrice' => 'search_price',
        'segmentPriceList' => 'segment_price_list',
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

        return $model;
    }
}

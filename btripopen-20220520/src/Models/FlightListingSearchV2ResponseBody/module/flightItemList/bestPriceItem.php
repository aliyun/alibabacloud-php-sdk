<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2ResponseBody\module\flightItemList;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2ResponseBody\module\flightItemList\bestPriceItem\subItems;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleFlightItemListBestPriceItemFlightRuleInfosValue;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleFlightItemListBestPriceItemShoppingItemMapValue;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleFlightItemListBestPriceItemSubItemPositionMapValue;
use AlibabaCloud\Tea\Model;

class bestPriceItem extends Model
{
    /**
     * @var ModuleFlightItemListBestPriceItemFlightRuleInfosValue[]
     */
    public $flightRuleInfos;

    /**
     * @example e50d380fc05942cc8ac57af8ae02f448_0
     *
     * @var string
     */
    public $itemId;

    /**
     * @var ModuleFlightItemListBestPriceItemShoppingItemMapValue[]
     */
    public $shoppingItemMap;

    /**
     * @var ModuleFlightItemListBestPriceItemSubItemPositionMapValue[][]
     */
    public $subItemPositionMap;

    /**
     * @var subItems[]
     */
    public $subItems;
    protected $_name = [
        'flightRuleInfos'    => 'flight_rule_infos',
        'itemId'             => 'item_id',
        'shoppingItemMap'    => 'shopping_item_map',
        'subItemPositionMap' => 'sub_item_position_map',
        'subItems'           => 'sub_items',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flightRuleInfos) {
            $res['flight_rule_infos'] = [];
            if (null !== $this->flightRuleInfos && \is_array($this->flightRuleInfos)) {
                foreach ($this->flightRuleInfos as $key => $val) {
                    $res['flight_rule_infos'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->itemId) {
            $res['item_id'] = $this->itemId;
        }
        if (null !== $this->shoppingItemMap) {
            $res['shopping_item_map'] = [];
            if (null !== $this->shoppingItemMap && \is_array($this->shoppingItemMap)) {
                foreach ($this->shoppingItemMap as $key => $val) {
                    $res['shopping_item_map'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->subItemPositionMap) {
            $res['sub_item_position_map'] = $this->subItemPositionMap;
        }
        if (null !== $this->subItems) {
            $res['sub_items'] = [];
            if (null !== $this->subItems && \is_array($this->subItems)) {
                $n = 0;
                foreach ($this->subItems as $item) {
                    $res['sub_items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bestPriceItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['flight_rule_infos'])) {
            $model->flightRuleInfos = $map['flight_rule_infos'];
        }
        if (isset($map['item_id'])) {
            $model->itemId = $map['item_id'];
        }
        if (isset($map['shopping_item_map'])) {
            $model->shoppingItemMap = $map['shopping_item_map'];
        }
        if (isset($map['sub_item_position_map'])) {
            $model->subItemPositionMap = $map['sub_item_position_map'];
        }
        if (isset($map['sub_items'])) {
            if (!empty($map['sub_items'])) {
                $model->subItems = [];
                $n               = 0;
                foreach ($map['sub_items'] as $item) {
                    $model->subItems[$n++] = null !== $item ? subItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

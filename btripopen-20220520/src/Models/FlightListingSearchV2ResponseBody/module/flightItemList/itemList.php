<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2ResponseBody\module\flightItemList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2ResponseBody\module\flightItemList\itemList\subItems;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleFlightItemListItemListFlightRuleInfosValue;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleFlightItemListItemListShoppingItemMapValue;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleFlightItemListItemListSubItemPositionMapValue;

class itemList extends Model
{
    /**
     * @var ModuleFlightItemListItemListFlightRuleInfosValue[]
     */
    public $flightRuleInfos;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var ModuleFlightItemListItemListShoppingItemMapValue[]
     */
    public $shoppingItemMap;

    /**
     * @var ModuleFlightItemListItemListSubItemPositionMapValue[][]
     */
    public $subItemPositionMap;

    /**
     * @var subItems[]
     */
    public $subItems;
    protected $_name = [
        'flightRuleInfos' => 'flight_rule_infos',
        'itemId' => 'item_id',
        'shoppingItemMap' => 'shopping_item_map',
        'subItemPositionMap' => 'sub_item_position_map',
        'subItems' => 'sub_items',
    ];

    public function validate()
    {
        if (\is_array($this->flightRuleInfos)) {
            Model::validateArray($this->flightRuleInfos);
        }
        if (\is_array($this->shoppingItemMap)) {
            Model::validateArray($this->shoppingItemMap);
        }
        if (\is_array($this->subItemPositionMap)) {
            Model::validateArray($this->subItemPositionMap);
        }
        if (\is_array($this->subItems)) {
            Model::validateArray($this->subItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flightRuleInfos) {
            if (\is_array($this->flightRuleInfos)) {
                $res['flight_rule_infos'] = [];
                foreach ($this->flightRuleInfos as $key1 => $value1) {
                    $res['flight_rule_infos'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->itemId) {
            $res['item_id'] = $this->itemId;
        }

        if (null !== $this->shoppingItemMap) {
            if (\is_array($this->shoppingItemMap)) {
                $res['shopping_item_map'] = [];
                foreach ($this->shoppingItemMap as $key1 => $value1) {
                    $res['shopping_item_map'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->subItemPositionMap) {
            if (\is_array($this->subItemPositionMap)) {
                $res['sub_item_position_map'] = [];
                foreach ($this->subItemPositionMap as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['sub_item_position_map'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['sub_item_position_map'][$key1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (null !== $this->subItems) {
            if (\is_array($this->subItems)) {
                $res['sub_items'] = [];
                $n1 = 0;
                foreach ($this->subItems as $item1) {
                    $res['sub_items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['flight_rule_infos'])) {
            if (!empty($map['flight_rule_infos'])) {
                $model->flightRuleInfos = [];
                foreach ($map['flight_rule_infos'] as $key1 => $value1) {
                    $model->flightRuleInfos[$key1] = ModuleFlightItemListItemListFlightRuleInfosValue::fromMap($value1);
                }
            }
        }

        if (isset($map['item_id'])) {
            $model->itemId = $map['item_id'];
        }

        if (isset($map['shopping_item_map'])) {
            if (!empty($map['shopping_item_map'])) {
                $model->shoppingItemMap = [];
                foreach ($map['shopping_item_map'] as $key1 => $value1) {
                    $model->shoppingItemMap[$key1] = ModuleFlightItemListItemListShoppingItemMapValue::fromMap($value1);
                }
            }
        }

        if (isset($map['sub_item_position_map'])) {
            if (!empty($map['sub_item_position_map'])) {
                $model->subItemPositionMap = [];
                foreach ($map['sub_item_position_map'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->subItemPositionMap[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->subItemPositionMap[$key1][$n2] = ModuleFlightItemListItemListSubItemPositionMapValue::fromMap($item2);
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (isset($map['sub_items'])) {
            if (!empty($map['sub_items'])) {
                $model->subItems = [];
                $n1 = 0;
                foreach ($map['sub_items'] as $item1) {
                    $model->subItems[$n1] = subItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

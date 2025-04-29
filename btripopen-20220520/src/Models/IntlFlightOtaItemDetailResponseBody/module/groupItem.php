<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailResponseBody\module\groupItem\flightRuleInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailResponseBody\module\groupItem\subItems;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleGroupItemShoppingItemMapValue;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleGroupItemSubItemPositionMapValue;

class groupItem extends Model
{
    /**
     * @var string[]
     */
    public $agreementPriceCodes;

    /**
     * @var flightRuleInfoList[]
     */
    public $flightRuleInfoList;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemType;

    /**
     * @var ModuleGroupItemShoppingItemMapValue[]
     */
    public $shoppingItemMap;

    /**
     * @var ModuleGroupItemSubItemPositionMapValue[][]
     */
    public $subItemPositionMap;

    /**
     * @var subItems[]
     */
    public $subItems;
    protected $_name = [
        'agreementPriceCodes' => 'agreement_price_codes',
        'flightRuleInfoList' => 'flight_rule_info_list',
        'itemId' => 'item_id',
        'itemType' => 'item_type',
        'shoppingItemMap' => 'shopping_item_map',
        'subItemPositionMap' => 'sub_item_position_map',
        'subItems' => 'sub_items',
    ];

    public function validate()
    {
        if (\is_array($this->agreementPriceCodes)) {
            Model::validateArray($this->agreementPriceCodes);
        }
        if (\is_array($this->flightRuleInfoList)) {
            Model::validateArray($this->flightRuleInfoList);
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
        if (null !== $this->agreementPriceCodes) {
            if (\is_array($this->agreementPriceCodes)) {
                $res['agreement_price_codes'] = [];
                $n1 = 0;
                foreach ($this->agreementPriceCodes as $item1) {
                    $res['agreement_price_codes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->flightRuleInfoList) {
            if (\is_array($this->flightRuleInfoList)) {
                $res['flight_rule_info_list'] = [];
                $n1 = 0;
                foreach ($this->flightRuleInfoList as $item1) {
                    $res['flight_rule_info_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->itemId) {
            $res['item_id'] = $this->itemId;
        }

        if (null !== $this->itemType) {
            $res['item_type'] = $this->itemType;
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
                            $res['sub_item_position_map'][$key1][$n2++] = null !== $item2 ? $item2->toArray($noStream) : $item2;
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
                    $res['sub_items'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['agreement_price_codes'])) {
            if (!empty($map['agreement_price_codes'])) {
                $model->agreementPriceCodes = [];
                $n1 = 0;
                foreach ($map['agreement_price_codes'] as $item1) {
                    $model->agreementPriceCodes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['flight_rule_info_list'])) {
            if (!empty($map['flight_rule_info_list'])) {
                $model->flightRuleInfoList = [];
                $n1 = 0;
                foreach ($map['flight_rule_info_list'] as $item1) {
                    $model->flightRuleInfoList[$n1++] = flightRuleInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['item_id'])) {
            $model->itemId = $map['item_id'];
        }

        if (isset($map['item_type'])) {
            $model->itemType = $map['item_type'];
        }

        if (isset($map['shopping_item_map'])) {
            if (!empty($map['shopping_item_map'])) {
                $model->shoppingItemMap = [];
                foreach ($map['shopping_item_map'] as $key1 => $value1) {
                    $model->shoppingItemMap[$key1] = ModuleGroupItemShoppingItemMapValue::fromMap($value1);
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
                            $model->subItemPositionMap[$key1][$n2++] = ModuleGroupItemSubItemPositionMapValue::fromMap($item2);
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
                    $model->subItems[$n1++] = subItems::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

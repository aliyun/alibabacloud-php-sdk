<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchResponseBody\module\itemList\flightRuleInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchResponseBody\module\itemList\subItems;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleItemListShoppingItemMapValue;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleItemListSubItemPositionMapValue;
use AlibabaCloud\Tea\Model;

class itemList extends Model
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
     * @example e50d380fc05942cc8ac57af8ae02f448_0
     *
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemType;

    /**
     * @var ModuleItemListShoppingItemMapValue[]
     */
    public $shoppingItemMap;

    /**
     * @var ModuleItemListSubItemPositionMapValue[][]
     */
    public $subItemPositionMap;

    /**
     * @var subItems[]
     */
    public $subItems;
    protected $_name = [
        'agreementPriceCodes' => 'agreement_price_codes',
        'flightRuleInfoList'  => 'flight_rule_info_list',
        'itemId'              => 'item_id',
        'itemType'            => 'item_type',
        'shoppingItemMap'     => 'shopping_item_map',
        'subItemPositionMap'  => 'sub_item_position_map',
        'subItems'            => 'sub_items',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agreementPriceCodes) {
            $res['agreement_price_codes'] = $this->agreementPriceCodes;
        }
        if (null !== $this->flightRuleInfoList) {
            $res['flight_rule_info_list'] = [];
            if (null !== $this->flightRuleInfoList && \is_array($this->flightRuleInfoList)) {
                $n = 0;
                foreach ($this->flightRuleInfoList as $item) {
                    $res['flight_rule_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return itemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['agreement_price_codes'])) {
            if (!empty($map['agreement_price_codes'])) {
                $model->agreementPriceCodes = $map['agreement_price_codes'];
            }
        }
        if (isset($map['flight_rule_info_list'])) {
            if (!empty($map['flight_rule_info_list'])) {
                $model->flightRuleInfoList = [];
                $n                         = 0;
                foreach ($map['flight_rule_info_list'] as $item) {
                    $model->flightRuleInfoList[$n++] = null !== $item ? flightRuleInfoList::fromMap($item) : $item;
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

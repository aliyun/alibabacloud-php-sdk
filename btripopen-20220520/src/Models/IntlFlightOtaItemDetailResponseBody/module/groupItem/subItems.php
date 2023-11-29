<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailResponseBody\module\groupItem;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailResponseBody\module\groupItem\subItems\baggageRule;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailResponseBody\module\groupItem\subItems\refundChangeRule;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleGroupItemSubItemsShoppingItemMapValue;
use AlibabaCloud\Tea\Model;

class subItems extends Model
{
    /**
     * @var baggageRule
     */
    public $baggageRule;

    /**
     * @var refundChangeRule
     */
    public $refundChangeRule;

    /**
     * @var string[]
     */
    public $segmentKeys;

    /**
     * @var ModuleGroupItemSubItemsShoppingItemMapValue[]
     */
    public $shoppingItemMap;

    /**
     * @example 23412341234124
     *
     * @var string
     */
    public $uniqKey;
    protected $_name = [
        'baggageRule'      => 'baggage_rule',
        'refundChangeRule' => 'refund_change_rule',
        'segmentKeys'      => 'segment_keys',
        'shoppingItemMap'  => 'shopping_item_map',
        'uniqKey'          => 'uniq_key',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baggageRule) {
            $res['baggage_rule'] = null !== $this->baggageRule ? $this->baggageRule->toMap() : null;
        }
        if (null !== $this->refundChangeRule) {
            $res['refund_change_rule'] = null !== $this->refundChangeRule ? $this->refundChangeRule->toMap() : null;
        }
        if (null !== $this->segmentKeys) {
            $res['segment_keys'] = $this->segmentKeys;
        }
        if (null !== $this->shoppingItemMap) {
            $res['shopping_item_map'] = [];
            if (null !== $this->shoppingItemMap && \is_array($this->shoppingItemMap)) {
                foreach ($this->shoppingItemMap as $key => $val) {
                    $res['shopping_item_map'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->uniqKey) {
            $res['uniq_key'] = $this->uniqKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['baggage_rule'])) {
            $model->baggageRule = baggageRule::fromMap($map['baggage_rule']);
        }
        if (isset($map['refund_change_rule'])) {
            $model->refundChangeRule = refundChangeRule::fromMap($map['refund_change_rule']);
        }
        if (isset($map['segment_keys'])) {
            if (!empty($map['segment_keys'])) {
                $model->segmentKeys = $map['segment_keys'];
            }
        }
        if (isset($map['shopping_item_map'])) {
            $model->shoppingItemMap = $map['shopping_item_map'];
        }
        if (isset($map['uniq_key'])) {
            $model->uniqKey = $map['uniq_key'];
        }

        return $model;
    }
}

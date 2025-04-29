<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchResponseBody\module\itemList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchResponseBody\module\itemList\subItems\baggageRule;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchResponseBody\module\itemList\subItems\refundChangeRule;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleItemListSubItemsShoppingItemMapValue;

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
     * @var ModuleItemListSubItemsShoppingItemMapValue[]
     */
    public $shoppingItemMap;

    /**
     * @var string
     */
    public $uniqKey;
    protected $_name = [
        'baggageRule' => 'baggage_rule',
        'refundChangeRule' => 'refund_change_rule',
        'segmentKeys' => 'segment_keys',
        'shoppingItemMap' => 'shopping_item_map',
        'uniqKey' => 'uniq_key',
    ];

    public function validate()
    {
        if (null !== $this->baggageRule) {
            $this->baggageRule->validate();
        }
        if (null !== $this->refundChangeRule) {
            $this->refundChangeRule->validate();
        }
        if (\is_array($this->segmentKeys)) {
            Model::validateArray($this->segmentKeys);
        }
        if (\is_array($this->shoppingItemMap)) {
            Model::validateArray($this->shoppingItemMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baggageRule) {
            $res['baggage_rule'] = null !== $this->baggageRule ? $this->baggageRule->toArray($noStream) : $this->baggageRule;
        }

        if (null !== $this->refundChangeRule) {
            $res['refund_change_rule'] = null !== $this->refundChangeRule ? $this->refundChangeRule->toArray($noStream) : $this->refundChangeRule;
        }

        if (null !== $this->segmentKeys) {
            if (\is_array($this->segmentKeys)) {
                $res['segment_keys'] = [];
                $n1 = 0;
                foreach ($this->segmentKeys as $item1) {
                    $res['segment_keys'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->shoppingItemMap) {
            if (\is_array($this->shoppingItemMap)) {
                $res['shopping_item_map'] = [];
                foreach ($this->shoppingItemMap as $key1 => $value1) {
                    $res['shopping_item_map'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->uniqKey) {
            $res['uniq_key'] = $this->uniqKey;
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
        if (isset($map['baggage_rule'])) {
            $model->baggageRule = baggageRule::fromMap($map['baggage_rule']);
        }

        if (isset($map['refund_change_rule'])) {
            $model->refundChangeRule = refundChangeRule::fromMap($map['refund_change_rule']);
        }

        if (isset($map['segment_keys'])) {
            if (!empty($map['segment_keys'])) {
                $model->segmentKeys = [];
                $n1 = 0;
                foreach ($map['segment_keys'] as $item1) {
                    $model->segmentKeys[$n1++] = $item1;
                }
            }
        }

        if (isset($map['shopping_item_map'])) {
            if (!empty($map['shopping_item_map'])) {
                $model->shoppingItemMap = [];
                foreach ($map['shopping_item_map'] as $key1 => $value1) {
                    $model->shoppingItemMap[$key1] = ModuleItemListSubItemsShoppingItemMapValue::fromMap($value1);
                }
            }
        }

        if (isset($map['uniq_key'])) {
            $model->uniqKey = $map['uniq_key'];
        }

        return $model;
    }
}

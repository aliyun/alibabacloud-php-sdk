<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchResponseBody\module\itemList\agreementPriceCodes;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaSearchResponseBody\module\itemList\subItems;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleItemListShoppingItemMapValue;

class itemList extends Model
{
    /**
     * @var agreementPriceCodes[]
     */
    public $agreementPriceCodes;

    /**
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
     * @var subItems[]
     */
    public $subItems;
    protected $_name = [
        'agreementPriceCodes' => 'agreement_price_codes',
        'itemId' => 'item_id',
        'itemType' => 'item_type',
        'shoppingItemMap' => 'shopping_item_map',
        'subItems' => 'sub_items',
    ];

    public function validate()
    {
        if (\is_array($this->agreementPriceCodes)) {
            Model::validateArray($this->agreementPriceCodes);
        }
        if (\is_array($this->shoppingItemMap)) {
            Model::validateArray($this->shoppingItemMap);
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
                    $res['agreement_price_codes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['agreement_price_codes'])) {
            if (!empty($map['agreement_price_codes'])) {
                $model->agreementPriceCodes = [];
                $n1 = 0;
                foreach ($map['agreement_price_codes'] as $item1) {
                    $model->agreementPriceCodes[$n1] = agreementPriceCodes::fromMap($item1);
                    ++$n1;
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
                    $model->shoppingItemMap[$key1] = ModuleItemListShoppingItemMapValue::fromMap($value1);
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2ResponseBody\module\flightItemList\bestPriceItem;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleFlightItemListBestPriceItemSubItemsShoppingItemMapValue;

class subItems extends Model
{
    /**
     * @var ModuleFlightItemListBestPriceItemSubItemsShoppingItemMapValue[]
     */
    public $shoppingItemMap;

    /**
     * @var string
     */
    public $uniqKey;
    protected $_name = [
        'shoppingItemMap' => 'shopping_item_map',
        'uniqKey' => 'uniq_key',
    ];

    public function validate()
    {
        if (\is_array($this->shoppingItemMap)) {
            Model::validateArray($this->shoppingItemMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
        if (isset($map['shopping_item_map'])) {
            if (!empty($map['shopping_item_map'])) {
                $model->shoppingItemMap = [];
                foreach ($map['shopping_item_map'] as $key1 => $value1) {
                    $model->shoppingItemMap[$key1] = ModuleFlightItemListBestPriceItemSubItemsShoppingItemMapValue::fromMap($value1);
                }
            }
        }

        if (isset($map['uniq_key'])) {
            $model->uniqKey = $map['uniq_key'];
        }

        return $model;
    }
}

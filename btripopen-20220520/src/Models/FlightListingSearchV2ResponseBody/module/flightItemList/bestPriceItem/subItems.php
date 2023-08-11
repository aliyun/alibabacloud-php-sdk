<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2ResponseBody\module\flightItemList\bestPriceItem;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleFlightItemListBestPriceItemSubItemsShoppingItemMapValue;
use AlibabaCloud\Tea\Model;

class subItems extends Model
{
    /**
     * @var ModuleFlightItemListBestPriceItemSubItemsShoppingItemMapValue[]
     */
    public $shoppingItemMap;

    /**
     * @example 07df0bd9-f803-4a50-8449-f4bd675d9939
     *
     * @var string
     */
    public $uniqKey;
    protected $_name = [
        'shoppingItemMap' => 'shopping_item_map',
        'uniqKey'         => 'uniq_key',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['shopping_item_map'])) {
            $model->shoppingItemMap = $map['shopping_item_map'];
        }
        if (isset($map['uniq_key'])) {
            $model->uniqKey = $map['uniq_key'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightListingSearchResponseBody\module\flightItemList;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleFlightItemListBestPriceItemShoppingItemMapValue;
use AlibabaCloud\Tea\Model;

class bestPriceItem extends Model
{
    /**
     * @var string[]
     */
    public $agreementPriceCodes;

    /**
     * @var ModuleFlightItemListBestPriceItemShoppingItemMapValue[]
     */
    public $shoppingItemMap;
    protected $_name = [
        'agreementPriceCodes' => 'agreement_price_codes',
        'shoppingItemMap'     => 'shopping_item_map',
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
        if (null !== $this->shoppingItemMap) {
            $res['shopping_item_map'] = [];
            if (null !== $this->shoppingItemMap && \is_array($this->shoppingItemMap)) {
                foreach ($this->shoppingItemMap as $key => $val) {
                    $res['shopping_item_map'][$key] = null !== $val ? $val->toMap() : $val;
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
        if (isset($map['agreement_price_codes'])) {
            if (!empty($map['agreement_price_codes'])) {
                $model->agreementPriceCodes = $map['agreement_price_codes'];
            }
        }
        if (isset($map['shopping_item_map'])) {
            $model->shoppingItemMap = $map['shopping_item_map'];
        }

        return $model;
    }
}

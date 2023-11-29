<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleGroupItemSubItemsShoppingItemMapValue\searchPrice;
use AlibabaCloud\Tea\Model;

class ModuleGroupItemSubItemsShoppingItemMapValue extends Model
{
    /**
     * @var searchPrice
     */
    public $searchPrice;
    protected $_name = [
        'searchPrice' => 'search_price',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->searchPrice) {
            $res['search_price'] = null !== $this->searchPrice ? $this->searchPrice->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModuleGroupItemSubItemsShoppingItemMapValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['search_price'])) {
            $model->searchPrice = searchPrice::fromMap($map['search_price']);
        }

        return $model;
    }
}

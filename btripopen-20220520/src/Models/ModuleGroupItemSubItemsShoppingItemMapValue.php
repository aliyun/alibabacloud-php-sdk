<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleGroupItemSubItemsShoppingItemMapValue\searchPrice;

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
        if (null !== $this->searchPrice) {
            $this->searchPrice->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->searchPrice) {
            $res['search_price'] = null !== $this->searchPrice ? $this->searchPrice->toArray($noStream) : $this->searchPrice;
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
        if (isset($map['search_price'])) {
            $model->searchPrice = searchPrice::fromMap($map['search_price']);
        }

        return $model;
    }
}

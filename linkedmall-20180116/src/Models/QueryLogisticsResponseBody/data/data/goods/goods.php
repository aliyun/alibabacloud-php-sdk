<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryLogisticsResponseBody\data\data\goods;

use AlibabaCloud\Tea\Model;

class goods extends Model
{
    /**
     * @example ""
     *
     * @var string
     */
    public $goodName;

    /**
     * @example 62250669****
     *
     * @var int
     */
    public $itemId;

    /**
     * @example 4
     *
     * @var int
     */
    public $quantity;
    protected $_name = [
        'goodName' => 'GoodName',
        'itemId'   => 'ItemId',
        'quantity' => 'Quantity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->goodName) {
            $res['GoodName'] = $this->goodName;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return goods
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GoodName'])) {
            $model->goodName = $map['GoodName'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        return $model;
    }
}

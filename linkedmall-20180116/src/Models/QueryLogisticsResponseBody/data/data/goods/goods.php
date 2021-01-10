<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryLogisticsResponseBody\data\data\goods;

use AlibabaCloud\Tea\Model;

class goods extends Model
{
    /**
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $goodName;

    /**
     * @var int
     */
    public $quantity;
    protected $_name = [
        'itemId'   => 'ItemId',
        'goodName' => 'GoodName',
        'quantity' => 'Quantity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->goodName) {
            $res['GoodName'] = $this->goodName;
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
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['GoodName'])) {
            $model->goodName = $map['GoodName'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        return $model;
    }
}

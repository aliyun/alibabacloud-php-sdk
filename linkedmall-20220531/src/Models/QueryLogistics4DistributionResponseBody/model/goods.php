<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryLogistics4DistributionResponseBody\model;

use AlibabaCloud\Tea\Model;

class goods extends Model
{
    /**
     * @var string
     */
    public $goodName;

    /**
     * @var string
     */
    public $itemId;

    /**
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

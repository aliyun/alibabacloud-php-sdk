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
     * @example 1
     *
     * @var int
     */
    public $quantity;

    /**
     * @var string
     */
    public $skuId;
    protected $_name = [
        'goodName' => 'GoodName',
        'itemId'   => 'ItemId',
        'quantity' => 'Quantity',
        'skuId'    => 'SkuId',
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
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
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
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }

        return $model;
    }
}

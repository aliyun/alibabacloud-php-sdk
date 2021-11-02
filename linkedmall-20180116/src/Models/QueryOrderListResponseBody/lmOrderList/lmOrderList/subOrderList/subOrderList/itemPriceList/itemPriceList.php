<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderListResponseBody\lmOrderList\lmOrderList\subOrderList\subOrderList\itemPriceList;

use AlibabaCloud\Tea\Model;

class itemPriceList extends Model
{
    /**
     * @var int
     */
    public $fundAmount;

    /**
     * @var int
     */
    public $fundAmountMoney;

    /**
     * @var string
     */
    public $fundType;
    protected $_name = [
        'fundAmount'      => 'FundAmount',
        'fundAmountMoney' => 'FundAmountMoney',
        'fundType'        => 'FundType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fundAmount) {
            $res['FundAmount'] = $this->fundAmount;
        }
        if (null !== $this->fundAmountMoney) {
            $res['FundAmountMoney'] = $this->fundAmountMoney;
        }
        if (null !== $this->fundType) {
            $res['FundType'] = $this->fundType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itemPriceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FundAmount'])) {
            $model->fundAmount = $map['FundAmount'];
        }
        if (isset($map['FundAmountMoney'])) {
            $model->fundAmountMoney = $map['FundAmountMoney'];
        }
        if (isset($map['FundType'])) {
            $model->fundType = $map['FundType'];
        }

        return $model;
    }
}

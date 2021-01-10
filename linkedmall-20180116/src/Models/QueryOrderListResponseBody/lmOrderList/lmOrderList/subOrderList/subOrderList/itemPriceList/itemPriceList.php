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
     * @var string
     */
    public $fundType;

    /**
     * @var int
     */
    public $fundAmountMoney;
    protected $_name = [
        'fundAmount'      => 'FundAmount',
        'fundType'        => 'FundType',
        'fundAmountMoney' => 'FundAmountMoney',
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
        if (null !== $this->fundType) {
            $res['FundType'] = $this->fundType;
        }
        if (null !== $this->fundAmountMoney) {
            $res['FundAmountMoney'] = $this->fundAmountMoney;
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
        if (isset($map['FundType'])) {
            $model->fundType = $map['FundType'];
        }
        if (isset($map['FundAmountMoney'])) {
            $model->fundAmountMoney = $map['FundAmountMoney'];
        }

        return $model;
    }
}

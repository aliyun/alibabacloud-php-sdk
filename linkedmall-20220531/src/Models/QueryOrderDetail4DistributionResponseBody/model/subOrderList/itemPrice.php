<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryOrderDetail4DistributionResponseBody\model\subOrderList;

use AlibabaCloud\Tea\Model;

class itemPrice extends Model
{
    /**
     * @var string
     */
    public $fundAmountMoney;
    protected $_name = [
        'fundAmountMoney' => 'FundAmountMoney',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fundAmountMoney) {
            $res['FundAmountMoney'] = $this->fundAmountMoney;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itemPrice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FundAmountMoney'])) {
            $model->fundAmountMoney = $map['FundAmountMoney'];
        }

        return $model;
    }
}

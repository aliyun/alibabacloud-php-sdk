<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderDetailInnerResponseBody\model\order\subItemOrderList\subItemOrder\itemPriceList;

use AlibabaCloud\Tea\Model;

class itemPrice extends Model
{
    /**
     * @var int
     */
    public $tbSubOrderId;

    /**
     * @var int
     */
    public $fundAmount;

    /**
     * @var int
     */
    public $tbOrderId;

    /**
     * @var string
     */
    public $fundType;

    /**
     * @var int
     */
    public $fundAmountMoney;
    protected $_name = [
        'tbSubOrderId'    => 'TbSubOrderId',
        'fundAmount'      => 'FundAmount',
        'tbOrderId'       => 'TbOrderId',
        'fundType'        => 'FundType',
        'fundAmountMoney' => 'FundAmountMoney',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tbSubOrderId) {
            $res['TbSubOrderId'] = $this->tbSubOrderId;
        }
        if (null !== $this->fundAmount) {
            $res['FundAmount'] = $this->fundAmount;
        }
        if (null !== $this->tbOrderId) {
            $res['TbOrderId'] = $this->tbOrderId;
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
     * @return itemPrice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TbSubOrderId'])) {
            $model->tbSubOrderId = $map['TbSubOrderId'];
        }
        if (isset($map['FundAmount'])) {
            $model->fundAmount = $map['FundAmount'];
        }
        if (isset($map['TbOrderId'])) {
            $model->tbOrderId = $map['TbOrderId'];
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

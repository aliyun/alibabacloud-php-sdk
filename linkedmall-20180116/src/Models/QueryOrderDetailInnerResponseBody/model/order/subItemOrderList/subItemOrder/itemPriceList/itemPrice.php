<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderDetailInnerResponseBody\model\order\subItemOrderList\subItemOrder\itemPriceList;

use AlibabaCloud\Tea\Model;

class itemPrice extends Model
{
    /**
     * @example 2990
     *
     * @var int
     */
    public $fundAmount;

    /**
     * @example 2990
     *
     * @var int
     */
    public $fundAmountMoney;

    /**
     * @example POINT_PAY
     *
     * @var string
     */
    public $fundType;

    /**
     * @example 2547326482****
     *
     * @var int
     */
    public $tbOrderId;

    /**
     * @example 2547326482****
     *
     * @var int
     */
    public $tbSubOrderId;
    protected $_name = [
        'fundAmount'      => 'FundAmount',
        'fundAmountMoney' => 'FundAmountMoney',
        'fundType'        => 'FundType',
        'tbOrderId'       => 'TbOrderId',
        'tbSubOrderId'    => 'TbSubOrderId',
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
        if (null !== $this->tbOrderId) {
            $res['TbOrderId'] = $this->tbOrderId;
        }
        if (null !== $this->tbSubOrderId) {
            $res['TbSubOrderId'] = $this->tbSubOrderId;
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
        if (isset($map['FundAmount'])) {
            $model->fundAmount = $map['FundAmount'];
        }
        if (isset($map['FundAmountMoney'])) {
            $model->fundAmountMoney = $map['FundAmountMoney'];
        }
        if (isset($map['FundType'])) {
            $model->fundType = $map['FundType'];
        }
        if (isset($map['TbOrderId'])) {
            $model->tbOrderId = $map['TbOrderId'];
        }
        if (isset($map['TbSubOrderId'])) {
            $model->tbSubOrderId = $map['TbSubOrderId'];
        }

        return $model;
    }
}

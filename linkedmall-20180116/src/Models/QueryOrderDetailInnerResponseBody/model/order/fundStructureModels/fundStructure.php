<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderDetailInnerResponseBody\model\order\fundStructureModels;

use AlibabaCloud\Tea\Model;

class fundStructure extends Model
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
     * @example 51855****
     *
     * @var int
     */
    public $lmOrderId;

    /**
     * @example 2874823748****
     *
     * @var int
     */
    public $tbSubOrderId;
    protected $_name = [
        'fundAmount'      => 'FundAmount',
        'fundAmountMoney' => 'FundAmountMoney',
        'fundType'        => 'FundType',
        'lmOrderId'       => 'LmOrderId',
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
        if (null !== $this->lmOrderId) {
            $res['LmOrderId'] = $this->lmOrderId;
        }
        if (null !== $this->tbSubOrderId) {
            $res['TbSubOrderId'] = $this->tbSubOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fundStructure
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
        if (isset($map['LmOrderId'])) {
            $model->lmOrderId = $map['LmOrderId'];
        }
        if (isset($map['TbSubOrderId'])) {
            $model->tbSubOrderId = $map['TbSubOrderId'];
        }

        return $model;
    }
}

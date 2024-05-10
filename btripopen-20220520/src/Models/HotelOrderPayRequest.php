<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class HotelOrderPayRequest extends Model
{
    /**
     * @description 供应商订单号（取自创单返回的订单号）
     *
     * This parameter is required.
     * @example 1002202194207077022
     *
     * @var int
     */
    public $btripOrderId;

    /**
     * @description This parameter is required.
     *
     * @example 23918781
     *
     * @var string
     */
    public $btripUserId;

    /**
     * @description This parameter is required.
     *
     * @example 100
     *
     * @var int
     */
    public $companyPayFee;

    /**
     * @description This parameter is required.
     *
     * @example 100
     *
     * @var int
     */
    public $personPayFee;

    /**
     * @example demo
     *
     * @var string
     */
    public $thirdPayAccount;

    /**
     * @example demo
     *
     * @var string
     */
    public $thirdTradeNo;

    /**
     * @description This parameter is required.
     *
     * @example 100
     *
     * @var int
     */
    public $totalPrice;
    protected $_name = [
        'btripOrderId'    => 'btrip_order_id',
        'btripUserId'     => 'btrip_user_id',
        'companyPayFee'   => 'company_pay_fee',
        'personPayFee'    => 'person_pay_fee',
        'thirdPayAccount' => 'third_pay_account',
        'thirdTradeNo'    => 'third_trade_no',
        'totalPrice'      => 'total_price',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->btripOrderId) {
            $res['btrip_order_id'] = $this->btripOrderId;
        }
        if (null !== $this->btripUserId) {
            $res['btrip_user_id'] = $this->btripUserId;
        }
        if (null !== $this->companyPayFee) {
            $res['company_pay_fee'] = $this->companyPayFee;
        }
        if (null !== $this->personPayFee) {
            $res['person_pay_fee'] = $this->personPayFee;
        }
        if (null !== $this->thirdPayAccount) {
            $res['third_pay_account'] = $this->thirdPayAccount;
        }
        if (null !== $this->thirdTradeNo) {
            $res['third_trade_no'] = $this->thirdTradeNo;
        }
        if (null !== $this->totalPrice) {
            $res['total_price'] = $this->totalPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HotelOrderPayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['btrip_order_id'])) {
            $model->btripOrderId = $map['btrip_order_id'];
        }
        if (isset($map['btrip_user_id'])) {
            $model->btripUserId = $map['btrip_user_id'];
        }
        if (isset($map['company_pay_fee'])) {
            $model->companyPayFee = $map['company_pay_fee'];
        }
        if (isset($map['person_pay_fee'])) {
            $model->personPayFee = $map['person_pay_fee'];
        }
        if (isset($map['third_pay_account'])) {
            $model->thirdPayAccount = $map['third_pay_account'];
        }
        if (isset($map['third_trade_no'])) {
            $model->thirdTradeNo = $map['third_trade_no'];
        }
        if (isset($map['total_price'])) {
            $model->totalPrice = $map['total_price'];
        }

        return $model;
    }
}

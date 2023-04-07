<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class HotelOrderPayRequest extends Model
{
    /**
     * @example 23918781
     *
     * @var string
     */
    public $btripUserId;

    /**
     * @example 100
     *
     * @var int
     */
    public $companyPayFee;

    /**
     * @example dis123
     *
     * @var string
     */
    public $disOrderId;

    /**
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
     * @example 100
     *
     * @var int
     */
    public $totalPrice;
    protected $_name = [
        'btripUserId'     => 'btrip_user_id',
        'companyPayFee'   => 'company_pay_fee',
        'disOrderId'      => 'dis_order_id',
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
        if (null !== $this->btripUserId) {
            $res['btrip_user_id'] = $this->btripUserId;
        }
        if (null !== $this->companyPayFee) {
            $res['company_pay_fee'] = $this->companyPayFee;
        }
        if (null !== $this->disOrderId) {
            $res['dis_order_id'] = $this->disOrderId;
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
        if (isset($map['btrip_user_id'])) {
            $model->btripUserId = $map['btrip_user_id'];
        }
        if (isset($map['company_pay_fee'])) {
            $model->companyPayFee = $map['company_pay_fee'];
        }
        if (isset($map['dis_order_id'])) {
            $model->disOrderId = $map['dis_order_id'];
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

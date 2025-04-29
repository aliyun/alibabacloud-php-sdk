<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class HotelOrderPayRequest extends Model
{
    /**
     * @var int
     */
    public $btripOrderId;

    /**
     * @var string
     */
    public $btripUserId;

    /**
     * @var int
     */
    public $companyPayFee;

    /**
     * @var int
     */
    public $personPayFee;

    /**
     * @var string
     */
    public $thirdPayAccount;

    /**
     * @var string
     */
    public $thirdTradeNo;

    /**
     * @var int
     */
    public $totalPrice;
    protected $_name = [
        'btripOrderId' => 'btrip_order_id',
        'btripUserId' => 'btrip_user_id',
        'companyPayFee' => 'company_pay_fee',
        'personPayFee' => 'person_pay_fee',
        'thirdPayAccount' => 'third_pay_account',
        'thirdTradeNo' => 'third_trade_no',
        'totalPrice' => 'total_price',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

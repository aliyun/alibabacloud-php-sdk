<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class HotelGoodsQueryRequest extends Model
{
    /**
     * @var string
     */
    public $adultNum;

    /**
     * @var bool
     */
    public $agreementPrice;

    /**
     * @var string
     */
    public $beginDate;

    /**
     * @var bool
     */
    public $breakfastIncluded;

    /**
     * @var string
     */
    public $btripUserId;

    /**
     * @var string
     */
    public $cityCode;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var int
     */
    public $payOverType;

    /**
     * @var int
     */
    public $paymentType;

    /**
     * @var bool
     */
    public $specialInvoice;

    /**
     * @var int
     */
    public $superMan;
    protected $_name = [
        'adultNum' => 'adult_num',
        'agreementPrice' => 'agreement_price',
        'beginDate' => 'begin_date',
        'breakfastIncluded' => 'breakfast_included',
        'btripUserId' => 'btrip_user_id',
        'cityCode' => 'city_code',
        'endDate' => 'end_date',
        'hotelId' => 'hotel_id',
        'payOverType' => 'pay_over_type',
        'paymentType' => 'payment_type',
        'specialInvoice' => 'special_invoice',
        'superMan' => 'super_man',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adultNum) {
            $res['adult_num'] = $this->adultNum;
        }

        if (null !== $this->agreementPrice) {
            $res['agreement_price'] = $this->agreementPrice;
        }

        if (null !== $this->beginDate) {
            $res['begin_date'] = $this->beginDate;
        }

        if (null !== $this->breakfastIncluded) {
            $res['breakfast_included'] = $this->breakfastIncluded;
        }

        if (null !== $this->btripUserId) {
            $res['btrip_user_id'] = $this->btripUserId;
        }

        if (null !== $this->cityCode) {
            $res['city_code'] = $this->cityCode;
        }

        if (null !== $this->endDate) {
            $res['end_date'] = $this->endDate;
        }

        if (null !== $this->hotelId) {
            $res['hotel_id'] = $this->hotelId;
        }

        if (null !== $this->payOverType) {
            $res['pay_over_type'] = $this->payOverType;
        }

        if (null !== $this->paymentType) {
            $res['payment_type'] = $this->paymentType;
        }

        if (null !== $this->specialInvoice) {
            $res['special_invoice'] = $this->specialInvoice;
        }

        if (null !== $this->superMan) {
            $res['super_man'] = $this->superMan;
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
        if (isset($map['adult_num'])) {
            $model->adultNum = $map['adult_num'];
        }

        if (isset($map['agreement_price'])) {
            $model->agreementPrice = $map['agreement_price'];
        }

        if (isset($map['begin_date'])) {
            $model->beginDate = $map['begin_date'];
        }

        if (isset($map['breakfast_included'])) {
            $model->breakfastIncluded = $map['breakfast_included'];
        }

        if (isset($map['btrip_user_id'])) {
            $model->btripUserId = $map['btrip_user_id'];
        }

        if (isset($map['city_code'])) {
            $model->cityCode = $map['city_code'];
        }

        if (isset($map['end_date'])) {
            $model->endDate = $map['end_date'];
        }

        if (isset($map['hotel_id'])) {
            $model->hotelId = $map['hotel_id'];
        }

        if (isset($map['pay_over_type'])) {
            $model->payOverType = $map['pay_over_type'];
        }

        if (isset($map['payment_type'])) {
            $model->paymentType = $map['payment_type'];
        }

        if (isset($map['special_invoice'])) {
            $model->specialInvoice = $map['special_invoice'];
        }

        if (isset($map['super_man'])) {
            $model->superMan = $map['super_man'];
        }

        return $model;
    }
}

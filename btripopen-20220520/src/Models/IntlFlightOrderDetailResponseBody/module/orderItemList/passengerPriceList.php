<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\orderItemList;

use AlibabaCloud\Dara\Model;

class passengerPriceList extends Model
{
    /**
     * @var float
     */
    public $discount;

    /**
     * @var string
     */
    public $discountInfo;

    /**
     * @var int
     */
    public $modifyFee;

    /**
     * @var int
     */
    public $modifyTaxSpread;

    /**
     * @var int
     */
    public $passengerType;

    /**
     * @var int
     */
    public $sellPrice;

    /**
     * @var int
     */
    public $tax;

    /**
     * @var int
     */
    public $ticketPrice;

    /**
     * @var int
     */
    public $upgradeFee;
    protected $_name = [
        'discount' => 'discount',
        'discountInfo' => 'discount_info',
        'modifyFee' => 'modify_fee',
        'modifyTaxSpread' => 'modify_tax_spread',
        'passengerType' => 'passenger_type',
        'sellPrice' => 'sell_price',
        'tax' => 'tax',
        'ticketPrice' => 'ticket_price',
        'upgradeFee' => 'upgrade_fee',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->discount) {
            $res['discount'] = $this->discount;
        }

        if (null !== $this->discountInfo) {
            $res['discount_info'] = $this->discountInfo;
        }

        if (null !== $this->modifyFee) {
            $res['modify_fee'] = $this->modifyFee;
        }

        if (null !== $this->modifyTaxSpread) {
            $res['modify_tax_spread'] = $this->modifyTaxSpread;
        }

        if (null !== $this->passengerType) {
            $res['passenger_type'] = $this->passengerType;
        }

        if (null !== $this->sellPrice) {
            $res['sell_price'] = $this->sellPrice;
        }

        if (null !== $this->tax) {
            $res['tax'] = $this->tax;
        }

        if (null !== $this->ticketPrice) {
            $res['ticket_price'] = $this->ticketPrice;
        }

        if (null !== $this->upgradeFee) {
            $res['upgrade_fee'] = $this->upgradeFee;
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
        if (isset($map['discount'])) {
            $model->discount = $map['discount'];
        }

        if (isset($map['discount_info'])) {
            $model->discountInfo = $map['discount_info'];
        }

        if (isset($map['modify_fee'])) {
            $model->modifyFee = $map['modify_fee'];
        }

        if (isset($map['modify_tax_spread'])) {
            $model->modifyTaxSpread = $map['modify_tax_spread'];
        }

        if (isset($map['passenger_type'])) {
            $model->passengerType = $map['passenger_type'];
        }

        if (isset($map['sell_price'])) {
            $model->sellPrice = $map['sell_price'];
        }

        if (isset($map['tax'])) {
            $model->tax = $map['tax'];
        }

        if (isset($map['ticket_price'])) {
            $model->ticketPrice = $map['ticket_price'];
        }

        if (isset($map['upgrade_fee'])) {
            $model->upgradeFee = $map['upgrade_fee'];
        }

        return $model;
    }
}

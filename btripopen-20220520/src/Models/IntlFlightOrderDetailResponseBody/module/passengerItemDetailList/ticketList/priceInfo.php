<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\passengerItemDetailList\ticketList;

use AlibabaCloud\Dara\Model;

class priceInfo extends Model
{
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
        'modifyFee' => 'modify_fee',
        'modifyTaxSpread' => 'modify_tax_spread',
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
        if (null !== $this->modifyFee) {
            $res['modify_fee'] = $this->modifyFee;
        }

        if (null !== $this->modifyTaxSpread) {
            $res['modify_tax_spread'] = $this->modifyTaxSpread;
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
        if (isset($map['modify_fee'])) {
            $model->modifyFee = $map['modify_fee'];
        }

        if (isset($map['modify_tax_spread'])) {
            $model->modifyTaxSpread = $map['modify_tax_spread'];
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

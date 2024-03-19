<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\passengerItemDetailList\ticketList;

use AlibabaCloud\Tea\Model;

class priceInfo extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $modifyFee;

    /**
     * @example 0
     *
     * @var int
     */
    public $modifyTaxSpread;

    /**
     * @example 26900
     *
     * @var int
     */
    public $sellPrice;

    /**
     * @example 24900
     *
     * @var int
     */
    public $tax;

    /**
     * @example 2000
     *
     * @var int
     */
    public $ticketPrice;

    /**
     * @example 0
     *
     * @var int
     */
    public $upgradeFee;
    protected $_name = [
        'modifyFee'       => 'modify_fee',
        'modifyTaxSpread' => 'modify_tax_spread',
        'sellPrice'       => 'sell_price',
        'tax'             => 'tax',
        'ticketPrice'     => 'ticket_price',
        'upgradeFee'      => 'upgrade_fee',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return priceInfo
     */
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

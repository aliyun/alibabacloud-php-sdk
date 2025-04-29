<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingFlightListResponseBody\module\flightInfoList\cabinList;

use AlibabaCloud\Dara\Model;

class modifyPriceList extends Model
{
    /**
     * @var int
     */
    public $passengerType;

    /**
     * @var int
     */
    public $ticketPrice;

    /**
     * @var int
     */
    public $upgradeFee;

    /**
     * @var int
     */
    public $upgradePrice;
    protected $_name = [
        'passengerType' => 'passenger_type',
        'ticketPrice' => 'ticket_price',
        'upgradeFee' => 'upgrade_fee',
        'upgradePrice' => 'upgrade_price',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->passengerType) {
            $res['passenger_type'] = $this->passengerType;
        }

        if (null !== $this->ticketPrice) {
            $res['ticket_price'] = $this->ticketPrice;
        }

        if (null !== $this->upgradeFee) {
            $res['upgrade_fee'] = $this->upgradeFee;
        }

        if (null !== $this->upgradePrice) {
            $res['upgrade_price'] = $this->upgradePrice;
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
        if (isset($map['passenger_type'])) {
            $model->passengerType = $map['passenger_type'];
        }

        if (isset($map['ticket_price'])) {
            $model->ticketPrice = $map['ticket_price'];
        }

        if (isset($map['upgrade_fee'])) {
            $model->upgradeFee = $map['upgrade_fee'];
        }

        if (isset($map['upgrade_price'])) {
            $model->upgradePrice = $map['upgrade_price'];
        }

        return $model;
    }
}

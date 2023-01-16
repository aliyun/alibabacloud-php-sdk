<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingFlightListResponseBody\module\flightInfoList;

use AlibabaCloud\Tea\Model;

class lowestCabinPrice extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $passengerType;

    /**
     * @example 100
     *
     * @var int
     */
    public $ticketPrice;

    /**
     * @example 100
     *
     * @var int
     */
    public $upgradeFee;

    /**
     * @example 100
     *
     * @var int
     */
    public $upgradePrice;
    protected $_name = [
        'passengerType' => 'passenger_type',
        'ticketPrice'   => 'ticket_price',
        'upgradeFee'    => 'upgrade_fee',
        'upgradePrice'  => 'upgrade_price',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return lowestCabinPrice
     */
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

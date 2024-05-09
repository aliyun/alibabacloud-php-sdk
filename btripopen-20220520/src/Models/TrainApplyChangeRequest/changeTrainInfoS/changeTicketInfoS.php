<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainApplyChangeRequest\changeTrainInfoS;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainApplyChangeRequest\changeTrainInfoS\changeTicketInfoS\passengerInfo;
use AlibabaCloud\Tea\Model;

class changeTicketInfoS extends Model
{
    /**
     * @var passengerInfo
     */
    public $passengerInfo;

    /**
     * @example 14
     *
     * @var string
     */
    public $seatType;

    /**
     * @example 100
     *
     * @var string
     */
    public $ticketPrice;

    /**
     * @example 0
     *
     * @var string
     */
    public $ticketType;
    protected $_name = [
        'passengerInfo' => 'passenger_info',
        'seatType'      => 'seat_type',
        'ticketPrice'   => 'ticket_price',
        'ticketType'    => 'ticket_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->passengerInfo) {
            $res['passenger_info'] = null !== $this->passengerInfo ? $this->passengerInfo->toMap() : null;
        }
        if (null !== $this->seatType) {
            $res['seat_type'] = $this->seatType;
        }
        if (null !== $this->ticketPrice) {
            $res['ticket_price'] = $this->ticketPrice;
        }
        if (null !== $this->ticketType) {
            $res['ticket_type'] = $this->ticketType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changeTicketInfoS
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['passenger_info'])) {
            $model->passengerInfo = passengerInfo::fromMap($map['passenger_info']);
        }
        if (isset($map['seat_type'])) {
            $model->seatType = $map['seat_type'];
        }
        if (isset($map['ticket_price'])) {
            $model->ticketPrice = $map['ticket_price'];
        }
        if (isset($map['ticket_type'])) {
            $model->ticketType = $map['ticket_type'];
        }

        return $model;
    }
}

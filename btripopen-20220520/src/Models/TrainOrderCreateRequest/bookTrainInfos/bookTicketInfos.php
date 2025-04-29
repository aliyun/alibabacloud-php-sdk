<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderCreateRequest\bookTrainInfos;

use AlibabaCloud\Dara\Model;

class bookTicketInfos extends Model
{
    /**
     * @var string
     */
    public $passengerId;

    /**
     * @var string
     */
    public $seatType;

    /**
     * @var int
     */
    public $ticketPrice;

    /**
     * @var string
     */
    public $ticketType;
    protected $_name = [
        'passengerId' => 'passenger_id',
        'seatType' => 'seat_type',
        'ticketPrice' => 'ticket_price',
        'ticketType' => 'ticket_type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->passengerId) {
            $res['passenger_id'] = $this->passengerId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['passenger_id'])) {
            $model->passengerId = $map['passenger_id'];
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

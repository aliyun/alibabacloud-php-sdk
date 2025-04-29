<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\refundInfos\refundTrainInfo;

use AlibabaCloud\Dara\Model;

class refundTicketInfos extends Model
{
    /**
     * @var string
     */
    public $passengerId;

    /**
     * @var int
     */
    public $refundCost;

    /**
     * @var int
     */
    public $refundPrice;

    /**
     * @var int
     */
    public $ticketPrice;
    protected $_name = [
        'passengerId' => 'passenger_id',
        'refundCost' => 'refund_cost',
        'refundPrice' => 'refund_price',
        'ticketPrice' => 'ticket_price',
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

        if (null !== $this->refundCost) {
            $res['refund_cost'] = $this->refundCost;
        }

        if (null !== $this->refundPrice) {
            $res['refund_price'] = $this->refundPrice;
        }

        if (null !== $this->ticketPrice) {
            $res['ticket_price'] = $this->ticketPrice;
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

        if (isset($map['refund_cost'])) {
            $model->refundCost = $map['refund_cost'];
        }

        if (isset($map['refund_price'])) {
            $model->refundPrice = $map['refund_price'];
        }

        if (isset($map['ticket_price'])) {
            $model->ticketPrice = $map['ticket_price'];
        }

        return $model;
    }
}

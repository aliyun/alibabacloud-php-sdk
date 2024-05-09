<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\refundInfos\refundTrainInfo;

use AlibabaCloud\Tea\Model;

class refundTicketInfos extends Model
{
    /**
     * @example 123456
     *
     * @var string
     */
    public $passengerId;

    /**
     * @example 0
     *
     * @var int
     */
    public $refundCost;

    /**
     * @example 10000
     *
     * @var int
     */
    public $refundPrice;

    /**
     * @example 10000
     *
     * @var int
     */
    public $ticketPrice;
    protected $_name = [
        'passengerId' => 'passenger_id',
        'refundCost'  => 'refund_cost',
        'refundPrice' => 'refund_price',
        'ticketPrice' => 'ticket_price',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return refundTicketInfos
     */
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

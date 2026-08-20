<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryOrderResponseBody\data;

use AlibabaCloud\Dara\Model;

class order extends Model
{
    /**
     * @var int
     */
    public $fundStatus;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var int
     */
    public $orderStatus;
    protected $_name = [
        'fundStatus' => 'FundStatus',
        'orderId' => 'OrderId',
        'orderStatus' => 'OrderStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fundStatus) {
            $res['FundStatus'] = $this->fundStatus;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
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
        if (isset($map['FundStatus'])) {
            $model->fundStatus = $map['FundStatus'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }

        return $model;
    }
}

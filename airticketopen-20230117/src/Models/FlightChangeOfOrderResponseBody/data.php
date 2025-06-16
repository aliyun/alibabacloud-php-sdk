<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\FlightChangeOfOrderResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\FlightChangeOfOrderResponseBody\data\flightChangeDetail;

class data extends Model
{
    /**
     * @var flightChangeDetail
     */
    public $flightChangeDetail;

    /**
     * @var int
     */
    public $orderNum;
    protected $_name = [
        'flightChangeDetail' => 'flight_change_detail',
        'orderNum' => 'order_num',
    ];

    public function validate()
    {
        if (null !== $this->flightChangeDetail) {
            $this->flightChangeDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flightChangeDetail) {
            $res['flight_change_detail'] = null !== $this->flightChangeDetail ? $this->flightChangeDetail->toArray($noStream) : $this->flightChangeDetail;
        }

        if (null !== $this->orderNum) {
            $res['order_num'] = $this->orderNum;
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
        if (isset($map['flight_change_detail'])) {
            $model->flightChangeDetail = flightChangeDetail::fromMap($map['flight_change_detail']);
        }

        if (isset($map['order_num'])) {
            $model->orderNum = $map['order_num'];
        }

        return $model;
    }
}

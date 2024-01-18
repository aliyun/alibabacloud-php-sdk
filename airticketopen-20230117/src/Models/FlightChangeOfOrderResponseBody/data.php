<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\FlightChangeOfOrderResponseBody;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\FlightChangeOfOrderResponseBody\data\flightChangeDetail;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var flightChangeDetail
     */
    public $flightChangeDetail;

    /**
     * @example 4966***617111
     *
     * @var int
     */
    public $orderNum;
    protected $_name = [
        'flightChangeDetail' => 'flight_change_detail',
        'orderNum'           => 'order_num',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flightChangeDetail) {
            $res['flight_change_detail'] = null !== $this->flightChangeDetail ? $this->flightChangeDetail->toMap() : null;
        }
        if (null !== $this->orderNum) {
            $res['order_num'] = $this->orderNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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

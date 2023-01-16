<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingApplyRequest\modifyFlightInfoList;

use AlibabaCloud\Tea\Model;

class passengerInfoList extends Model
{
    /**
     * @example CA1703
     *
     * @var string
     */
    public $originFlightNo;

    /**
     * @example 1234
     *
     * @var string
     */
    public $outUserId;

    /**
     * @var string
     */
    public $passengerName;
    protected $_name = [
        'originFlightNo' => 'origin_flight_no',
        'outUserId'      => 'out_user_id',
        'passengerName'  => 'passenger_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originFlightNo) {
            $res['origin_flight_no'] = $this->originFlightNo;
        }
        if (null !== $this->outUserId) {
            $res['out_user_id'] = $this->outUserId;
        }
        if (null !== $this->passengerName) {
            $res['passenger_name'] = $this->passengerName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return passengerInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['origin_flight_no'])) {
            $model->originFlightNo = $map['origin_flight_no'];
        }
        if (isset($map['out_user_id'])) {
            $model->outUserId = $map['out_user_id'];
        }
        if (isset($map['passenger_name'])) {
            $model->passengerName = $map['passenger_name'];
        }

        return $model;
    }
}

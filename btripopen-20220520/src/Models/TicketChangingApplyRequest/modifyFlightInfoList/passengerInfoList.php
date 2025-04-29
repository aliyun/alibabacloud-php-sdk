<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingApplyRequest\modifyFlightInfoList;

use AlibabaCloud\Dara\Model;

class passengerInfoList extends Model
{
    /**
     * @var string
     */
    public $originFlightNo;

    /**
     * @var string
     */
    public $outUserId;

    /**
     * @var string
     */
    public $passengerName;
    protected $_name = [
        'originFlightNo' => 'origin_flight_no',
        'outUserId' => 'out_user_id',
        'passengerName' => 'passenger_name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

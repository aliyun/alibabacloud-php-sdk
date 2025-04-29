<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundApplyRequest;

use AlibabaCloud\Dara\Model;

class passengerSegmentInfoList extends Model
{
    /**
     * @var string
     */
    public $flightNo;

    /**
     * @var string
     */
    public $passengerName;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'flightNo' => 'flight_no',
        'passengerName' => 'passenger_name',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flightNo) {
            $res['flight_no'] = $this->flightNo;
        }

        if (null !== $this->passengerName) {
            $res['passenger_name'] = $this->passengerName;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['flight_no'])) {
            $model->flightNo = $map['flight_no'];
        }

        if (isset($map['passenger_name'])) {
            $model->passengerName = $map['passenger_name'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}

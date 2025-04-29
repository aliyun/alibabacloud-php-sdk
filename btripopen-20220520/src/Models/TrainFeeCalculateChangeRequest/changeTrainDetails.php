<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateChangeRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateChangeRequest\changeTrainDetails\passengerInfo;

class changeTrainDetails extends Model
{
    /**
     * @var string
     */
    public $arrStationCode;

    /**
     * @var string
     */
    public $depStationCode;

    /**
     * @var string
     */
    public $depTime;

    /**
     * @var string
     */
    public $originalDepTime;

    /**
     * @var string
     */
    public $originalTrainNo;

    /**
     * @var passengerInfo
     */
    public $passengerInfo;

    /**
     * @var string
     */
    public $seatType;

    /**
     * @var string
     */
    public $trainNo;
    protected $_name = [
        'arrStationCode' => 'arr_station_code',
        'depStationCode' => 'dep_station_code',
        'depTime' => 'dep_time',
        'originalDepTime' => 'original_dep_time',
        'originalTrainNo' => 'original_train_no',
        'passengerInfo' => 'passenger_info',
        'seatType' => 'seat_type',
        'trainNo' => 'train_no',
    ];

    public function validate()
    {
        if (null !== $this->passengerInfo) {
            $this->passengerInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrStationCode) {
            $res['arr_station_code'] = $this->arrStationCode;
        }

        if (null !== $this->depStationCode) {
            $res['dep_station_code'] = $this->depStationCode;
        }

        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }

        if (null !== $this->originalDepTime) {
            $res['original_dep_time'] = $this->originalDepTime;
        }

        if (null !== $this->originalTrainNo) {
            $res['original_train_no'] = $this->originalTrainNo;
        }

        if (null !== $this->passengerInfo) {
            $res['passenger_info'] = null !== $this->passengerInfo ? $this->passengerInfo->toArray($noStream) : $this->passengerInfo;
        }

        if (null !== $this->seatType) {
            $res['seat_type'] = $this->seatType;
        }

        if (null !== $this->trainNo) {
            $res['train_no'] = $this->trainNo;
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
        if (isset($map['arr_station_code'])) {
            $model->arrStationCode = $map['arr_station_code'];
        }

        if (isset($map['dep_station_code'])) {
            $model->depStationCode = $map['dep_station_code'];
        }

        if (isset($map['dep_time'])) {
            $model->depTime = $map['dep_time'];
        }

        if (isset($map['original_dep_time'])) {
            $model->originalDepTime = $map['original_dep_time'];
        }

        if (isset($map['original_train_no'])) {
            $model->originalTrainNo = $map['original_train_no'];
        }

        if (isset($map['passenger_info'])) {
            $model->passengerInfo = passengerInfo::fromMap($map['passenger_info']);
        }

        if (isset($map['seat_type'])) {
            $model->seatType = $map['seat_type'];
        }

        if (isset($map['train_no'])) {
            $model->trainNo = $map['train_no'];
        }

        return $model;
    }
}

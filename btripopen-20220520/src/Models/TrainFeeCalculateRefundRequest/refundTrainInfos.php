<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateRefundRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateRefundRequest\refundTrainInfos\refundPassengerInfos;

class refundTrainInfos extends Model
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
     * @var refundPassengerInfos[]
     */
    public $refundPassengerInfos;

    /**
     * @var string
     */
    public $trainNo;
    protected $_name = [
        'arrStationCode' => 'arr_station_code',
        'depStationCode' => 'dep_station_code',
        'depTime' => 'dep_time',
        'refundPassengerInfos' => 'refund_passenger_infos',
        'trainNo' => 'train_no',
    ];

    public function validate()
    {
        if (\is_array($this->refundPassengerInfos)) {
            Model::validateArray($this->refundPassengerInfos);
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

        if (null !== $this->refundPassengerInfos) {
            if (\is_array($this->refundPassengerInfos)) {
                $res['refund_passenger_infos'] = [];
                $n1 = 0;
                foreach ($this->refundPassengerInfos as $item1) {
                    $res['refund_passenger_infos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['refund_passenger_infos'])) {
            if (!empty($map['refund_passenger_infos'])) {
                $model->refundPassengerInfos = [];
                $n1 = 0;
                foreach ($map['refund_passenger_infos'] as $item1) {
                    $model->refundPassengerInfos[$n1] = refundPassengerInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['train_no'])) {
            $model->trainNo = $map['train_no'];
        }

        return $model;
    }
}

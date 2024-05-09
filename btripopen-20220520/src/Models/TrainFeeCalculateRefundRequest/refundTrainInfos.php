<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateRefundRequest;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateRefundRequest\refundTrainInfos\refundPassengerInfos;
use AlibabaCloud\Tea\Model;

class refundTrainInfos extends Model
{
    /**
     * @example BDC
     *
     * @var string
     */
    public $arrStationCode;

    /**
     * @example BTC
     *
     * @var string
     */
    public $depStationCode;

    /**
     * @example 2024-05-06 15:19:01
     *
     * @var string
     */
    public $depTime;

    /**
     * @var refundPassengerInfos[]
     */
    public $refundPassengerInfos;

    /**
     * @example K1234
     *
     * @var string
     */
    public $trainNo;
    protected $_name = [
        'arrStationCode'       => 'arr_station_code',
        'depStationCode'       => 'dep_station_code',
        'depTime'              => 'dep_time',
        'refundPassengerInfos' => 'refund_passenger_infos',
        'trainNo'              => 'train_no',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['refund_passenger_infos'] = [];
            if (null !== $this->refundPassengerInfos && \is_array($this->refundPassengerInfos)) {
                $n = 0;
                foreach ($this->refundPassengerInfos as $item) {
                    $res['refund_passenger_infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->trainNo) {
            $res['train_no'] = $this->trainNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return refundTrainInfos
     */
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
                $n                           = 0;
                foreach ($map['refund_passenger_infos'] as $item) {
                    $model->refundPassengerInfos[$n++] = null !== $item ? refundPassengerInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['train_no'])) {
            $model->trainNo = $map['train_no'];
        }

        return $model;
    }
}

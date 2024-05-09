<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\refundInfos;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\refundInfos\refundTrainInfo\refundTicketInfos;
use AlibabaCloud\Tea\Model;

class refundTrainInfo extends Model
{
    /**
     * @var string
     */
    public $arrStationName;

    /**
     * @example 2024-05-06 15:19:01
     *
     * @var string
     */
    public $arrTime;

    /**
     * @example BTC
     *
     * @var string
     */
    public $depStationCode;

    /**
     * @var string
     */
    public $depStationName;

    /**
     * @example 2024-05-06 15:19:01
     *
     * @var string
     */
    public $depTime;

    /**
     * @var refundTicketInfos[]
     */
    public $refundTicketInfos;

    /**
     * @example K1234
     *
     * @var string
     */
    public $trainNo;
    protected $_name = [
        'arrStationName'    => 'arr_station_name',
        'arrTime'           => 'arr_time',
        'depStationCode'    => 'dep_station_code',
        'depStationName'    => 'dep_station_name',
        'depTime'           => 'dep_time',
        'refundTicketInfos' => 'refund_ticket_infos',
        'trainNo'           => 'train_no',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrStationName) {
            $res['arr_station_name'] = $this->arrStationName;
        }
        if (null !== $this->arrTime) {
            $res['arr_time'] = $this->arrTime;
        }
        if (null !== $this->depStationCode) {
            $res['dep_station_code'] = $this->depStationCode;
        }
        if (null !== $this->depStationName) {
            $res['dep_station_name'] = $this->depStationName;
        }
        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }
        if (null !== $this->refundTicketInfos) {
            $res['refund_ticket_infos'] = [];
            if (null !== $this->refundTicketInfos && \is_array($this->refundTicketInfos)) {
                $n = 0;
                foreach ($this->refundTicketInfos as $item) {
                    $res['refund_ticket_infos'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return refundTrainInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_station_name'])) {
            $model->arrStationName = $map['arr_station_name'];
        }
        if (isset($map['arr_time'])) {
            $model->arrTime = $map['arr_time'];
        }
        if (isset($map['dep_station_code'])) {
            $model->depStationCode = $map['dep_station_code'];
        }
        if (isset($map['dep_station_name'])) {
            $model->depStationName = $map['dep_station_name'];
        }
        if (isset($map['dep_time'])) {
            $model->depTime = $map['dep_time'];
        }
        if (isset($map['refund_ticket_infos'])) {
            if (!empty($map['refund_ticket_infos'])) {
                $model->refundTicketInfos = [];
                $n                        = 0;
                foreach ($map['refund_ticket_infos'] as $item) {
                    $model->refundTicketInfos[$n++] = null !== $item ? refundTicketInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['train_no'])) {
            $model->trainNo = $map['train_no'];
        }

        return $model;
    }
}

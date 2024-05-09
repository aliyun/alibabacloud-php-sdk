<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\changeInfos;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\changeInfos\changeTrainInfos\changeTicketInfos;
use AlibabaCloud\Tea\Model;

class changeTrainInfos extends Model
{
    /**
     * @example BDC
     *
     * @var string
     */
    public $arrStationCode;

    /**
     * @var string
     */
    public $arrStationName;

    /**
     * @example 2024-05-06 15:19:01
     *
     * @var string
     */
    public $arriveTime;

    /**
     * @var changeTicketInfos[]
     */
    public $changeTicketInfos;

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
     * @example D1234
     *
     * @var string
     */
    public $trainNo;
    protected $_name = [
        'arrStationCode'    => 'arr_station_code',
        'arrStationName'    => 'arr_station_name',
        'arriveTime'        => 'arrive_time',
        'changeTicketInfos' => 'change_ticket_infos',
        'depStationCode'    => 'dep_station_code',
        'depStationName'    => 'dep_station_name',
        'depTime'           => 'dep_time',
        'trainNo'           => 'train_no',
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
        if (null !== $this->arrStationName) {
            $res['arr_station_name'] = $this->arrStationName;
        }
        if (null !== $this->arriveTime) {
            $res['arrive_time'] = $this->arriveTime;
        }
        if (null !== $this->changeTicketInfos) {
            $res['change_ticket_infos'] = [];
            if (null !== $this->changeTicketInfos && \is_array($this->changeTicketInfos)) {
                $n = 0;
                foreach ($this->changeTicketInfos as $item) {
                    $res['change_ticket_infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->trainNo) {
            $res['train_no'] = $this->trainNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changeTrainInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_station_code'])) {
            $model->arrStationCode = $map['arr_station_code'];
        }
        if (isset($map['arr_station_name'])) {
            $model->arrStationName = $map['arr_station_name'];
        }
        if (isset($map['arrive_time'])) {
            $model->arriveTime = $map['arrive_time'];
        }
        if (isset($map['change_ticket_infos'])) {
            if (!empty($map['change_ticket_infos'])) {
                $model->changeTicketInfos = [];
                $n                        = 0;
                foreach ($map['change_ticket_infos'] as $item) {
                    $model->changeTicketInfos[$n++] = null !== $item ? changeTicketInfos::fromMap($item) : $item;
                }
            }
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
        if (isset($map['train_no'])) {
            $model->trainNo = $map['train_no'];
        }

        return $model;
    }
}

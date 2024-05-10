<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainApplyChangeRequest;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainApplyChangeRequest\changeTrainInfoS\changeTicketInfoS;
use AlibabaCloud\Tea\Model;

class changeTrainInfoS extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example BTC
     *
     * @var string
     */
    public $arrStationCode;

    /**
     * @description This parameter is required.
     *
     * @var changeTicketInfoS[]
     */
    public $changeTicketInfoS;

    /**
     * @example null
     *
     * @var string
     */
    public $chooseBedS;

    /**
     * @example 1T
     *
     * @var string
     */
    public $chooseSeatS;

    /**
     * @description This parameter is required.
     *
     * @example BDC
     *
     * @var string
     */
    public $depStationCode;

    /**
     * @description This parameter is required.
     *
     * @example 2024-05-06 15:19:01
     *
     * @var string
     */
    public $depTime;

    /**
     * @description This parameter is required.
     *
     * @example 2024-05-06 15:19:01
     *
     * @var string
     */
    public $originalDepTime;

    /**
     * @description This parameter is required.
     *
     * @example K234
     *
     * @var string
     */
    public $originalTrainNo;

    /**
     * @description This parameter is required.
     *
     * @example K2345
     *
     * @var string
     */
    public $trainNo;
    protected $_name = [
        'arrStationCode'    => 'arr_station_code',
        'changeTicketInfoS' => 'change_ticket_info_s',
        'chooseBedS'        => 'choose_bed_s',
        'chooseSeatS'       => 'choose_seat_s',
        'depStationCode'    => 'dep_station_code',
        'depTime'           => 'dep_time',
        'originalDepTime'   => 'original_dep_time',
        'originalTrainNo'   => 'original_train_no',
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
        if (null !== $this->changeTicketInfoS) {
            $res['change_ticket_info_s'] = [];
            if (null !== $this->changeTicketInfoS && \is_array($this->changeTicketInfoS)) {
                $n = 0;
                foreach ($this->changeTicketInfoS as $item) {
                    $res['change_ticket_info_s'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->chooseBedS) {
            $res['choose_bed_s'] = $this->chooseBedS;
        }
        if (null !== $this->chooseSeatS) {
            $res['choose_seat_s'] = $this->chooseSeatS;
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
        if (null !== $this->trainNo) {
            $res['train_no'] = $this->trainNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changeTrainInfoS
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_station_code'])) {
            $model->arrStationCode = $map['arr_station_code'];
        }
        if (isset($map['change_ticket_info_s'])) {
            if (!empty($map['change_ticket_info_s'])) {
                $model->changeTicketInfoS = [];
                $n                        = 0;
                foreach ($map['change_ticket_info_s'] as $item) {
                    $model->changeTicketInfoS[$n++] = null !== $item ? changeTicketInfoS::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['choose_bed_s'])) {
            $model->chooseBedS = $map['choose_bed_s'];
        }
        if (isset($map['choose_seat_s'])) {
            $model->chooseSeatS = $map['choose_seat_s'];
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
        if (isset($map['train_no'])) {
            $model->trainNo = $map['train_no'];
        }

        return $model;
    }
}

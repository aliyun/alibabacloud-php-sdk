<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderCreateRequest;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderCreateRequest\bookTrainInfos\bookTicketInfos;
use AlibabaCloud\Tea\Model;

class bookTrainInfos extends Model
{
    /**
     * @example BDC
     *
     * @var string
     */
    public $arrStationCode;

    /**
     * @var bookTicketInfos[]
     */
    public $bookTicketInfos;

    /**
     * @example 1T
     *
     * @var string
     */
    public $chooseBeds;

    /**
     * @example 1T
     *
     * @var string
     */
    public $chooseSeats;

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
     * @example K123456
     *
     * @var string
     */
    public $trainNo;
    protected $_name = [
        'arrStationCode'  => 'arr_station_code',
        'bookTicketInfos' => 'book_ticket_infos',
        'chooseBeds'      => 'choose_beds',
        'chooseSeats'     => 'choose_seats',
        'depStationCode'  => 'dep_station_code',
        'depTime'         => 'dep_time',
        'trainNo'         => 'train_no',
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
        if (null !== $this->bookTicketInfos) {
            $res['book_ticket_infos'] = [];
            if (null !== $this->bookTicketInfos && \is_array($this->bookTicketInfos)) {
                $n = 0;
                foreach ($this->bookTicketInfos as $item) {
                    $res['book_ticket_infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->chooseBeds) {
            $res['choose_beds'] = $this->chooseBeds;
        }
        if (null !== $this->chooseSeats) {
            $res['choose_seats'] = $this->chooseSeats;
        }
        if (null !== $this->depStationCode) {
            $res['dep_station_code'] = $this->depStationCode;
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
     * @return bookTrainInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_station_code'])) {
            $model->arrStationCode = $map['arr_station_code'];
        }
        if (isset($map['book_ticket_infos'])) {
            if (!empty($map['book_ticket_infos'])) {
                $model->bookTicketInfos = [];
                $n                      = 0;
                foreach ($map['book_ticket_infos'] as $item) {
                    $model->bookTicketInfos[$n++] = null !== $item ? bookTicketInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['choose_beds'])) {
            $model->chooseBeds = $map['choose_beds'];
        }
        if (isset($map['choose_seats'])) {
            $model->chooseSeats = $map['choose_seats'];
        }
        if (isset($map['dep_station_code'])) {
            $model->depStationCode = $map['dep_station_code'];
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

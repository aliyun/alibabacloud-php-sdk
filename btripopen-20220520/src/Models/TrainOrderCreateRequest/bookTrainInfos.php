<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderCreateRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderCreateRequest\bookTrainInfos\bookTicketInfos;

class bookTrainInfos extends Model
{
    /**
     * @var string
     */
    public $arrStationCode;

    /**
     * @var bookTicketInfos[]
     */
    public $bookTicketInfos;

    /**
     * @var string
     */
    public $chooseBeds;

    /**
     * @var string
     */
    public $chooseSeats;

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
    public $trainNo;
    protected $_name = [
        'arrStationCode' => 'arr_station_code',
        'bookTicketInfos' => 'book_ticket_infos',
        'chooseBeds' => 'choose_beds',
        'chooseSeats' => 'choose_seats',
        'depStationCode' => 'dep_station_code',
        'depTime' => 'dep_time',
        'trainNo' => 'train_no',
    ];

    public function validate()
    {
        if (\is_array($this->bookTicketInfos)) {
            Model::validateArray($this->bookTicketInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrStationCode) {
            $res['arr_station_code'] = $this->arrStationCode;
        }

        if (null !== $this->bookTicketInfos) {
            if (\is_array($this->bookTicketInfos)) {
                $res['book_ticket_infos'] = [];
                $n1 = 0;
                foreach ($this->bookTicketInfos as $item1) {
                    $res['book_ticket_infos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (isset($map['book_ticket_infos'])) {
            if (!empty($map['book_ticket_infos'])) {
                $model->bookTicketInfos = [];
                $n1 = 0;
                foreach ($map['book_ticket_infos'] as $item1) {
                    $model->bookTicketInfos[$n1] = bookTicketInfos::fromMap($item1);
                    ++$n1;
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

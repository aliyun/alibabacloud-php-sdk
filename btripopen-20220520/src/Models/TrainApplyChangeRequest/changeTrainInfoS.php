<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainApplyChangeRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainApplyChangeRequest\changeTrainInfoS\changeTicketInfoS;

class changeTrainInfoS extends Model
{
    /**
     * @var string
     */
    public $arrStationCode;

    /**
     * @var changeTicketInfoS[]
     */
    public $changeTicketInfoS;

    /**
     * @var string
     */
    public $chooseBedS;

    /**
     * @var string
     */
    public $chooseSeatS;

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
     * @var string
     */
    public $trainNo;
    protected $_name = [
        'arrStationCode' => 'arr_station_code',
        'changeTicketInfoS' => 'change_ticket_info_s',
        'chooseBedS' => 'choose_bed_s',
        'chooseSeatS' => 'choose_seat_s',
        'depStationCode' => 'dep_station_code',
        'depTime' => 'dep_time',
        'originalDepTime' => 'original_dep_time',
        'originalTrainNo' => 'original_train_no',
        'trainNo' => 'train_no',
    ];

    public function validate()
    {
        if (\is_array($this->changeTicketInfoS)) {
            Model::validateArray($this->changeTicketInfoS);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrStationCode) {
            $res['arr_station_code'] = $this->arrStationCode;
        }

        if (null !== $this->changeTicketInfoS) {
            if (\is_array($this->changeTicketInfoS)) {
                $res['change_ticket_info_s'] = [];
                $n1 = 0;
                foreach ($this->changeTicketInfoS as $item1) {
                    $res['change_ticket_info_s'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (isset($map['change_ticket_info_s'])) {
            if (!empty($map['change_ticket_info_s'])) {
                $model->changeTicketInfoS = [];
                $n1 = 0;
                foreach ($map['change_ticket_info_s'] as $item1) {
                    $model->changeTicketInfoS[$n1] = changeTicketInfoS::fromMap($item1);
                    ++$n1;
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\bookInfos;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\bookInfos\bookTrainInfos\bookTicketInfos;

class bookTrainInfos extends Model
{
    /**
     * @var string
     */
    public $arrStationCode;

    /**
     * @var string
     */
    public $arrStationName;

    /**
     * @var string
     */
    public $arriveTime;

    /**
     * @var bookTicketInfos[]
     */
    public $bookTicketInfos;

    /**
     * @var string
     */
    public $depStationCode;

    /**
     * @var string
     */
    public $depStationName;

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
        'arrStationName' => 'arr_station_name',
        'arriveTime' => 'arrive_time',
        'bookTicketInfos' => 'book_ticket_infos',
        'depStationCode' => 'dep_station_code',
        'depStationName' => 'dep_station_name',
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

        if (null !== $this->arrStationName) {
            $res['arr_station_name'] = $this->arrStationName;
        }

        if (null !== $this->arriveTime) {
            $res['arrive_time'] = $this->arriveTime;
        }

        if (null !== $this->bookTicketInfos) {
            if (\is_array($this->bookTicketInfos)) {
                $res['book_ticket_infos'] = [];
                $n1 = 0;
                foreach ($this->bookTicketInfos as $item1) {
                    $res['book_ticket_infos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['arr_station_name'])) {
            $model->arrStationName = $map['arr_station_name'];
        }

        if (isset($map['arrive_time'])) {
            $model->arriveTime = $map['arrive_time'];
        }

        if (isset($map['book_ticket_infos'])) {
            if (!empty($map['book_ticket_infos'])) {
                $model->bookTicketInfos = [];
                $n1 = 0;
                foreach ($map['book_ticket_infos'] as $item1) {
                    $model->bookTicketInfos[$n1++] = bookTicketInfos::fromMap($item1);
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

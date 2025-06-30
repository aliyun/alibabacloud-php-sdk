<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingApplyRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingApplyRequest\modifyFlightInfoList\passengerInfoList;

class modifyFlightInfoList extends Model
{
    /**
     * @var string
     */
    public $arrCity;

    /**
     * @var string
     */
    public $cabin;

    /**
     * @var string
     */
    public $depCity;

    /**
     * @var string
     */
    public $depDate;

    /**
     * @var string
     */
    public $flightNo;

    /**
     * @var passengerInfoList[]
     */
    public $passengerInfoList;
    protected $_name = [
        'arrCity' => 'arr_city',
        'cabin' => 'cabin',
        'depCity' => 'dep_city',
        'depDate' => 'dep_date',
        'flightNo' => 'flight_no',
        'passengerInfoList' => 'passenger_info_list',
    ];

    public function validate()
    {
        if (\is_array($this->passengerInfoList)) {
            Model::validateArray($this->passengerInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrCity) {
            $res['arr_city'] = $this->arrCity;
        }

        if (null !== $this->cabin) {
            $res['cabin'] = $this->cabin;
        }

        if (null !== $this->depCity) {
            $res['dep_city'] = $this->depCity;
        }

        if (null !== $this->depDate) {
            $res['dep_date'] = $this->depDate;
        }

        if (null !== $this->flightNo) {
            $res['flight_no'] = $this->flightNo;
        }

        if (null !== $this->passengerInfoList) {
            if (\is_array($this->passengerInfoList)) {
                $res['passenger_info_list'] = [];
                $n1 = 0;
                foreach ($this->passengerInfoList as $item1) {
                    $res['passenger_info_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['arr_city'])) {
            $model->arrCity = $map['arr_city'];
        }

        if (isset($map['cabin'])) {
            $model->cabin = $map['cabin'];
        }

        if (isset($map['dep_city'])) {
            $model->depCity = $map['dep_city'];
        }

        if (isset($map['dep_date'])) {
            $model->depDate = $map['dep_date'];
        }

        if (isset($map['flight_no'])) {
            $model->flightNo = $map['flight_no'];
        }

        if (isset($map['passenger_info_list'])) {
            if (!empty($map['passenger_info_list'])) {
                $model->passengerInfoList = [];
                $n1 = 0;
                foreach ($map['passenger_info_list'] as $item1) {
                    $model->passengerInfoList[$n1] = passengerInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

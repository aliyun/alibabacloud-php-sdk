<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingApplyRequest;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingApplyRequest\modifyFlightInfoList\passengerInfoList;
use AlibabaCloud\Tea\Model;

class modifyFlightInfoList extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example BJS
     *
     * @var string
     */
    public $arrCity;

    /**
     * @example Y
     *
     * @var string
     */
    public $cabin;

    /**
     * @description This parameter is required.
     *
     * @example HGH
     *
     * @var string
     */
    public $depCity;

    /**
     * @description This parameter is required.
     *
     * @example 0000-00-00 00:00:00
     *
     * @var string
     */
    public $depDate;

    /**
     * @description This parameter is required.
     *
     * @example CA1704
     *
     * @var string
     */
    public $flightNo;

    /**
     * @description This parameter is required.
     *
     * @var passengerInfoList[]
     */
    public $passengerInfoList;
    protected $_name = [
        'arrCity'           => 'arr_city',
        'cabin'             => 'cabin',
        'depCity'           => 'dep_city',
        'depDate'           => 'dep_date',
        'flightNo'          => 'flight_no',
        'passengerInfoList' => 'passenger_info_list',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['passenger_info_list'] = [];
            if (null !== $this->passengerInfoList && \is_array($this->passengerInfoList)) {
                $n = 0;
                foreach ($this->passengerInfoList as $item) {
                    $res['passenger_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modifyFlightInfoList
     */
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
                $n                        = 0;
                foreach ($map['passenger_info_list'] as $item) {
                    $model->passengerInfoList[$n++] = null !== $item ? passengerInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

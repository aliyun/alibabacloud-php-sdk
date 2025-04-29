<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\transferInfo\transferAirlineInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\transferInfo\transferArrAirportInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\transferInfo\transferDepAirportInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\transferInfo\transferFlightRuleList;

class transferInfo extends Model
{
    /**
     * @var string
     */
    public $flightSize;

    /**
     * @var string
     */
    public $flightType;

    /**
     * @var transferAirlineInfo
     */
    public $transferAirlineInfo;

    /**
     * @var transferArrAirportInfo
     */
    public $transferArrAirportInfo;

    /**
     * @var string
     */
    public $transferArrDate;

    /**
     * @var transferDepAirportInfo
     */
    public $transferDepAirportInfo;

    /**
     * @var string
     */
    public $transferDepDate;

    /**
     * @var string
     */
    public $transferFlightNo;

    /**
     * @var transferFlightRuleList[]
     */
    public $transferFlightRuleList;
    protected $_name = [
        'flightSize' => 'flight_size',
        'flightType' => 'flight_type',
        'transferAirlineInfo' => 'transfer_airline_info',
        'transferArrAirportInfo' => 'transfer_arr_airport_info',
        'transferArrDate' => 'transfer_arr_date',
        'transferDepAirportInfo' => 'transfer_dep_airport_info',
        'transferDepDate' => 'transfer_dep_date',
        'transferFlightNo' => 'transfer_flight_no',
        'transferFlightRuleList' => 'transfer_flight_rule_list',
    ];

    public function validate()
    {
        if (null !== $this->transferAirlineInfo) {
            $this->transferAirlineInfo->validate();
        }
        if (null !== $this->transferArrAirportInfo) {
            $this->transferArrAirportInfo->validate();
        }
        if (null !== $this->transferDepAirportInfo) {
            $this->transferDepAirportInfo->validate();
        }
        if (\is_array($this->transferFlightRuleList)) {
            Model::validateArray($this->transferFlightRuleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flightSize) {
            $res['flight_size'] = $this->flightSize;
        }

        if (null !== $this->flightType) {
            $res['flight_type'] = $this->flightType;
        }

        if (null !== $this->transferAirlineInfo) {
            $res['transfer_airline_info'] = null !== $this->transferAirlineInfo ? $this->transferAirlineInfo->toArray($noStream) : $this->transferAirlineInfo;
        }

        if (null !== $this->transferArrAirportInfo) {
            $res['transfer_arr_airport_info'] = null !== $this->transferArrAirportInfo ? $this->transferArrAirportInfo->toArray($noStream) : $this->transferArrAirportInfo;
        }

        if (null !== $this->transferArrDate) {
            $res['transfer_arr_date'] = $this->transferArrDate;
        }

        if (null !== $this->transferDepAirportInfo) {
            $res['transfer_dep_airport_info'] = null !== $this->transferDepAirportInfo ? $this->transferDepAirportInfo->toArray($noStream) : $this->transferDepAirportInfo;
        }

        if (null !== $this->transferDepDate) {
            $res['transfer_dep_date'] = $this->transferDepDate;
        }

        if (null !== $this->transferFlightNo) {
            $res['transfer_flight_no'] = $this->transferFlightNo;
        }

        if (null !== $this->transferFlightRuleList) {
            if (\is_array($this->transferFlightRuleList)) {
                $res['transfer_flight_rule_list'] = [];
                $n1 = 0;
                foreach ($this->transferFlightRuleList as $item1) {
                    $res['transfer_flight_rule_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['flight_size'])) {
            $model->flightSize = $map['flight_size'];
        }

        if (isset($map['flight_type'])) {
            $model->flightType = $map['flight_type'];
        }

        if (isset($map['transfer_airline_info'])) {
            $model->transferAirlineInfo = transferAirlineInfo::fromMap($map['transfer_airline_info']);
        }

        if (isset($map['transfer_arr_airport_info'])) {
            $model->transferArrAirportInfo = transferArrAirportInfo::fromMap($map['transfer_arr_airport_info']);
        }

        if (isset($map['transfer_arr_date'])) {
            $model->transferArrDate = $map['transfer_arr_date'];
        }

        if (isset($map['transfer_dep_airport_info'])) {
            $model->transferDepAirportInfo = transferDepAirportInfo::fromMap($map['transfer_dep_airport_info']);
        }

        if (isset($map['transfer_dep_date'])) {
            $model->transferDepDate = $map['transfer_dep_date'];
        }

        if (isset($map['transfer_flight_no'])) {
            $model->transferFlightNo = $map['transfer_flight_no'];
        }

        if (isset($map['transfer_flight_rule_list'])) {
            if (!empty($map['transfer_flight_rule_list'])) {
                $model->transferFlightRuleList = [];
                $n1 = 0;
                foreach ($map['transfer_flight_rule_list'] as $item1) {
                    $model->transferFlightRuleList[$n1++] = transferFlightRuleList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\transferInfo\transferAirlineInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\transferInfo\transferArrAirportInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\transferInfo\transferDepAirportInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\transferInfo\transferFlightRuleList;
use AlibabaCloud\Tea\Model;

class transferInfo extends Model
{
    /**
     * @var string
     */
    public $flightSize;

    /**
     * @example demo
     *
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
     * @example yyyy-MM-dd HH:mm:ss
     *
     * @var string
     */
    public $transferArrDate;

    /**
     * @var transferDepAirportInfo
     */
    public $transferDepAirportInfo;

    /**
     * @example yyyy-MM-dd HH:mm:ss
     *
     * @var string
     */
    public $transferDepDate;

    /**
     * @example CA1234
     *
     * @var string
     */
    public $transferFlightNo;

    /**
     * @var transferFlightRuleList[]
     */
    public $transferFlightRuleList;
    protected $_name = [
        'flightSize'             => 'flight_size',
        'flightType'             => 'flight_type',
        'transferAirlineInfo'    => 'transfer_airline_info',
        'transferArrAirportInfo' => 'transfer_arr_airport_info',
        'transferArrDate'        => 'transfer_arr_date',
        'transferDepAirportInfo' => 'transfer_dep_airport_info',
        'transferDepDate'        => 'transfer_dep_date',
        'transferFlightNo'       => 'transfer_flight_no',
        'transferFlightRuleList' => 'transfer_flight_rule_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flightSize) {
            $res['flight_size'] = $this->flightSize;
        }
        if (null !== $this->flightType) {
            $res['flight_type'] = $this->flightType;
        }
        if (null !== $this->transferAirlineInfo) {
            $res['transfer_airline_info'] = null !== $this->transferAirlineInfo ? $this->transferAirlineInfo->toMap() : null;
        }
        if (null !== $this->transferArrAirportInfo) {
            $res['transfer_arr_airport_info'] = null !== $this->transferArrAirportInfo ? $this->transferArrAirportInfo->toMap() : null;
        }
        if (null !== $this->transferArrDate) {
            $res['transfer_arr_date'] = $this->transferArrDate;
        }
        if (null !== $this->transferDepAirportInfo) {
            $res['transfer_dep_airport_info'] = null !== $this->transferDepAirportInfo ? $this->transferDepAirportInfo->toMap() : null;
        }
        if (null !== $this->transferDepDate) {
            $res['transfer_dep_date'] = $this->transferDepDate;
        }
        if (null !== $this->transferFlightNo) {
            $res['transfer_flight_no'] = $this->transferFlightNo;
        }
        if (null !== $this->transferFlightRuleList) {
            $res['transfer_flight_rule_list'] = [];
            if (null !== $this->transferFlightRuleList && \is_array($this->transferFlightRuleList)) {
                $n = 0;
                foreach ($this->transferFlightRuleList as $item) {
                    $res['transfer_flight_rule_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transferInfo
     */
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
                $n                             = 0;
                foreach ($map['transfer_flight_rule_list'] as $item) {
                    $model->transferFlightRuleList[$n++] = null !== $item ? transferFlightRuleList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2ResponseBody\module\transferFlightList;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2ResponseBody\module\transferFlightList\flightTransferInfo\transferAirlineInfo;
use AlibabaCloud\Tea\Model;

class flightTransferInfo extends Model
{
    /**
     * @var transferAirlineInfo
     */
    public $transferAirlineInfo;

    /**
     * @var string
     */
    public $transferCityCode;

    /**
     * @var string
     */
    public $transferCityName;

    /**
     * @var string
     */
    public $transferDepTime;

    /**
     * @var string
     */
    public $transferFlightNo;

    /**
     * @var string
     */
    public $transferFlightSize;

    /**
     * @example false
     *
     * @var bool
     */
    public $transferShare;

    /**
     * @example 20
     *
     * @var int
     */
    public $transferStopTime;
    protected $_name = [
        'transferAirlineInfo' => 'transfer_airline_info',
        'transferCityCode'    => 'transfer_city_code',
        'transferCityName'    => 'transfer_city_name',
        'transferDepTime'     => 'transfer_dep_time',
        'transferFlightNo'    => 'transfer_flight_no',
        'transferFlightSize'  => 'transfer_flight_size',
        'transferShare'       => 'transfer_share',
        'transferStopTime'    => 'transfer_stop_time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->transferAirlineInfo) {
            $res['transfer_airline_info'] = null !== $this->transferAirlineInfo ? $this->transferAirlineInfo->toMap() : null;
        }
        if (null !== $this->transferCityCode) {
            $res['transfer_city_code'] = $this->transferCityCode;
        }
        if (null !== $this->transferCityName) {
            $res['transfer_city_name'] = $this->transferCityName;
        }
        if (null !== $this->transferDepTime) {
            $res['transfer_dep_time'] = $this->transferDepTime;
        }
        if (null !== $this->transferFlightNo) {
            $res['transfer_flight_no'] = $this->transferFlightNo;
        }
        if (null !== $this->transferFlightSize) {
            $res['transfer_flight_size'] = $this->transferFlightSize;
        }
        if (null !== $this->transferShare) {
            $res['transfer_share'] = $this->transferShare;
        }
        if (null !== $this->transferStopTime) {
            $res['transfer_stop_time'] = $this->transferStopTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightTransferInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['transfer_airline_info'])) {
            $model->transferAirlineInfo = transferAirlineInfo::fromMap($map['transfer_airline_info']);
        }
        if (isset($map['transfer_city_code'])) {
            $model->transferCityCode = $map['transfer_city_code'];
        }
        if (isset($map['transfer_city_name'])) {
            $model->transferCityName = $map['transfer_city_name'];
        }
        if (isset($map['transfer_dep_time'])) {
            $model->transferDepTime = $map['transfer_dep_time'];
        }
        if (isset($map['transfer_flight_no'])) {
            $model->transferFlightNo = $map['transfer_flight_no'];
        }
        if (isset($map['transfer_flight_size'])) {
            $model->transferFlightSize = $map['transfer_flight_size'];
        }
        if (isset($map['transfer_share'])) {
            $model->transferShare = $map['transfer_share'];
        }
        if (isset($map['transfer_stop_time'])) {
            $model->transferStopTime = $map['transfer_stop_time'];
        }

        return $model;
    }
}

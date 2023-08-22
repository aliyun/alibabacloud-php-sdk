<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody\module\flightSegmentInfos;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody\module\flightSegmentInfos\flightSharedInfo\operatingAirlineInfo;
use AlibabaCloud\Tea\Model;

class flightSharedInfo extends Model
{
    /**
     * @var string
     */
    public $operatingFlightNo;

    /**
     * @var operatingAirlineInfo
     */
    public $operatingAirlineInfo;
    protected $_name = [
        'operatingFlightNo'    => 'operating_flight_no',
        'operatingAirlineInfo' => 'operating_airline_info',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operatingFlightNo) {
            $res['operating_flight_no'] = $this->operatingFlightNo;
        }
        if (null !== $this->operatingAirlineInfo) {
            $res['operating_airline_info'] = null !== $this->operatingAirlineInfo ? $this->operatingAirlineInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightSharedInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['operating_flight_no'])) {
            $model->operatingFlightNo = $map['operating_flight_no'];
        }
        if (isset($map['operating_airline_info'])) {
            $model->operatingAirlineInfo = operatingAirlineInfo::fromMap($map['operating_airline_info']);
        }

        return $model;
    }
}

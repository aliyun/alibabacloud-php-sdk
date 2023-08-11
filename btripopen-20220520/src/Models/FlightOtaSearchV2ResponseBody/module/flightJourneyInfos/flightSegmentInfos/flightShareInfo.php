<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchV2ResponseBody\module\flightJourneyInfos\flightSegmentInfos;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchV2ResponseBody\module\flightJourneyInfos\flightSegmentInfos\flightShareInfo\operatingAirlineInfo;
use AlibabaCloud\Tea\Model;

class flightShareInfo extends Model
{
    /**
     * @var operatingAirlineInfo
     */
    public $operatingAirlineInfo;

    /**
     * @example CX601
     *
     * @var string
     */
    public $operatingFlightNo;
    protected $_name = [
        'operatingAirlineInfo' => 'operating_airline_info',
        'operatingFlightNo'    => 'operating_flight_no',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operatingAirlineInfo) {
            $res['operating_airline_info'] = null !== $this->operatingAirlineInfo ? $this->operatingAirlineInfo->toMap() : null;
        }
        if (null !== $this->operatingFlightNo) {
            $res['operating_flight_no'] = $this->operatingFlightNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightShareInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['operating_airline_info'])) {
            $model->operatingAirlineInfo = operatingAirlineInfo::fromMap($map['operating_airline_info']);
        }
        if (isset($map['operating_flight_no'])) {
            $model->operatingFlightNo = $map['operating_flight_no'];
        }

        return $model;
    }
}

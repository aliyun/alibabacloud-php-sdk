<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody\module\flightSegmentInfos;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody\module\flightSegmentInfos\flightSharedInfo\operatingAirlineInfo;

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
        'operatingFlightNo' => 'operating_flight_no',
        'operatingAirlineInfo' => 'operating_airline_info',
    ];

    public function validate()
    {
        if (null !== $this->operatingAirlineInfo) {
            $this->operatingAirlineInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operatingFlightNo) {
            $res['operating_flight_no'] = $this->operatingFlightNo;
        }

        if (null !== $this->operatingAirlineInfo) {
            $res['operating_airline_info'] = null !== $this->operatingAirlineInfo ? $this->operatingAirlineInfo->toArray($noStream) : $this->operatingAirlineInfo;
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
        if (isset($map['operating_flight_no'])) {
            $model->operatingFlightNo = $map['operating_flight_no'];
        }

        if (isset($map['operating_airline_info'])) {
            $model->operatingAirlineInfo = operatingAirlineInfo::fromMap($map['operating_airline_info']);
        }

        return $model;
    }
}

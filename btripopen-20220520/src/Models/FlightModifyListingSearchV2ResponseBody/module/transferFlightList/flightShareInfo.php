<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2ResponseBody\module\transferFlightList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2ResponseBody\module\transferFlightList\flightShareInfo\operatingAirlineInfo;

class flightShareInfo extends Model
{
    /**
     * @var operatingAirlineInfo
     */
    public $operatingAirlineInfo;

    /**
     * @var string
     */
    public $operatingFlightNo;
    protected $_name = [
        'operatingAirlineInfo' => 'operating_airline_info',
        'operatingFlightNo' => 'operating_flight_no',
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
        if (null !== $this->operatingAirlineInfo) {
            $res['operating_airline_info'] = null !== $this->operatingAirlineInfo ? $this->operatingAirlineInfo->toArray($noStream) : $this->operatingAirlineInfo;
        }

        if (null !== $this->operatingFlightNo) {
            $res['operating_flight_no'] = $this->operatingFlightNo;
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
        if (isset($map['operating_airline_info'])) {
            $model->operatingAirlineInfo = operatingAirlineInfo::fromMap($map['operating_airline_info']);
        }

        if (isset($map['operating_flight_no'])) {
            $model->operatingFlightNo = $map['operating_flight_no'];
        }

        return $model;
    }
}

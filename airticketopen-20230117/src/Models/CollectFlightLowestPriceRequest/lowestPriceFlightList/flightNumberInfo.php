<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\CollectFlightLowestPriceRequest\lowestPriceFlightList;

use AlibabaCloud\Tea\Model;

class flightNumberInfo extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example CA123,CA456
     *
     * @var string
     */
    public $departureFlightNumber;

    /**
     * @example CA123,CA456
     *
     * @var string
     */
    public $returnFlightNumber;
    protected $_name = [
        'departureFlightNumber' => 'departure_flight_number',
        'returnFlightNumber'    => 'return_flight_number',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->departureFlightNumber) {
            $res['departure_flight_number'] = $this->departureFlightNumber;
        }
        if (null !== $this->returnFlightNumber) {
            $res['return_flight_number'] = $this->returnFlightNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightNumberInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['departure_flight_number'])) {
            $model->departureFlightNumber = $map['departure_flight_number'];
        }
        if (isset($map['return_flight_number'])) {
            $model->returnFlightNumber = $map['return_flight_number'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\SearchRequest;

use AlibabaCloud\Tea\Model;

class airLegs extends Model
{
    /**
     * @example MFM
     *
     * @var string[]
     */
    public $arrivalAirportList;

    /**
     * @example MFM
     *
     * @var string
     */
    public $arrivalCity;

    /**
     * @example PVG
     *
     * @var string[]
     */
    public $departureAirportList;

    /**
     * @example SHA
     *
     * @var string
     */
    public $departureCity;

    /**
     * @example 20230310
     *
     * @var string
     */
    public $departureDate;
    protected $_name = [
        'arrivalAirportList'   => 'arrival_airport_list',
        'arrivalCity'          => 'arrival_city',
        'departureAirportList' => 'departure_airport_list',
        'departureCity'        => 'departure_city',
        'departureDate'        => 'departure_date',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrivalAirportList) {
            $res['arrival_airport_list'] = $this->arrivalAirportList;
        }
        if (null !== $this->arrivalCity) {
            $res['arrival_city'] = $this->arrivalCity;
        }
        if (null !== $this->departureAirportList) {
            $res['departure_airport_list'] = $this->departureAirportList;
        }
        if (null !== $this->departureCity) {
            $res['departure_city'] = $this->departureCity;
        }
        if (null !== $this->departureDate) {
            $res['departure_date'] = $this->departureDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return airLegs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arrival_airport_list'])) {
            if (!empty($map['arrival_airport_list'])) {
                $model->arrivalAirportList = $map['arrival_airport_list'];
            }
        }
        if (isset($map['arrival_city'])) {
            $model->arrivalCity = $map['arrival_city'];
        }
        if (isset($map['departure_airport_list'])) {
            if (!empty($map['departure_airport_list'])) {
                $model->departureAirportList = $map['departure_airport_list'];
            }
        }
        if (isset($map['departure_city'])) {
            $model->departureCity = $map['departure_city'];
        }
        if (isset($map['departure_date'])) {
            $model->departureDate = $map['departure_date'];
        }

        return $model;
    }
}

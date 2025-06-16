<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundApplyRequest\refundJourneys;

use AlibabaCloud\Dara\Model;

class segmentList extends Model
{
    /**
     * @var string
     */
    public $arrivalAirport;

    /**
     * @var string
     */
    public $arrivalCity;

    /**
     * @var string
     */
    public $departureAirport;

    /**
     * @var string
     */
    public $departureCity;
    protected $_name = [
        'arrivalAirport' => 'arrival_airport',
        'arrivalCity' => 'arrival_city',
        'departureAirport' => 'departure_airport',
        'departureCity' => 'departure_city',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrivalAirport) {
            $res['arrival_airport'] = $this->arrivalAirport;
        }

        if (null !== $this->arrivalCity) {
            $res['arrival_city'] = $this->arrivalCity;
        }

        if (null !== $this->departureAirport) {
            $res['departure_airport'] = $this->departureAirport;
        }

        if (null !== $this->departureCity) {
            $res['departure_city'] = $this->departureCity;
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
        if (isset($map['arrival_airport'])) {
            $model->arrivalAirport = $map['arrival_airport'];
        }

        if (isset($map['arrival_city'])) {
            $model->arrivalCity = $map['arrival_city'];
        }

        if (isset($map['departure_airport'])) {
            $model->departureAirport = $map['departure_airport'];
        }

        if (isset($map['departure_city'])) {
            $model->departureCity = $map['departure_city'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\StandardSearchRequest;

use AlibabaCloud\Dara\Model;

class airLegs extends Model
{
    /**
     * @var string[]
     */
    public $arrivalAirportList;

    /**
     * @var string
     */
    public $arrivalCity;

    /**
     * @var string[]
     */
    public $departureAirportList;

    /**
     * @var string
     */
    public $departureCity;

    /**
     * @var string
     */
    public $departureDate;
    protected $_name = [
        'arrivalAirportList' => 'arrival_airport_list',
        'arrivalCity' => 'arrival_city',
        'departureAirportList' => 'departure_airport_list',
        'departureCity' => 'departure_city',
        'departureDate' => 'departure_date',
    ];

    public function validate()
    {
        if (\is_array($this->arrivalAirportList)) {
            Model::validateArray($this->arrivalAirportList);
        }
        if (\is_array($this->departureAirportList)) {
            Model::validateArray($this->departureAirportList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrivalAirportList) {
            if (\is_array($this->arrivalAirportList)) {
                $res['arrival_airport_list'] = [];
                $n1 = 0;
                foreach ($this->arrivalAirportList as $item1) {
                    $res['arrival_airport_list'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->arrivalCity) {
            $res['arrival_city'] = $this->arrivalCity;
        }

        if (null !== $this->departureAirportList) {
            if (\is_array($this->departureAirportList)) {
                $res['departure_airport_list'] = [];
                $n1 = 0;
                foreach ($this->departureAirportList as $item1) {
                    $res['departure_airport_list'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->departureCity) {
            $res['departure_city'] = $this->departureCity;
        }

        if (null !== $this->departureDate) {
            $res['departure_date'] = $this->departureDate;
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
        if (isset($map['arrival_airport_list'])) {
            if (!empty($map['arrival_airport_list'])) {
                $model->arrivalAirportList = [];
                $n1 = 0;
                foreach ($map['arrival_airport_list'] as $item1) {
                    $model->arrivalAirportList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['arrival_city'])) {
            $model->arrivalCity = $map['arrival_city'];
        }

        if (isset($map['departure_airport_list'])) {
            if (!empty($map['departure_airport_list'])) {
                $model->departureAirportList = [];
                $n1 = 0;
                foreach ($map['departure_airport_list'] as $item1) {
                    $model->departureAirportList[$n1] = $item1;
                    ++$n1;
                }
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchV2Request;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchV2Request\searchJourneys\selectedFlights;

class searchJourneys extends Model
{
    /**
     * @var string
     */
    public $arrCityCode;

    /**
     * @var string
     */
    public $depCityCode;

    /**
     * @var string
     */
    public $depDate;

    /**
     * @var selectedFlights[]
     */
    public $selectedFlights;
    protected $_name = [
        'arrCityCode' => 'arr_city_code',
        'depCityCode' => 'dep_city_code',
        'depDate' => 'dep_date',
        'selectedFlights' => 'selected_flights',
    ];

    public function validate()
    {
        if (\is_array($this->selectedFlights)) {
            Model::validateArray($this->selectedFlights);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrCityCode) {
            $res['arr_city_code'] = $this->arrCityCode;
        }

        if (null !== $this->depCityCode) {
            $res['dep_city_code'] = $this->depCityCode;
        }

        if (null !== $this->depDate) {
            $res['dep_date'] = $this->depDate;
        }

        if (null !== $this->selectedFlights) {
            if (\is_array($this->selectedFlights)) {
                $res['selected_flights'] = [];
                $n1 = 0;
                foreach ($this->selectedFlights as $item1) {
                    $res['selected_flights'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['arr_city_code'])) {
            $model->arrCityCode = $map['arr_city_code'];
        }

        if (isset($map['dep_city_code'])) {
            $model->depCityCode = $map['dep_city_code'];
        }

        if (isset($map['dep_date'])) {
            $model->depDate = $map['dep_date'];
        }

        if (isset($map['selected_flights'])) {
            if (!empty($map['selected_flights'])) {
                $model->selectedFlights = [];
                $n1 = 0;
                foreach ($map['selected_flights'] as $item1) {
                    $model->selectedFlights[$n1++] = selectedFlights::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

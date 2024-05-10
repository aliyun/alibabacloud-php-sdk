<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2Request;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2Request\searchJourneys\selectedFlights;
use AlibabaCloud\Tea\Model;

class searchJourneys extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example HGH
     *
     * @var string
     */
    public $arrCityCode;

    /**
     * @description This parameter is required.
     *
     * @example BJS
     *
     * @var string
     */
    public $depCityCode;

    /**
     * @description This parameter is required.
     *
     * @example 2023-09-01
     *
     * @var string
     */
    public $depDate;

    /**
     * @var selectedFlights[]
     */
    public $selectedFlights;
    protected $_name = [
        'arrCityCode'     => 'arr_city_code',
        'depCityCode'     => 'dep_city_code',
        'depDate'         => 'dep_date',
        'selectedFlights' => 'selected_flights',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['selected_flights'] = [];
            if (null !== $this->selectedFlights && \is_array($this->selectedFlights)) {
                $n = 0;
                foreach ($this->selectedFlights as $item) {
                    $res['selected_flights'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return searchJourneys
     */
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
                $n                      = 0;
                foreach ($map['selected_flights'] as $item) {
                    $model->selectedFlights[$n++] = null !== $item ? selectedFlights::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class FlightListingSearchRequest extends Model
{
    /**
     * @example MU
     *
     * @var string
     */
    public $airlineCode;

    /**
     * @description This parameter is required.
     *
     * @example HGH
     *
     * @var string
     */
    public $arrCityCode;

    /**
     * @example Y
     *
     * @var string
     */
    public $cabinClass;

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
     * @example 2023-02-26
     *
     * @var string
     */
    public $depDate;
    protected $_name = [
        'airlineCode' => 'airline_code',
        'arrCityCode' => 'arr_city_code',
        'cabinClass'  => 'cabin_class',
        'depCityCode' => 'dep_city_code',
        'depDate'     => 'dep_date',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->airlineCode) {
            $res['airline_code'] = $this->airlineCode;
        }
        if (null !== $this->arrCityCode) {
            $res['arr_city_code'] = $this->arrCityCode;
        }
        if (null !== $this->cabinClass) {
            $res['cabin_class'] = $this->cabinClass;
        }
        if (null !== $this->depCityCode) {
            $res['dep_city_code'] = $this->depCityCode;
        }
        if (null !== $this->depDate) {
            $res['dep_date'] = $this->depDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FlightListingSearchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['airline_code'])) {
            $model->airlineCode = $map['airline_code'];
        }
        if (isset($map['arr_city_code'])) {
            $model->arrCityCode = $map['arr_city_code'];
        }
        if (isset($map['cabin_class'])) {
            $model->cabinClass = $map['cabin_class'];
        }
        if (isset($map['dep_city_code'])) {
            $model->depCityCode = $map['dep_city_code'];
        }
        if (isset($map['dep_date'])) {
            $model->depDate = $map['dep_date'];
        }

        return $model;
    }
}

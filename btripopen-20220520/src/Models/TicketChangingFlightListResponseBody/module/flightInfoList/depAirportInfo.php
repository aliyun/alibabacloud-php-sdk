<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingFlightListResponseBody\module\flightInfoList;

use AlibabaCloud\Tea\Model;

class depAirportInfo extends Model
{
    /**
     * @example PEK
     *
     * @var string
     */
    public $airportCode;

    /**
     * @var string
     */
    public $airportName;

    /**
     * @example BJS
     *
     * @var string
     */
    public $cityCode;

    /**
     * @var string
     */
    public $cityName;

    /**
     * @example T3
     *
     * @var string
     */
    public $terminal;
    protected $_name = [
        'airportCode' => 'airport_code',
        'airportName' => 'airport_name',
        'cityCode'    => 'city_code',
        'cityName'    => 'city_name',
        'terminal'    => 'terminal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->airportCode) {
            $res['airport_code'] = $this->airportCode;
        }
        if (null !== $this->airportName) {
            $res['airport_name'] = $this->airportName;
        }
        if (null !== $this->cityCode) {
            $res['city_code'] = $this->cityCode;
        }
        if (null !== $this->cityName) {
            $res['city_name'] = $this->cityName;
        }
        if (null !== $this->terminal) {
            $res['terminal'] = $this->terminal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return depAirportInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['airport_code'])) {
            $model->airportCode = $map['airport_code'];
        }
        if (isset($map['airport_name'])) {
            $model->airportName = $map['airport_name'];
        }
        if (isset($map['city_code'])) {
            $model->cityCode = $map['city_code'];
        }
        if (isset($map['city_name'])) {
            $model->cityName = $map['city_name'];
        }
        if (isset($map['terminal'])) {
            $model->terminal = $map['terminal'];
        }

        return $model;
    }
}

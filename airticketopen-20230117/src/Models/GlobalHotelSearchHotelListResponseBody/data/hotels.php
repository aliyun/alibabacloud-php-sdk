<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelSearchHotelListResponseBody\data;

use AlibabaCloud\Dara\Model;

class hotels extends Model
{
    /**
     * @var string
     */
    public $cityName;

    /**
     * @var string
     */
    public $countryName;

    /**
     * @var string
     */
    public $hotelName;

    /**
     * @var string
     */
    public $standardHotelId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'cityName' => 'CityName',
        'countryName' => 'CountryName',
        'hotelName' => 'HotelName',
        'standardHotelId' => 'StandardHotelId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cityName) {
            $res['CityName'] = $this->cityName;
        }

        if (null !== $this->countryName) {
            $res['CountryName'] = $this->countryName;
        }

        if (null !== $this->hotelName) {
            $res['HotelName'] = $this->hotelName;
        }

        if (null !== $this->standardHotelId) {
            $res['StandardHotelId'] = $this->standardHotelId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CityName'])) {
            $model->cityName = $map['CityName'];
        }

        if (isset($map['CountryName'])) {
            $model->countryName = $map['CountryName'];
        }

        if (isset($map['HotelName'])) {
            $model->hotelName = $map['HotelName'];
        }

        if (isset($map['StandardHotelId'])) {
            $model->standardHotelId = $map['StandardHotelId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

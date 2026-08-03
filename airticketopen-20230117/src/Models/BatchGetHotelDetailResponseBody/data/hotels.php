<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BatchGetHotelDetailResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BatchGetHotelDetailResponseBody\data\hotels\facilities;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BatchGetHotelDetailResponseBody\data\hotels\pictures;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BatchGetHotelDetailResponseBody\data\hotels\policies;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BatchGetHotelDetailResponseBody\data\hotels\roomTypes;

class hotels extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $checkInTime;

    /**
     * @var string
     */
    public $checkOutTime;

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
    public $description;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var facilities[]
     */
    public $facilities;

    /**
     * @var string
     */
    public $hotelName;

    /**
     * @var string
     */
    public $hotelNameCn;

    /**
     * @var string
     */
    public $hotelType;

    /**
     * @var string
     */
    public $latitude;

    /**
     * @var string
     */
    public $longitude;

    /**
     * @var int
     */
    public $openingTime;

    /**
     * @var pictures[]
     */
    public $pictures;

    /**
     * @var policies[]
     */
    public $policies;

    /**
     * @var string
     */
    public $positionType;

    /**
     * @var int
     */
    public $renovationTime;

    /**
     * @var roomTypes[]
     */
    public $roomTypes;

    /**
     * @var string
     */
    public $standardHotelId;

    /**
     * @var string
     */
    public $star;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tel;

    /**
     * @var string
     */
    public $timezone;
    protected $_name = [
        'address' => 'Address',
        'checkInTime' => 'CheckInTime',
        'checkOutTime' => 'CheckOutTime',
        'cityName' => 'CityName',
        'countryName' => 'CountryName',
        'description' => 'Description',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'facilities' => 'Facilities',
        'hotelName' => 'HotelName',
        'hotelNameCn' => 'HotelNameCn',
        'hotelType' => 'HotelType',
        'latitude' => 'Latitude',
        'longitude' => 'Longitude',
        'openingTime' => 'OpeningTime',
        'pictures' => 'Pictures',
        'policies' => 'Policies',
        'positionType' => 'PositionType',
        'renovationTime' => 'RenovationTime',
        'roomTypes' => 'RoomTypes',
        'standardHotelId' => 'StandardHotelId',
        'star' => 'Star',
        'status' => 'Status',
        'tel' => 'Tel',
        'timezone' => 'Timezone',
    ];

    public function validate()
    {
        if (\is_array($this->facilities)) {
            Model::validateArray($this->facilities);
        }
        if (\is_array($this->pictures)) {
            Model::validateArray($this->pictures);
        }
        if (\is_array($this->policies)) {
            Model::validateArray($this->policies);
        }
        if (\is_array($this->roomTypes)) {
            Model::validateArray($this->roomTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->checkInTime) {
            $res['CheckInTime'] = $this->checkInTime;
        }

        if (null !== $this->checkOutTime) {
            $res['CheckOutTime'] = $this->checkOutTime;
        }

        if (null !== $this->cityName) {
            $res['CityName'] = $this->cityName;
        }

        if (null !== $this->countryName) {
            $res['CountryName'] = $this->countryName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->facilities) {
            if (\is_array($this->facilities)) {
                $res['Facilities'] = [];
                $n1 = 0;
                foreach ($this->facilities as $item1) {
                    $res['Facilities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hotelName) {
            $res['HotelName'] = $this->hotelName;
        }

        if (null !== $this->hotelNameCn) {
            $res['HotelNameCn'] = $this->hotelNameCn;
        }

        if (null !== $this->hotelType) {
            $res['HotelType'] = $this->hotelType;
        }

        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }

        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }

        if (null !== $this->openingTime) {
            $res['OpeningTime'] = $this->openingTime;
        }

        if (null !== $this->pictures) {
            if (\is_array($this->pictures)) {
                $res['Pictures'] = [];
                $n1 = 0;
                foreach ($this->pictures as $item1) {
                    $res['Pictures'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->policies) {
            if (\is_array($this->policies)) {
                $res['Policies'] = [];
                $n1 = 0;
                foreach ($this->policies as $item1) {
                    $res['Policies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->positionType) {
            $res['PositionType'] = $this->positionType;
        }

        if (null !== $this->renovationTime) {
            $res['RenovationTime'] = $this->renovationTime;
        }

        if (null !== $this->roomTypes) {
            if (\is_array($this->roomTypes)) {
                $res['RoomTypes'] = [];
                $n1 = 0;
                foreach ($this->roomTypes as $item1) {
                    $res['RoomTypes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->standardHotelId) {
            $res['StandardHotelId'] = $this->standardHotelId;
        }

        if (null !== $this->star) {
            $res['Star'] = $this->star;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tel) {
            $res['Tel'] = $this->tel;
        }

        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['CheckInTime'])) {
            $model->checkInTime = $map['CheckInTime'];
        }

        if (isset($map['CheckOutTime'])) {
            $model->checkOutTime = $map['CheckOutTime'];
        }

        if (isset($map['CityName'])) {
            $model->cityName = $map['CityName'];
        }

        if (isset($map['CountryName'])) {
            $model->countryName = $map['CountryName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['Facilities'])) {
            if (!empty($map['Facilities'])) {
                $model->facilities = [];
                $n1 = 0;
                foreach ($map['Facilities'] as $item1) {
                    $model->facilities[$n1] = facilities::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HotelName'])) {
            $model->hotelName = $map['HotelName'];
        }

        if (isset($map['HotelNameCn'])) {
            $model->hotelNameCn = $map['HotelNameCn'];
        }

        if (isset($map['HotelType'])) {
            $model->hotelType = $map['HotelType'];
        }

        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }

        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }

        if (isset($map['OpeningTime'])) {
            $model->openingTime = $map['OpeningTime'];
        }

        if (isset($map['Pictures'])) {
            if (!empty($map['Pictures'])) {
                $model->pictures = [];
                $n1 = 0;
                foreach ($map['Pictures'] as $item1) {
                    $model->pictures[$n1] = pictures::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Policies'])) {
            if (!empty($map['Policies'])) {
                $model->policies = [];
                $n1 = 0;
                foreach ($map['Policies'] as $item1) {
                    $model->policies[$n1] = policies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PositionType'])) {
            $model->positionType = $map['PositionType'];
        }

        if (isset($map['RenovationTime'])) {
            $model->renovationTime = $map['RenovationTime'];
        }

        if (isset($map['RoomTypes'])) {
            if (!empty($map['RoomTypes'])) {
                $model->roomTypes = [];
                $n1 = 0;
                foreach ($map['RoomTypes'] as $item1) {
                    $model->roomTypes[$n1] = roomTypes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['StandardHotelId'])) {
            $model->standardHotelId = $map['StandardHotelId'];
        }

        if (isset($map['Star'])) {
            $model->star = $map['Star'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tel'])) {
            $model->tel = $map['Tel'];
        }

        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }

        return $model;
    }
}

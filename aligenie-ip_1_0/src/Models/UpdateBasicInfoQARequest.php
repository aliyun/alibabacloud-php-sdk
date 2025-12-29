<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;

class UpdateBasicInfoQARequest extends Model
{
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
    public $hotelAddress;

    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $hotelIntroduction;

    /**
     * @var string
     */
    public $hotelMember;

    /**
     * @var string
     */
    public $hotelService;

    /**
     * @var string
     */
    public $parkingExpenses;

    /**
     * @var string
     */
    public $parkingPosition;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $wifiName;

    /**
     * @var string
     */
    public $wifiPassword;
    protected $_name = [
        'checkInTime' => 'CheckInTime',
        'checkOutTime' => 'CheckOutTime',
        'hotelAddress' => 'HotelAddress',
        'hotelId' => 'HotelId',
        'hotelIntroduction' => 'HotelIntroduction',
        'hotelMember' => 'HotelMember',
        'hotelService' => 'HotelService',
        'parkingExpenses' => 'ParkingExpenses',
        'parkingPosition' => 'ParkingPosition',
        'phoneNumber' => 'PhoneNumber',
        'wifiName' => 'WifiName',
        'wifiPassword' => 'WifiPassword',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkInTime) {
            $res['CheckInTime'] = $this->checkInTime;
        }

        if (null !== $this->checkOutTime) {
            $res['CheckOutTime'] = $this->checkOutTime;
        }

        if (null !== $this->hotelAddress) {
            $res['HotelAddress'] = $this->hotelAddress;
        }

        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        if (null !== $this->hotelIntroduction) {
            $res['HotelIntroduction'] = $this->hotelIntroduction;
        }

        if (null !== $this->hotelMember) {
            $res['HotelMember'] = $this->hotelMember;
        }

        if (null !== $this->hotelService) {
            $res['HotelService'] = $this->hotelService;
        }

        if (null !== $this->parkingExpenses) {
            $res['ParkingExpenses'] = $this->parkingExpenses;
        }

        if (null !== $this->parkingPosition) {
            $res['ParkingPosition'] = $this->parkingPosition;
        }

        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }

        if (null !== $this->wifiName) {
            $res['WifiName'] = $this->wifiName;
        }

        if (null !== $this->wifiPassword) {
            $res['WifiPassword'] = $this->wifiPassword;
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
        if (isset($map['CheckInTime'])) {
            $model->checkInTime = $map['CheckInTime'];
        }

        if (isset($map['CheckOutTime'])) {
            $model->checkOutTime = $map['CheckOutTime'];
        }

        if (isset($map['HotelAddress'])) {
            $model->hotelAddress = $map['HotelAddress'];
        }

        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        if (isset($map['HotelIntroduction'])) {
            $model->hotelIntroduction = $map['HotelIntroduction'];
        }

        if (isset($map['HotelMember'])) {
            $model->hotelMember = $map['HotelMember'];
        }

        if (isset($map['HotelService'])) {
            $model->hotelService = $map['HotelService'];
        }

        if (isset($map['ParkingExpenses'])) {
            $model->parkingExpenses = $map['ParkingExpenses'];
        }

        if (isset($map['ParkingPosition'])) {
            $model->parkingPosition = $map['ParkingPosition'];
        }

        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }

        if (isset($map['WifiName'])) {
            $model->wifiName = $map['WifiName'];
        }

        if (isset($map['WifiPassword'])) {
            $model->wifiPassword = $map['WifiPassword'];
        }

        return $model;
    }
}

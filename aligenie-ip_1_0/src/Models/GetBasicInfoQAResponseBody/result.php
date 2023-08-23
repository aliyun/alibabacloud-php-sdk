<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetBasicInfoQAResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 11:11
     *
     * @var string
     */
    public $checkInTime;

    /**
     * @example 11:11
     *
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
     * @example 123***
     *
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
        'checkInTime'       => 'CheckInTime',
        'checkOutTime'      => 'CheckOutTime',
        'hotelAddress'      => 'HotelAddress',
        'hotelIntroduction' => 'HotelIntroduction',
        'hotelMember'       => 'HotelMember',
        'hotelService'      => 'HotelService',
        'parkingExpenses'   => 'ParkingExpenses',
        'parkingPosition'   => 'ParkingPosition',
        'phoneNumber'       => 'PhoneNumber',
        'wifiName'          => 'WifiName',
        'wifiPassword'      => 'WifiPassword',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return result
     */
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

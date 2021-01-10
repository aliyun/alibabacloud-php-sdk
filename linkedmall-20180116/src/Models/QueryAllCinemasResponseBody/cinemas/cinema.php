<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAllCinemasResponseBody\cinemas;

use AlibabaCloud\Tea\Model;

class cinema extends Model
{
    /**
     * @var string
     */
    public $standardId;

    /**
     * @var int
     */
    public $scheduleCloseTime;

    /**
     * @var int
     */
    public $cityId;

    /**
     * @var string
     */
    public $cinemaName;

    /**
     * @var string
     */
    public $cityName;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $longitude;

    /**
     * @var string
     */
    public $latitude;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'standardId'        => 'StandardId',
        'scheduleCloseTime' => 'ScheduleCloseTime',
        'cityId'            => 'CityId',
        'cinemaName'        => 'CinemaName',
        'cityName'          => 'CityName',
        'address'           => 'Address',
        'longitude'         => 'Longitude',
        'latitude'          => 'Latitude',
        'phone'             => 'Phone',
        'id'                => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->standardId) {
            $res['StandardId'] = $this->standardId;
        }
        if (null !== $this->scheduleCloseTime) {
            $res['ScheduleCloseTime'] = $this->scheduleCloseTime;
        }
        if (null !== $this->cityId) {
            $res['CityId'] = $this->cityId;
        }
        if (null !== $this->cinemaName) {
            $res['CinemaName'] = $this->cinemaName;
        }
        if (null !== $this->cityName) {
            $res['CityName'] = $this->cityName;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cinema
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StandardId'])) {
            $model->standardId = $map['StandardId'];
        }
        if (isset($map['ScheduleCloseTime'])) {
            $model->scheduleCloseTime = $map['ScheduleCloseTime'];
        }
        if (isset($map['CityId'])) {
            $model->cityId = $map['CityId'];
        }
        if (isset($map['CinemaName'])) {
            $model->cinemaName = $map['CinemaName'];
        }
        if (isset($map['CityName'])) {
            $model->cityName = $map['CityName'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAllCinemasResponseBody\cinemas;

use AlibabaCloud\Tea\Model;

class cinema extends Model
{
    /**
     * @example ""
     *
     * @var string
     */
    public $address;

    /**
     * @example ""
     *
     * @var string
     */
    public $cinemaName;

    /**
     * @example 330100
     *
     * @var int
     */
    public $cityId;

    /**
     * @var string
     */
    public $cityName;

    /**
     * @example 153
     *
     * @var int
     */
    public $id;

    /**
     * @example ""
     *
     * @var string
     */
    public $latitude;

    /**
     * @example ""
     *
     * @var string
     */
    public $longitude;

    /**
     * @example ""
     *
     * @var string
     */
    public $phone;

    /**
     * @example 15
     *
     * @var int
     */
    public $scheduleCloseTime;

    /**
     * @example 42112601
     *
     * @var string
     */
    public $standardId;
    protected $_name = [
        'address'           => 'Address',
        'cinemaName'        => 'CinemaName',
        'cityId'            => 'CityId',
        'cityName'          => 'CityName',
        'id'                => 'Id',
        'latitude'          => 'Latitude',
        'longitude'         => 'Longitude',
        'phone'             => 'Phone',
        'scheduleCloseTime' => 'ScheduleCloseTime',
        'standardId'        => 'StandardId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->cinemaName) {
            $res['CinemaName'] = $this->cinemaName;
        }
        if (null !== $this->cityId) {
            $res['CityId'] = $this->cityId;
        }
        if (null !== $this->cityName) {
            $res['CityName'] = $this->cityName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->scheduleCloseTime) {
            $res['ScheduleCloseTime'] = $this->scheduleCloseTime;
        }
        if (null !== $this->standardId) {
            $res['StandardId'] = $this->standardId;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['CinemaName'])) {
            $model->cinemaName = $map['CinemaName'];
        }
        if (isset($map['CityId'])) {
            $model->cityId = $map['CityId'];
        }
        if (isset($map['CityName'])) {
            $model->cityName = $map['CityName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['ScheduleCloseTime'])) {
            $model->scheduleCloseTime = $map['ScheduleCloseTime'];
        }
        if (isset($map['StandardId'])) {
            $model->standardId = $map['StandardId'];
        }

        return $model;
    }
}

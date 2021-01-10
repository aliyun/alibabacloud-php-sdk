<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMovieSchedulesResponseBody\schedules;

use AlibabaCloud\Tea\Model;

class schedule extends Model
{
    /**
     * @var string
     */
    public $sessionEndingTime;

    /**
     * @var string
     */
    public $movieVersion;

    /**
     * @var int
     */
    public $maxCanBuy;

    /**
     * @var int
     */
    public $movieId;

    /**
     * @var string
     */
    public $scheduleArea;

    /**
     * @var string
     */
    public $hallName;

    /**
     * @var bool
     */
    public $isExpired;

    /**
     * @var string
     */
    public $sessionStartingTime;

    /**
     * @var int
     */
    public $price;

    /**
     * @var string
     */
    public $releaseDate;

    /**
     * @var string
     */
    public $sectionId;

    /**
     * @var int
     */
    public $cinemaId;

    /**
     * @var int
     */
    public $serviceFee;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'sessionEndingTime'   => 'SessionEndingTime',
        'movieVersion'        => 'MovieVersion',
        'maxCanBuy'           => 'MaxCanBuy',
        'movieId'             => 'MovieId',
        'scheduleArea'        => 'ScheduleArea',
        'hallName'            => 'HallName',
        'isExpired'           => 'IsExpired',
        'sessionStartingTime' => 'SessionStartingTime',
        'price'               => 'Price',
        'releaseDate'         => 'ReleaseDate',
        'sectionId'           => 'SectionId',
        'cinemaId'            => 'CinemaId',
        'serviceFee'          => 'ServiceFee',
        'id'                  => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sessionEndingTime) {
            $res['SessionEndingTime'] = $this->sessionEndingTime;
        }
        if (null !== $this->movieVersion) {
            $res['MovieVersion'] = $this->movieVersion;
        }
        if (null !== $this->maxCanBuy) {
            $res['MaxCanBuy'] = $this->maxCanBuy;
        }
        if (null !== $this->movieId) {
            $res['MovieId'] = $this->movieId;
        }
        if (null !== $this->scheduleArea) {
            $res['ScheduleArea'] = $this->scheduleArea;
        }
        if (null !== $this->hallName) {
            $res['HallName'] = $this->hallName;
        }
        if (null !== $this->isExpired) {
            $res['IsExpired'] = $this->isExpired;
        }
        if (null !== $this->sessionStartingTime) {
            $res['SessionStartingTime'] = $this->sessionStartingTime;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }
        if (null !== $this->releaseDate) {
            $res['ReleaseDate'] = $this->releaseDate;
        }
        if (null !== $this->sectionId) {
            $res['SectionId'] = $this->sectionId;
        }
        if (null !== $this->cinemaId) {
            $res['CinemaId'] = $this->cinemaId;
        }
        if (null !== $this->serviceFee) {
            $res['ServiceFee'] = $this->serviceFee;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schedule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SessionEndingTime'])) {
            $model->sessionEndingTime = $map['SessionEndingTime'];
        }
        if (isset($map['MovieVersion'])) {
            $model->movieVersion = $map['MovieVersion'];
        }
        if (isset($map['MaxCanBuy'])) {
            $model->maxCanBuy = $map['MaxCanBuy'];
        }
        if (isset($map['MovieId'])) {
            $model->movieId = $map['MovieId'];
        }
        if (isset($map['ScheduleArea'])) {
            $model->scheduleArea = $map['ScheduleArea'];
        }
        if (isset($map['HallName'])) {
            $model->hallName = $map['HallName'];
        }
        if (isset($map['IsExpired'])) {
            $model->isExpired = $map['IsExpired'];
        }
        if (isset($map['SessionStartingTime'])) {
            $model->sessionStartingTime = $map['SessionStartingTime'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }
        if (isset($map['ReleaseDate'])) {
            $model->releaseDate = $map['ReleaseDate'];
        }
        if (isset($map['SectionId'])) {
            $model->sectionId = $map['SectionId'];
        }
        if (isset($map['CinemaId'])) {
            $model->cinemaId = $map['CinemaId'];
        }
        if (isset($map['ServiceFee'])) {
            $model->serviceFee = $map['ServiceFee'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}

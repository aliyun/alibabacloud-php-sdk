<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListVehicleResultsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2
     *
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $liveAddress;

    /**
     * @example rvsvisual_10596_33010000991332551639_e4b6377762bb31b10c2538b3a57cc6e7_0001610333257656000000000
     *
     * @var string
     */
    public $personId;

    /**
     * @var string
     */
    public $plateId;

    /**
     * @var string
     */
    public $profession;

    /**
     * @example 2021-01-25 11:38:54
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $vehicleApplication;

    /**
     * @example 1
     *
     * @var string
     */
    public $vehicleClass;

    /**
     * @example 1
     *
     * @var string
     */
    public $vehicleId;
    protected $_name = [
        'gender'             => 'Gender',
        'liveAddress'        => 'LiveAddress',
        'personId'           => 'PersonId',
        'plateId'            => 'PlateId',
        'profession'         => 'Profession',
        'updateTime'         => 'UpdateTime',
        'vehicleApplication' => 'VehicleApplication',
        'vehicleClass'       => 'VehicleClass',
        'vehicleId'          => 'VehicleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->liveAddress) {
            $res['LiveAddress'] = $this->liveAddress;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->plateId) {
            $res['PlateId'] = $this->plateId;
        }
        if (null !== $this->profession) {
            $res['Profession'] = $this->profession;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->vehicleApplication) {
            $res['VehicleApplication'] = $this->vehicleApplication;
        }
        if (null !== $this->vehicleClass) {
            $res['VehicleClass'] = $this->vehicleClass;
        }
        if (null !== $this->vehicleId) {
            $res['VehicleId'] = $this->vehicleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['LiveAddress'])) {
            $model->liveAddress = $map['LiveAddress'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['PlateId'])) {
            $model->plateId = $map['PlateId'];
        }
        if (isset($map['Profession'])) {
            $model->profession = $map['Profession'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VehicleApplication'])) {
            $model->vehicleApplication = $map['VehicleApplication'];
        }
        if (isset($map['VehicleClass'])) {
            $model->vehicleClass = $map['VehicleClass'];
        }
        if (isset($map['VehicleId'])) {
            $model->vehicleId = $map['VehicleId'];
        }

        return $model;
    }
}

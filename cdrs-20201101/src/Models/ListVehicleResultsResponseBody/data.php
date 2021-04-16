<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListVehicleResultsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $vehicleApplication;

    /**
     * @var string
     */
    public $profession;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $plateId;

    /**
     * @var string
     */
    public $vehicleClass;

    /**
     * @var string
     */
    public $liveAddress;

    /**
     * @var string
     */
    public $vehicleId;

    /**
     * @var string
     */
    public $personId;
    protected $_name = [
        'vehicleApplication' => 'VehicleApplication',
        'profession'         => 'Profession',
        'updateTime'         => 'UpdateTime',
        'gender'             => 'Gender',
        'plateId'            => 'PlateId',
        'vehicleClass'       => 'VehicleClass',
        'liveAddress'        => 'LiveAddress',
        'vehicleId'          => 'VehicleId',
        'personId'           => 'PersonId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vehicleApplication) {
            $res['VehicleApplication'] = $this->vehicleApplication;
        }
        if (null !== $this->profession) {
            $res['Profession'] = $this->profession;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->plateId) {
            $res['PlateId'] = $this->plateId;
        }
        if (null !== $this->vehicleClass) {
            $res['VehicleClass'] = $this->vehicleClass;
        }
        if (null !== $this->liveAddress) {
            $res['LiveAddress'] = $this->liveAddress;
        }
        if (null !== $this->vehicleId) {
            $res['VehicleId'] = $this->vehicleId;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
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
        if (isset($map['VehicleApplication'])) {
            $model->vehicleApplication = $map['VehicleApplication'];
        }
        if (isset($map['Profession'])) {
            $model->profession = $map['Profession'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['PlateId'])) {
            $model->plateId = $map['PlateId'];
        }
        if (isset($map['VehicleClass'])) {
            $model->vehicleClass = $map['VehicleClass'];
        }
        if (isset($map['LiveAddress'])) {
            $model->liveAddress = $map['LiveAddress'];
        }
        if (isset($map['VehicleId'])) {
            $model->vehicleId = $map['VehicleId'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }

        return $model;
    }
}

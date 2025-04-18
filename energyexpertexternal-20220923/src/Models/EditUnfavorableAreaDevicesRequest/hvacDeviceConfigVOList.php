<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\EditUnfavorableAreaDevicesRequest;

use AlibabaCloud\Dara\Model;

class hvacDeviceConfigVOList extends Model
{
    /**
     * @var string
     */
    public $buildingId;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $fenceId;

    /**
     * @var string
     */
    public $floorId;

    /**
     * @var int
     */
    public $isForbidden;

    /**
     * @var int
     */
    public $isUnfavorableArea;
    protected $_name = [
        'buildingId' => 'buildingId',
        'deviceId' => 'deviceId',
        'deviceName' => 'deviceName',
        'deviceType' => 'deviceType',
        'fenceId' => 'fenceId',
        'floorId' => 'floorId',
        'isForbidden' => 'isForbidden',
        'isUnfavorableArea' => 'isUnfavorableArea',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildingId) {
            $res['buildingId'] = $this->buildingId;
        }

        if (null !== $this->deviceId) {
            $res['deviceId'] = $this->deviceId;
        }

        if (null !== $this->deviceName) {
            $res['deviceName'] = $this->deviceName;
        }

        if (null !== $this->deviceType) {
            $res['deviceType'] = $this->deviceType;
        }

        if (null !== $this->fenceId) {
            $res['fenceId'] = $this->fenceId;
        }

        if (null !== $this->floorId) {
            $res['floorId'] = $this->floorId;
        }

        if (null !== $this->isForbidden) {
            $res['isForbidden'] = $this->isForbidden;
        }

        if (null !== $this->isUnfavorableArea) {
            $res['isUnfavorableArea'] = $this->isUnfavorableArea;
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
        if (isset($map['buildingId'])) {
            $model->buildingId = $map['buildingId'];
        }

        if (isset($map['deviceId'])) {
            $model->deviceId = $map['deviceId'];
        }

        if (isset($map['deviceName'])) {
            $model->deviceName = $map['deviceName'];
        }

        if (isset($map['deviceType'])) {
            $model->deviceType = $map['deviceType'];
        }

        if (isset($map['fenceId'])) {
            $model->fenceId = $map['fenceId'];
        }

        if (isset($map['floorId'])) {
            $model->floorId = $map['floorId'];
        }

        if (isset($map['isForbidden'])) {
            $model->isForbidden = $map['isForbidden'];
        }

        if (isset($map['isUnfavorableArea'])) {
            $model->isUnfavorableArea = $map['isUnfavorableArea'];
        }

        return $model;
    }
}

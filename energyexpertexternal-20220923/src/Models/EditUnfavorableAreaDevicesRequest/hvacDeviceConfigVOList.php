<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\EditUnfavorableAreaDevicesRequest;

use AlibabaCloud\Tea\Model;

class hvacDeviceConfigVOList extends Model
{
    /**
     * @example buildingId1
     *
     * @var string
     */
    public $buildingId;

    /**
     * @example id1
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example name1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example 1
     *
     * @var string
     */
    public $deviceType;

    /**
     * @example fenceId1
     *
     * @var string
     */
    public $fenceId;

    /**
     * @example floorId2
     *
     * @var string
     */
    public $floorId;

    /**
     * @example 1
     *
     * @var int
     */
    public $isForbidden;

    /**
     * @example 1
     *
     * @var int
     */
    public $isUnfavorableArea;
    protected $_name = [
        'buildingId'        => 'buildingId',
        'deviceId'          => 'deviceId',
        'deviceName'        => 'deviceName',
        'deviceType'        => 'deviceType',
        'fenceId'           => 'fenceId',
        'floorId'           => 'floorId',
        'isForbidden'       => 'isForbidden',
        'isUnfavorableArea' => 'isUnfavorableArea',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return hvacDeviceConfigVOList
     */
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class CountActivatedOrNewRegistrationDeviceRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $deviceBrandId;

    /**
     * @var string
     */
    public $deviceBrand;

    /**
     * @var string
     */
    public $deviceModelId;

    /**
     * @var string
     */
    public $deviceModel;

    /**
     * @var string
     */
    public $deviceCountStatType;

    /**
     * @var string
     */
    public $isQueryNewRegistrationDevice;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $isQueryYearlyActivate;
    protected $_name = [
        'projectId'                    => 'ProjectId',
        'deviceType'                   => 'DeviceType',
        'deviceBrandId'                => 'DeviceBrandId',
        'deviceBrand'                  => 'DeviceBrand',
        'deviceModelId'                => 'DeviceModelId',
        'deviceModel'                  => 'DeviceModel',
        'deviceCountStatType'          => 'DeviceCountStatType',
        'isQueryNewRegistrationDevice' => 'IsQueryNewRegistrationDevice',
        'startTime'                    => 'StartTime',
        'endTime'                      => 'EndTime',
        'isQueryYearlyActivate'        => 'IsQueryYearlyActivate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->deviceBrandId) {
            $res['DeviceBrandId'] = $this->deviceBrandId;
        }
        if (null !== $this->deviceBrand) {
            $res['DeviceBrand'] = $this->deviceBrand;
        }
        if (null !== $this->deviceModelId) {
            $res['DeviceModelId'] = $this->deviceModelId;
        }
        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = $this->deviceModel;
        }
        if (null !== $this->deviceCountStatType) {
            $res['DeviceCountStatType'] = $this->deviceCountStatType;
        }
        if (null !== $this->isQueryNewRegistrationDevice) {
            $res['IsQueryNewRegistrationDevice'] = $this->isQueryNewRegistrationDevice;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->isQueryYearlyActivate) {
            $res['IsQueryYearlyActivate'] = $this->isQueryYearlyActivate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CountActivatedOrNewRegistrationDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['DeviceBrandId'])) {
            $model->deviceBrandId = $map['DeviceBrandId'];
        }
        if (isset($map['DeviceBrand'])) {
            $model->deviceBrand = $map['DeviceBrand'];
        }
        if (isset($map['DeviceModelId'])) {
            $model->deviceModelId = $map['DeviceModelId'];
        }
        if (isset($map['DeviceModel'])) {
            $model->deviceModel = $map['DeviceModel'];
        }
        if (isset($map['DeviceCountStatType'])) {
            $model->deviceCountStatType = $map['DeviceCountStatType'];
        }
        if (isset($map['IsQueryNewRegistrationDevice'])) {
            $model->isQueryNewRegistrationDevice = $map['IsQueryNewRegistrationDevice'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IsQueryYearlyActivate'])) {
            $model->isQueryYearlyActivate = $map['IsQueryYearlyActivate'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class CreateDeviceModelRequest extends Model
{
    /**
     * @var string
     */
    public $initUsageType;

    /**
     * @var string
     */
    public $canCreateDeviceId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $hardwareType;

    /**
     * @var string
     */
    public $brandName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $securityChip;

    /**
     * @var string
     */
    public $osPlatform;

    /**
     * @var string
     */
    public $objectKey;

    /**
     * @var string
     */
    public $deviceName;
    protected $_name = [
        'initUsageType'     => 'InitUsageType',
        'canCreateDeviceId' => 'CanCreateDeviceId',
        'modelName'         => 'ModelName',
        'hardwareType'      => 'HardwareType',
        'brandName'         => 'BrandName',
        'description'       => 'Description',
        'deviceType'        => 'DeviceType',
        'projectId'         => 'ProjectId',
        'securityChip'      => 'SecurityChip',
        'osPlatform'        => 'OsPlatform',
        'objectKey'         => 'ObjectKey',
        'deviceName'        => 'DeviceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->initUsageType) {
            $res['InitUsageType'] = $this->initUsageType;
        }
        if (null !== $this->canCreateDeviceId) {
            $res['CanCreateDeviceId'] = $this->canCreateDeviceId;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->hardwareType) {
            $res['HardwareType'] = $this->hardwareType;
        }
        if (null !== $this->brandName) {
            $res['BrandName'] = $this->brandName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->securityChip) {
            $res['SecurityChip'] = $this->securityChip;
        }
        if (null !== $this->osPlatform) {
            $res['OsPlatform'] = $this->osPlatform;
        }
        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDeviceModelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InitUsageType'])) {
            $model->initUsageType = $map['InitUsageType'];
        }
        if (isset($map['CanCreateDeviceId'])) {
            $model->canCreateDeviceId = $map['CanCreateDeviceId'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['HardwareType'])) {
            $model->hardwareType = $map['HardwareType'];
        }
        if (isset($map['BrandName'])) {
            $model->brandName = $map['BrandName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SecurityChip'])) {
            $model->securityChip = $map['SecurityChip'];
        }
        if (isset($map['OsPlatform'])) {
            $model->osPlatform = $map['OsPlatform'];
        }
        if (isset($map['ObjectKey'])) {
            $model->objectKey = $map['ObjectKey'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }

        return $model;
    }
}

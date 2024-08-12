<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class GetDeviceOtaInfoRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $baseVersion;

    /**
     * @var string
     */
    public $channel;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $deviceId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $osVersion;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $targetVersionType;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'baseVersion'       => 'BaseVersion',
        'channel'           => 'Channel',
        'deviceId'          => 'DeviceId',
        'model'             => 'Model',
        'networkType'       => 'NetworkType',
        'osVersion'         => 'OsVersion',
        'region'            => 'Region',
        'regionId'          => 'RegionId',
        'targetVersionType' => 'TargetVersionType',
        'tenantId'          => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseVersion) {
            $res['BaseVersion'] = $this->baseVersion;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->osVersion) {
            $res['OsVersion'] = $this->osVersion;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->targetVersionType) {
            $res['TargetVersionType'] = $this->targetVersionType;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeviceOtaInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseVersion'])) {
            $model->baseVersion = $map['BaseVersion'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['OsVersion'])) {
            $model->osVersion = $map['OsVersion'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TargetVersionType'])) {
            $model->targetVersionType = $map['TargetVersionType'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}

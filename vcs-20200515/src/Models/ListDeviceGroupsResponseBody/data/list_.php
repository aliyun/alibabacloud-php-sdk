<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListDeviceGroupsResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $deviceStreamStatus;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $deviceStatus;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $deviceSn;

    /**
     * @var string
     */
    public $deviceComputeStatus;

    /**
     * @var string
     */
    public $installAddress;

    /**
     * @var string
     */
    public $deviceGroup;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $resolvingPower;

    /**
     * @var string
     */
    public $deviceCode;

    /**
     * @var string
     */
    public $bitRate;

    /**
     * @var string
     */
    public $codingFormat;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'deviceStreamStatus'  => 'DeviceStreamStatus',
        'deviceName'          => 'DeviceName',
        'deviceStatus'        => 'DeviceStatus',
        'regionId'            => 'RegionId',
        'deviceSn'            => 'DeviceSn',
        'deviceComputeStatus' => 'DeviceComputeStatus',
        'installAddress'      => 'InstallAddress',
        'deviceGroup'         => 'DeviceGroup',
        'regionName'          => 'RegionName',
        'dataSourceType'      => 'DataSourceType',
        'resolvingPower'      => 'ResolvingPower',
        'deviceCode'          => 'DeviceCode',
        'bitRate'             => 'BitRate',
        'codingFormat'        => 'CodingFormat',
        'type'                => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceStreamStatus) {
            $res['DeviceStreamStatus'] = $this->deviceStreamStatus;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceStatus) {
            $res['DeviceStatus'] = $this->deviceStatus;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->deviceSn) {
            $res['DeviceSn'] = $this->deviceSn;
        }
        if (null !== $this->deviceComputeStatus) {
            $res['DeviceComputeStatus'] = $this->deviceComputeStatus;
        }
        if (null !== $this->installAddress) {
            $res['InstallAddress'] = $this->installAddress;
        }
        if (null !== $this->deviceGroup) {
            $res['DeviceGroup'] = $this->deviceGroup;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->resolvingPower) {
            $res['ResolvingPower'] = $this->resolvingPower;
        }
        if (null !== $this->deviceCode) {
            $res['DeviceCode'] = $this->deviceCode;
        }
        if (null !== $this->bitRate) {
            $res['BitRate'] = $this->bitRate;
        }
        if (null !== $this->codingFormat) {
            $res['CodingFormat'] = $this->codingFormat;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceStreamStatus'])) {
            $model->deviceStreamStatus = $map['DeviceStreamStatus'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DeviceStatus'])) {
            $model->deviceStatus = $map['DeviceStatus'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DeviceSn'])) {
            $model->deviceSn = $map['DeviceSn'];
        }
        if (isset($map['DeviceComputeStatus'])) {
            $model->deviceComputeStatus = $map['DeviceComputeStatus'];
        }
        if (isset($map['InstallAddress'])) {
            $model->installAddress = $map['InstallAddress'];
        }
        if (isset($map['DeviceGroup'])) {
            $model->deviceGroup = $map['DeviceGroup'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['ResolvingPower'])) {
            $model->resolvingPower = $map['ResolvingPower'];
        }
        if (isset($map['DeviceCode'])) {
            $model->deviceCode = $map['DeviceCode'];
        }
        if (isset($map['BitRate'])) {
            $model->bitRate = $map['BitRate'];
        }
        if (isset($map['CodingFormat'])) {
            $model->codingFormat = $map['CodingFormat'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

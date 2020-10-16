<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListDeviceGroupsResponse\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $deviceGroup;

    /**
     * @var string
     */
    public $deviceName;

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
    public $resolvingPower;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $installAddress;

    /**
     * @var string
     */
    public $deviceSn;

    /**
     * @var string
     */
    public $deviceStatus;

    /**
     * @var string
     */
    public $deviceStreamStatus;

    /**
     * @var string
     */
    public $deviceComputeStatus;
    protected $_name = [
        'deviceGroup'         => 'DeviceGroup',
        'deviceName'          => 'DeviceName',
        'deviceCode'          => 'DeviceCode',
        'bitRate'             => 'BitRate',
        'codingFormat'        => 'CodingFormat',
        'resolvingPower'      => 'ResolvingPower',
        'dataSourceType'      => 'DataSourceType',
        'regionName'          => 'RegionName',
        'regionId'            => 'RegionId',
        'installAddress'      => 'InstallAddress',
        'deviceSn'            => 'DeviceSn',
        'deviceStatus'        => 'DeviceStatus',
        'deviceStreamStatus'  => 'DeviceStreamStatus',
        'deviceComputeStatus' => 'DeviceComputeStatus',
    ];

    public function validate()
    {
        Model::validateRequired('deviceGroup', $this->deviceGroup, true);
        Model::validateRequired('deviceName', $this->deviceName, true);
        Model::validateRequired('deviceCode', $this->deviceCode, true);
        Model::validateRequired('bitRate', $this->bitRate, true);
        Model::validateRequired('codingFormat', $this->codingFormat, true);
        Model::validateRequired('resolvingPower', $this->resolvingPower, true);
        Model::validateRequired('dataSourceType', $this->dataSourceType, true);
        Model::validateRequired('regionName', $this->regionName, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('installAddress', $this->installAddress, true);
        Model::validateRequired('deviceSn', $this->deviceSn, true);
        Model::validateRequired('deviceStatus', $this->deviceStatus, true);
        Model::validateRequired('deviceStreamStatus', $this->deviceStreamStatus, true);
        Model::validateRequired('deviceComputeStatus', $this->deviceComputeStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceGroup) {
            $res['DeviceGroup'] = $this->deviceGroup;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
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
        if (null !== $this->resolvingPower) {
            $res['ResolvingPower'] = $this->resolvingPower;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->installAddress) {
            $res['InstallAddress'] = $this->installAddress;
        }
        if (null !== $this->deviceSn) {
            $res['DeviceSn'] = $this->deviceSn;
        }
        if (null !== $this->deviceStatus) {
            $res['DeviceStatus'] = $this->deviceStatus;
        }
        if (null !== $this->deviceStreamStatus) {
            $res['DeviceStreamStatus'] = $this->deviceStreamStatus;
        }
        if (null !== $this->deviceComputeStatus) {
            $res['DeviceComputeStatus'] = $this->deviceComputeStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceGroup'])) {
            $model->deviceGroup = $map['DeviceGroup'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
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
        if (isset($map['ResolvingPower'])) {
            $model->resolvingPower = $map['ResolvingPower'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstallAddress'])) {
            $model->installAddress = $map['InstallAddress'];
        }
        if (isset($map['DeviceSn'])) {
            $model->deviceSn = $map['DeviceSn'];
        }
        if (isset($map['DeviceStatus'])) {
            $model->deviceStatus = $map['DeviceStatus'];
        }
        if (isset($map['DeviceStreamStatus'])) {
            $model->deviceStreamStatus = $map['DeviceStreamStatus'];
        }
        if (isset($map['DeviceComputeStatus'])) {
            $model->deviceComputeStatus = $map['DeviceComputeStatus'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class CreateDeviceRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $cityCode;

    /**
     * @var string
     */
    public $longitude;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $deviceVendor;

    /**
     * @var string
     */
    public $deviceGroupName;

    /**
     * @var string
     */
    public $latitude;

    /**
     * @var string
     */
    public $deviceAddress;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var int
     */
    public $subDeviceCount;
    protected $_name = [
        'corpId'          => 'CorpId',
        'cityCode'        => 'CityCode',
        'longitude'       => 'Longitude',
        'dataSourceType'  => 'DataSourceType',
        'deviceName'      => 'DeviceName',
        'deviceVendor'    => 'DeviceVendor',
        'deviceGroupName' => 'DeviceGroupName',
        'latitude'        => 'Latitude',
        'deviceAddress'   => 'DeviceAddress',
        'deviceType'      => 'DeviceType',
        'subDeviceCount'  => 'SubDeviceCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->cityCode) {
            $res['CityCode'] = $this->cityCode;
        }
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceVendor) {
            $res['DeviceVendor'] = $this->deviceVendor;
        }
        if (null !== $this->deviceGroupName) {
            $res['DeviceGroupName'] = $this->deviceGroupName;
        }
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->deviceAddress) {
            $res['DeviceAddress'] = $this->deviceAddress;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->subDeviceCount) {
            $res['SubDeviceCount'] = $this->subDeviceCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['CityCode'])) {
            $model->cityCode = $map['CityCode'];
        }
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DeviceVendor'])) {
            $model->deviceVendor = $map['DeviceVendor'];
        }
        if (isset($map['DeviceGroupName'])) {
            $model->deviceGroupName = $map['DeviceGroupName'];
        }
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['DeviceAddress'])) {
            $model->deviceAddress = $map['DeviceAddress'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['SubDeviceCount'])) {
            $model->subDeviceCount = $map['SubDeviceCount'];
        }

        return $model;
    }
}

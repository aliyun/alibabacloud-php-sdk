<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryVehicleDeviceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $authCode;

    /**
     * @var string
     */
    public $city;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $deviceModel;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $manufacturer;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $province;

    /**
     * @var int
     */
    public $registerTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vehicleColour;

    /**
     * @var string
     */
    public $vehicleNumber;
    protected $_name = [
        'authCode'      => 'AuthCode',
        'city'          => 'City',
        'createTime'    => 'CreateTime',
        'deviceId'      => 'DeviceId',
        'deviceModel'   => 'DeviceModel',
        'deviceName'    => 'DeviceName',
        'iotId'         => 'IotId',
        'manufacturer'  => 'Manufacturer',
        'modifiedTime'  => 'ModifiedTime',
        'productKey'    => 'ProductKey',
        'province'      => 'Province',
        'registerTime'  => 'RegisterTime',
        'status'        => 'Status',
        'vehicleColour' => 'VehicleColour',
        'vehicleNumber' => 'VehicleNumber',
    ];

    public function validate()
    {
        Model::validateRequired('authCode', $this->authCode, true);
        Model::validateRequired('city', $this->city, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('deviceId', $this->deviceId, true);
        Model::validateRequired('deviceModel', $this->deviceModel, true);
        Model::validateRequired('deviceName', $this->deviceName, true);
        Model::validateRequired('iotId', $this->iotId, true);
        Model::validateRequired('manufacturer', $this->manufacturer, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('province', $this->province, true);
        Model::validateRequired('registerTime', $this->registerTime, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('vehicleColour', $this->vehicleColour, true);
        Model::validateRequired('vehicleNumber', $this->vehicleNumber, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authCode) {
            $res['AuthCode'] = $this->authCode;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = $this->deviceModel;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->manufacturer) {
            $res['Manufacturer'] = $this->manufacturer;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->registerTime) {
            $res['RegisterTime'] = $this->registerTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vehicleColour) {
            $res['VehicleColour'] = $this->vehicleColour;
        }
        if (null !== $this->vehicleNumber) {
            $res['VehicleNumber'] = $this->vehicleNumber;
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
        if (isset($map['AuthCode'])) {
            $model->authCode = $map['AuthCode'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceModel'])) {
            $model->deviceModel = $map['DeviceModel'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['Manufacturer'])) {
            $model->manufacturer = $map['Manufacturer'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['RegisterTime'])) {
            $model->registerTime = $map['RegisterTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VehicleColour'])) {
            $model->vehicleColour = $map['VehicleColour'];
        }
        if (isset($map['VehicleNumber'])) {
            $model->vehicleNumber = $map['VehicleNumber'];
        }

        return $model;
    }
}

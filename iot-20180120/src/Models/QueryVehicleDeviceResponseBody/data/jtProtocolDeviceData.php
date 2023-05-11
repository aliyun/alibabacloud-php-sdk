<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryVehicleDeviceResponseBody\data;

use AlibabaCloud\Tea\Model;

class jtProtocolDeviceData extends Model
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
    public $manufacturer;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
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
        'deviceId'      => 'DeviceId',
        'deviceModel'   => 'DeviceModel',
        'manufacturer'  => 'Manufacturer',
        'province'      => 'Province',
        'registerTime'  => 'RegisterTime',
        'status'        => 'Status',
        'vehicleColour' => 'VehicleColour',
        'vehicleNumber' => 'VehicleNumber',
    ];

    public function validate()
    {
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
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = $this->deviceModel;
        }
        if (null !== $this->manufacturer) {
            $res['Manufacturer'] = $this->manufacturer;
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
     * @return jtProtocolDeviceData
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
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceModel'])) {
            $model->deviceModel = $map['DeviceModel'];
        }
        if (isset($map['Manufacturer'])) {
            $model->manufacturer = $map['Manufacturer'];
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

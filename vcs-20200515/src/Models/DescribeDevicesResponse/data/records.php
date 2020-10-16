<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\DescribeDevicesResponse\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $inProtocol;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $deviceAddress;

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
    public $latitude;

    /**
     * @var string
     */
    public $longitude;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vendor;

    /**
     * @var string
     */
    public $corpId;
    protected $_name = [
        'inProtocol'    => 'InProtocol',
        'createTime'    => 'CreateTime',
        'deviceAddress' => 'DeviceAddress',
        'deviceId'      => 'DeviceId',
        'deviceName'    => 'DeviceName',
        'deviceType'    => 'DeviceType',
        'latitude'      => 'Latitude',
        'longitude'     => 'Longitude',
        'status'        => 'Status',
        'vendor'        => 'Vendor',
        'corpId'        => 'CorpId',
    ];

    public function validate()
    {
        Model::validateRequired('inProtocol', $this->inProtocol, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('deviceAddress', $this->deviceAddress, true);
        Model::validateRequired('deviceId', $this->deviceId, true);
        Model::validateRequired('deviceName', $this->deviceName, true);
        Model::validateRequired('deviceType', $this->deviceType, true);
        Model::validateRequired('latitude', $this->latitude, true);
        Model::validateRequired('longitude', $this->longitude, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('vendor', $this->vendor, true);
        Model::validateRequired('corpId', $this->corpId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inProtocol) {
            $res['InProtocol'] = $this->inProtocol;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deviceAddress) {
            $res['DeviceAddress'] = $this->deviceAddress;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InProtocol'])) {
            $model->inProtocol = $map['InProtocol'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeviceAddress'])) {
            $model->deviceAddress = $map['DeviceAddress'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }

        return $model;
    }
}

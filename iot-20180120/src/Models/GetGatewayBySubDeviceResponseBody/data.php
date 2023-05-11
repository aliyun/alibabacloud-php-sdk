<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetGatewayBySubDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The DeviceName of the gateway.
     *
     * @example gateway
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The DeviceSecret of the gateway.
     *
     * @example dCYdTU3gw5Z77bsHjPk6lPHPVnBT****
     *
     * @var string
     */
    public $deviceSecret;

    /**
     * @description The firmware version number of the device.
     *
     * @example V1.0.1
     *
     * @var string
     */
    public $firmwareVersion;

    /**
     * @description The activation time of the gateway. The time is displayed in GMT. The time is the local time of the region where the gateway resides.
     *
     * @example 2019-12-18 23:25:30
     *
     * @var string
     */
    public $gmtActive;

    /**
     * @description The creation time of the gateway. The time is displayed in GMT. The time is the local time of the region where the gateway resides.
     *
     * @example 2019-12-18 16:58:33
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The last online time of the gateway. The time is displayed in GMT. The time is the local time of the region where the gateway resides.
     *
     * @example 2020-01-20 17:41:04
     *
     * @var string
     */
    public $gmtOnline;

    /**
     * @description The IP address of the gateway.
     *
     * @example 106.**.1**.**
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @description The node type. The value 1 indicates that the device is a gateway.
     *
     * @example 1
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description The **ProductKey** of the product to which the gateway belongs.
     *
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The name of the product to which the gateway belongs.
     *
     * @example LinkIoT
     *
     * @var string
     */
    public $productName;

    /**
     * @description The status of the gateway device. Valid values:
     *
     *   **online**: The device is online.
     *   **offline**: The device is offline.
     *   **unactive**: The device is not activated.
     *   **disable**: The device is disabled.
     *
     * @example online
     *
     * @var string
     */
    public $status;

    /**
     * @description The activation time of the gateway. The time is displayed in UTC. The actual time of the region where the gateway resides is calculated based on the time zone of the region.
     *
     * @example 2019-12-18T15:25:30.176Z
     *
     * @var string
     */
    public $utcActive;

    /**
     * @description The creation time of the gateway. The time is displayed in UTC. The actual time of the region where the gateway resides is calculated based on the time zone of the region.
     *
     * @example 2019-12-18T08:58:33.000Z
     *
     * @var string
     */
    public $utcCreate;

    /**
     * @description The last online time of the gateway. The time is displayed in UTC. The actual time of the region where the gateway resides is calculated based on the time zone of the region.
     *
     * @example 2020-01-20T09:41:04.879Z
     *
     * @var string
     */
    public $utcOnline;

    /**
     * @description The ID of the gateway device. The ID is the unique identifier that is issued by IoT Platform to the device.
     *
     * @example WuyjPSDQE1L22z1d****000100
     *
     * @var string
     */
    public $iotId;

    /**
     * @description The region where the gateway resides. This region corresponds to the region that is displayed in the IoT Platform console.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'deviceName'      => 'DeviceName',
        'deviceSecret'    => 'DeviceSecret',
        'firmwareVersion' => 'FirmwareVersion',
        'gmtActive'       => 'GmtActive',
        'gmtCreate'       => 'GmtCreate',
        'gmtOnline'       => 'GmtOnline',
        'ipAddress'       => 'IpAddress',
        'nodeType'        => 'NodeType',
        'productKey'      => 'ProductKey',
        'productName'     => 'ProductName',
        'status'          => 'Status',
        'utcActive'       => 'UtcActive',
        'utcCreate'       => 'UtcCreate',
        'utcOnline'       => 'UtcOnline',
        'iotId'           => 'iotId',
        'region'          => 'region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceSecret) {
            $res['DeviceSecret'] = $this->deviceSecret;
        }
        if (null !== $this->firmwareVersion) {
            $res['FirmwareVersion'] = $this->firmwareVersion;
        }
        if (null !== $this->gmtActive) {
            $res['GmtActive'] = $this->gmtActive;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtOnline) {
            $res['GmtOnline'] = $this->gmtOnline;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->utcActive) {
            $res['UtcActive'] = $this->utcActive;
        }
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
        }
        if (null !== $this->utcOnline) {
            $res['UtcOnline'] = $this->utcOnline;
        }
        if (null !== $this->iotId) {
            $res['iotId'] = $this->iotId;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
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
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DeviceSecret'])) {
            $model->deviceSecret = $map['DeviceSecret'];
        }
        if (isset($map['FirmwareVersion'])) {
            $model->firmwareVersion = $map['FirmwareVersion'];
        }
        if (isset($map['GmtActive'])) {
            $model->gmtActive = $map['GmtActive'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtOnline'])) {
            $model->gmtOnline = $map['GmtOnline'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UtcActive'])) {
            $model->utcActive = $map['UtcActive'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }
        if (isset($map['UtcOnline'])) {
            $model->utcOnline = $map['UtcOnline'];
        }
        if (isset($map['iotId'])) {
            $model->iotId = $map['iotId'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        return $model;
    }
}

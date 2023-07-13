<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchQueryDeviceDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The DeviceName of the device.
     *
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The DeviceSecret of the device.
     *
     * @example mz2Canp4GB7qRVf1OYPNtRqB2anu****
     *
     * @var string
     */
    public $deviceSecret;

    /**
     * @description The firmware version number of the device.
     *
     * @example V1.0.0.0
     *
     * @var string
     */
    public $firmwareVersion;

    /**
     * @description The activation time of the device. The time is displayed in UTC.
     *
     * @example 2019-06-21 20:33:00
     *
     * @var string
     */
    public $gmtActive;

    /**
     * @description The creation time of the device. The time is displayed in UTC.
     *
     * @example 2019-06-21 20:31:42
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The unique ID of the device. The device ID is issued by IoT Platform.
     *
     * @example Q7uOhVRdZRRlDnTLv****00100
     *
     * @var string
     */
    public $iotId;

    /**
     * @description The alias of the device.
     *
     * @var string
     */
    public $nickname;

    /**
     * @description The type of the node. Valid values:
     *
     *   **0**: device. Sub-devices cannot be mounted on a gateway. A device can connect to IoT Platform directly or as a sub-device of a gateway.
     *   **1**: gateway. Sub-devices can be attached to a gateway. A gateway can manage sub-devices, maintain the topological relationships with sub-devices, and synchronize the topological relationships to IoT Platform.
     *
     * @example 0
     *
     * @var int
     */
    public $nodeType;

    /**
     * @description The **ProductKey** of the product to which the device belongs.
     *
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The name of the product to which the device belongs.
     *
     * @var string
     */
    public $productName;

    /**
     * @description The ID of the region where the device resides. The region is the same as the region where IoT Platform resides. You can view the region in the IoT Platform console.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The status of the device. Valid values:
     *
     *   **ONLINE**: The device is online.
     *   **OFFLINE**: The device is offline.
     *   **UNACTIVE**: The device is not activated.
     *   **DISABLE**: The device is disabled.
     *
     * @example ONLINE
     *
     * @var string
     */
    public $status;

    /**
     * @description The activation time of the device. The time is displayed in UTC.
     *
     * @example 2019-06-21T12:31:42.000Z
     *
     * @var string
     */
    public $utcActive;

    /**
     * @description The creation time of the device. The time is displayed in UTC.
     *
     * @example 2019-06-21T12:31:42.000Z
     *
     * @var string
     */
    public $utcCreate;
    protected $_name = [
        'deviceName'      => 'DeviceName',
        'deviceSecret'    => 'DeviceSecret',
        'firmwareVersion' => 'FirmwareVersion',
        'gmtActive'       => 'GmtActive',
        'gmtCreate'       => 'GmtCreate',
        'iotId'           => 'IotId',
        'nickname'        => 'Nickname',
        'nodeType'        => 'NodeType',
        'productKey'      => 'ProductKey',
        'productName'     => 'ProductName',
        'region'          => 'Region',
        'status'          => 'Status',
        'utcActive'       => 'UtcActive',
        'utcCreate'       => 'UtcCreate',
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
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->nickname) {
            $res['Nickname'] = $this->nickname;
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
        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['Nickname'])) {
            $model->nickname = $map['Nickname'];
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
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
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

        return $model;
    }
}

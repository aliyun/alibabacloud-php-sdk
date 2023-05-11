<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceResponseBody\data;

use AlibabaCloud\Tea\Model;

class deviceInfo extends Model
{
    /**
     * @description The ID of the device.
     *
     * >  This parameter is deprecated. Do not use this parameter to identify a device. You can use the **IotId** parameter or a combination of the **ProductKey** and **DeviceName** parameters to identify a device.
     * @example dwnS41bhNxjslDAI****
     *
     * @var string
     */
    public $deviceId;

    /**
     * @description The name of the device.
     *
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The DeviceSecret of the device.
     *
     * @example sLefbFmN9SYfnWLJTePG893XNuRV****
     *
     * @var string
     */
    public $deviceSecret;

    /**
     * @description The status of the device. Valid values:
     *
     *   **ONLINE**: The device is online.
     *   **OFFLINE**: The device is offline.
     *   **UNACTIVE**: The device is not activated.
     *   **DISABLE**: The device is deactivated.
     *
     * @example ONLINE
     *
     * @var string
     */
    public $deviceStatus;

    /**
     * @description The category of the product to which the device belongs.
     *
     * >  This parameter is not returned.
     * @example Lighting
     *
     * @var string
     */
    public $deviceType;

    /**
     * @description The time when the device was created. The time is in the GMT format.
     *
     * @example Wed, 20-Feb-2019 02:16:09 GMT
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the device information was last updated. The time is in the GMT format.
     *
     * @example Wed, 20-Feb-2019 02:16:09 GMT
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the device. The ID is a unique identifier that is issued by IoT Platform to the device.
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
     * @description The ProductKey of the product to which the device belongs.
     *
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The time when the device was created. The time is displayed in UTC.
     *
     * @example 2019-02-20T02:16:09.000Z
     *
     * @var string
     */
    public $utcCreate;

    /**
     * @description The time when the device information was last updated. The time is displayed in UTC.
     *
     * @example 2019-02-20T02:16:09.000Z
     *
     * @var string
     */
    public $utcModified;
    protected $_name = [
        'deviceId'     => 'DeviceId',
        'deviceName'   => 'DeviceName',
        'deviceSecret' => 'DeviceSecret',
        'deviceStatus' => 'DeviceStatus',
        'deviceType'   => 'DeviceType',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'iotId'        => 'IotId',
        'nickname'     => 'Nickname',
        'productKey'   => 'ProductKey',
        'utcCreate'    => 'UtcCreate',
        'utcModified'  => 'UtcModified',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceSecret) {
            $res['DeviceSecret'] = $this->deviceSecret;
        }
        if (null !== $this->deviceStatus) {
            $res['DeviceStatus'] = $this->deviceStatus;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->nickname) {
            $res['Nickname'] = $this->nickname;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
        }
        if (null !== $this->utcModified) {
            $res['UtcModified'] = $this->utcModified;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DeviceSecret'])) {
            $model->deviceSecret = $map['DeviceSecret'];
        }
        if (isset($map['DeviceStatus'])) {
            $model->deviceStatus = $map['DeviceStatus'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['Nickname'])) {
            $model->nickname = $map['Nickname'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }
        if (isset($map['UtcModified'])) {
            $model->utcModified = $map['UtcModified'];
        }

        return $model;
    }
}

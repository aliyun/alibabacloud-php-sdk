<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechLicenseDeviceListResponseBody\data\deviceList;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @description The DeviceName of the device.
     *
     * @example test
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The status of the device.
     *
     *   **ONLINE**: The device is online.
     *   **OFFLINE**: The device is offline.
     *   **UNACTIVE**: The device is not activated.
     *   **DISABLE**: The device is disabled.
     *   **DELETE**: The device is deleted.
     *
     * @example ONLINE
     *
     * @var string
     */
    public $deviceStatus;

    /**
     * @description The expiration time of the license.
     *
     * @example 1620624606000
     *
     * @var int
     */
    public $expiryTime;

    /**
     * @description Indicates whether the device belongs to the specified device group.
     *
     * @example true
     *
     * @var bool
     */
    public $inSpecifiedGroup;

    /**
     * @description The ID of the device. The ID is the unique identifier that is issued by IoT Platform to the device.
     *
     * @example Q7uOhVRdZRRlDnTLv****00100
     *
     * @var string
     */
    public $iotId;

    /**
     * @description The license status.
     *
     *   **NORMAL**: The license is valid.
     *   **EXPIRE**: The license is expired.
     *   **EXPIRING**: The license is about to expire.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $licenseStatus;

    /**
     * @description The **ProductKey** of the product to which the device belongs.
     *
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The ProductName of the product to which the device belongs.
     *
     * @example test
     *
     * @var string
     */
    public $productName;
    protected $_name = [
        'deviceName'       => 'DeviceName',
        'deviceStatus'     => 'DeviceStatus',
        'expiryTime'       => 'ExpiryTime',
        'inSpecifiedGroup' => 'InSpecifiedGroup',
        'iotId'            => 'IotId',
        'licenseStatus'    => 'LicenseStatus',
        'productKey'       => 'ProductKey',
        'productName'      => 'ProductName',
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
        if (null !== $this->deviceStatus) {
            $res['DeviceStatus'] = $this->deviceStatus;
        }
        if (null !== $this->expiryTime) {
            $res['ExpiryTime'] = $this->expiryTime;
        }
        if (null !== $this->inSpecifiedGroup) {
            $res['InSpecifiedGroup'] = $this->inSpecifiedGroup;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->licenseStatus) {
            $res['LicenseStatus'] = $this->licenseStatus;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DeviceStatus'])) {
            $model->deviceStatus = $map['DeviceStatus'];
        }
        if (isset($map['ExpiryTime'])) {
            $model->expiryTime = $map['ExpiryTime'];
        }
        if (isset($map['InSpecifiedGroup'])) {
            $model->inSpecifiedGroup = $map['InSpecifiedGroup'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['LicenseStatus'])) {
            $model->licenseStatus = $map['LicenseStatus'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        return $model;
    }
}

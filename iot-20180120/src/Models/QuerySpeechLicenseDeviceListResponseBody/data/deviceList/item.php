<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechLicenseDeviceListResponseBody\data\deviceList;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example ONLINE
     *
     * @var string
     */
    public $deviceStatus;

    /**
     * @example 1620624606000
     *
     * @var int
     */
    public $expiryTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $inSpecifiedGroup;

    /**
     * @example Q7uOhVRdZRRlDnTLv****00100
     *
     * @var string
     */
    public $iotId;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $licenseStatus;

    /**
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
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

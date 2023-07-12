<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechLicenseDeviceListResponse\data\deviceList;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $deviceStatus;

    /**
     * @var int
     */
    public $expiryTime;

    /**
     * @var bool
     */
    public $inSpecifiedGroup;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $licenseStatus;

    /**
     * @var string
     */
    public $productKey;

    /**
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
        Model::validateRequired('deviceName', $this->deviceName, true);
        Model::validateRequired('deviceStatus', $this->deviceStatus, true);
        Model::validateRequired('expiryTime', $this->expiryTime, true);
        Model::validateRequired('inSpecifiedGroup', $this->inSpecifiedGroup, true);
        Model::validateRequired('iotId', $this->iotId, true);
        Model::validateRequired('licenseStatus', $this->licenseStatus, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('productName', $this->productName, true);
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

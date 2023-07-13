<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceByStatusResponseBody\data;

use AlibabaCloud\Tea\Model;

class simpleDeviceInfo extends Model
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
     * @description The secret of the device.
     *
     * @example sLefbFmN9SYfnWLJTePG893XNuRV****
     *
     * @var string
     */
    public $deviceSecret;

    /**
     * @description The time when the device was created. The time is displayed in UTC.
     *
     * @example 2021-02-18 10:46:32
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the device information was last modified. The time is displayed in UTC.
     *
     * @example 2021-02-18 10:46:32
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the device.
     *
     * @example Av8NGHGtwPrH9BYGLMBi00****
     *
     * @var string
     */
    public $iotId;

    /**
     * @description The alias of the device.
     *
     * @example SensorInShanghai
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
     * @description The status of the device. Valid values:
     *
     *   **UNACTIVE**: The device is not activated.
     *   **ONLINE**: The device is online.
     *   **OFFLINE**: The device is offline.
     *   **DISABLE**: The device is disabled.
     *
     * @example ONLINE
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the device was created. The time is displayed in UTC.
     *
     * @example 2021-02-18T02:46:32.000Z
     *
     * @var string
     */
    public $utcCreate;

    /**
     * @description The time when the device information was last modified. The time is displayed in UTC.
     *
     * @example 2021-02-18T02:46:32.000Z
     *
     * @var string
     */
    public $utcModified;
    protected $_name = [
        'deviceName'   => 'DeviceName',
        'deviceSecret' => 'DeviceSecret',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'iotId'        => 'IotId',
        'nickname'     => 'Nickname',
        'productKey'   => 'ProductKey',
        'status'       => 'Status',
        'utcCreate'    => 'UtcCreate',
        'utcModified'  => 'UtcModified',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
     * @return simpleDeviceInfo
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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

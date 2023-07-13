<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAUnfinishedTaskByDeviceResponseBody\data;

use AlibabaCloud\Tea\Model;

class simpleOTATaskInfo extends Model
{
    /**
     * @description The firmware version after the update.
     *
     * @example 1.0.1
     *
     * @var string
     */
    public $destVersion;

    /**
     * @description The DeviceName of the device.
     *
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The ID of the update package.
     *
     * @example q3j9OYBjUAZMv1hlMgdo03****
     *
     * @var string
     */
    public $firmwareId;

    /**
     * @description The ID of the device. The ID is a unique identifier that is issued by IoT Platform to the device.
     *
     * @example nadRdeffljdEndlfadgadfse****
     *
     * @var string
     */
    public $iotId;

    /**
     * @description The ID of the update batch.
     *
     * @example 7glPHmaDYLAYMD1HHutT02****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The name of the OTA module.
     *
     * @example WifiConfigModify
     *
     * @var string
     */
    public $moduleName;

    /**
     * @description The ProductKey of the product to which the device belongs.
     *
     * @example a1GUfrM****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The name of the product to which the device belongs.
     *
     * @example MyProduct
     *
     * @var string
     */
    public $productName;

    /**
     * @description The firmware version before the update.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $srcVersion;

    /**
     * @description The ID of the update task.
     *
     * @example y3tOmCDNgpR8F9jnVEzC01****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The status of the update task.
     *
     *   **CONFIRM**: The update task is pending confirmation.
     *   **QUEUED**: The update notification is to be pushed.
     *   **NOTIFIED**: The update notification is pushed to the device.
     *   **IN_PROGRESS**: The update task is in progress.
     *
     * @example CONFIRM
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @description The time when the update task was created. The time is displayed in UTC.
     *
     * @example 2019-11-04T03:38:22.000Z
     *
     * @var string
     */
    public $utcCreate;

    /**
     * @description The time when the update task was last modified. The time is displayed in UTC.
     *
     * @example 2021-11-04T03:38:22.000Z
     *
     * @var string
     */
    public $utcModified;
    protected $_name = [
        'destVersion' => 'DestVersion',
        'deviceName'  => 'DeviceName',
        'firmwareId'  => 'FirmwareId',
        'iotId'       => 'IotId',
        'jobId'       => 'JobId',
        'moduleName'  => 'ModuleName',
        'productKey'  => 'ProductKey',
        'productName' => 'ProductName',
        'srcVersion'  => 'SrcVersion',
        'taskId'      => 'TaskId',
        'taskStatus'  => 'TaskStatus',
        'utcCreate'   => 'UtcCreate',
        'utcModified' => 'UtcModified',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destVersion) {
            $res['DestVersion'] = $this->destVersion;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->firmwareId) {
            $res['FirmwareId'] = $this->firmwareId;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->srcVersion) {
            $res['SrcVersion'] = $this->srcVersion;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
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
     * @return simpleOTATaskInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestVersion'])) {
            $model->destVersion = $map['DestVersion'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['FirmwareId'])) {
            $model->firmwareId = $map['FirmwareId'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['SrcVersion'])) {
            $model->srcVersion = $map['SrcVersion'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
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

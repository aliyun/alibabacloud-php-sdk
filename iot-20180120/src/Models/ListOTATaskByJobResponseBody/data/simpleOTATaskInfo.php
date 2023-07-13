<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListOTATaskByJobResponseBody\data;

use AlibabaCloud\Tea\Model;

class simpleOTATaskInfo extends Model
{
    /**
     * @description The version of the destination over-the-air (OTA) update package.
     *
     * @example 1.0.1
     *
     * @var string
     */
    public $destVersion;

    /**
     * @description The name of the device.
     *
     * @example testDevice2
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
     * @description The ID of the device.
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
     * @description The current update progress.
     *
     * @example 0.00
     *
     * @var string
     */
    public $progress;

    /**
     * @description The firmware version before the update.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $srcVersion;

    /**
     * @description The description of the update task. This parameter displays an error message if the device update times out or the update task is canceled.
     *
     * @example report version is not conform
     *
     * @var string
     */
    public $taskDesc;

    /**
     * @description The ID of the update task.
     *
     * @example y3tOmCDNgpR8F9jnVEzC01****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The update status of the device.
     *
     *   **CONFIRM**: The update task is pending confirmation.
     *   **QUEUED**: The update notification is to be pushed.
     *   **NOTIFIED**: The update notification is pushed to the device.
     *   **IN_PROGRESS**: The update task is in progress.
     *   **SUCCEEDED**: The update is successful.
     *   **FAILED**: The update failed.
     *   **CANCELED**: The update batch is canceled.
     *
     * @example FAILED
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @description The timeout period of the device update. Unit: minutes.
     *
     * >  If no timeout period is specified for the update batch, the return value is null.
     * @example 1440
     *
     * @var string
     */
    public $timeout;

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
     * @example 2019-11-04T03:38:22.000Z
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
        'productKey'  => 'ProductKey',
        'productName' => 'ProductName',
        'progress'    => 'Progress',
        'srcVersion'  => 'SrcVersion',
        'taskDesc'    => 'TaskDesc',
        'taskId'      => 'TaskId',
        'taskStatus'  => 'TaskStatus',
        'timeout'     => 'Timeout',
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
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->srcVersion) {
            $res['SrcVersion'] = $this->srcVersion;
        }
        if (null !== $this->taskDesc) {
            $res['TaskDesc'] = $this->taskDesc;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
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
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['SrcVersion'])) {
            $model->srcVersion = $map['SrcVersion'];
        }
        if (isset($map['TaskDesc'])) {
            $model->taskDesc = $map['TaskDesc'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
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

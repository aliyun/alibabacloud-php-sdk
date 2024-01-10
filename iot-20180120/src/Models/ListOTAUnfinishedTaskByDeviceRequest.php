<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ListOTAUnfinishedTaskByDeviceRequest extends Model
{
    /**
     * @description The DeviceName of the device.
     *
     * > If you specify this parameter, you must also specify the **ProductKey** parameter.
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The ID of the device.
     *
     * > If you specify this parameter, you do not need to specify **ProductKey** or **DeviceName**. The **IotId** parameter specifies a globally unique identifier (GUID) of the device, which corresponds to a combination of **ProductKey** and **DeviceName**. If you specify both **IotId** and the combination of **ProductKey** and **DeviceName**, **IotId** takes precedence.
     * @example TfmUAeJjQQhCPH84UVNn0010c6****
     *
     * @var string
     */
    public $iotId;

    /**
     * @description The ID of the instance. You can view the instance **ID** on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must configure this parameter. If you do not set this parameter, the call fails.
     * >*   If your instance has no **Overview** page or ID, you do not need to set this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot-c3j***
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The name of the OTA module.
     *
     *   If you specify this parameter, update tasks of the specified module are queried.
     *   If you do not specify this parameter, update tasks of all modules are queried.
     *
     * @example WifiConfigModify
     *
     * @var string
     */
    public $moduleName;

    /**
     * @description The ProductKey of the product to which the device belongs.
     *
     * > If you specify this parameter, you must also specify the **DeviceName** parameter.
     * @example a19mzPZ****
     *
     * @var string
     */
    public $productKey;

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
     * @var string[]
     */
    public $taskStatusList;
    protected $_name = [
        'deviceName'     => 'DeviceName',
        'iotId'          => 'IotId',
        'iotInstanceId'  => 'IotInstanceId',
        'moduleName'     => 'ModuleName',
        'productKey'     => 'ProductKey',
        'taskStatus'     => 'TaskStatus',
        'taskStatusList' => 'TaskStatusList',
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
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskStatusList) {
            $res['TaskStatusList'] = $this->taskStatusList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOTAUnfinishedTaskByDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskStatusList'])) {
            if (!empty($map['TaskStatusList'])) {
                $model->taskStatusList = $map['TaskStatusList'];
            }
        }

        return $model;
    }
}

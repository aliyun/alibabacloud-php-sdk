<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\CreateOTADynamicUpgradeJobRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateOTADynamicUpgradeJobRequest extends Model
{
    /**
     * @description Specifies whether the device supports simultaneous updates of multiple modules. Default value: false. Valid values:
     *
     *   **false**
     *
     *   **true**: In this case, do not set **OverwriteMode** to **2**.********
     *
     * The update tasks for the same module are overwritten. The update tasks that are in progress are not overwritten. The update tasks of the modules do not affect each other.
     *
     * >*   Only Enterprise Edition instances and new public instances are supported.
     * >*   You must use Link SDK for C 4.x to develop the device.
     * >*   If you initiate a group-based dynamic update batch, the settings of **MultiModuleMode** and **OverwriteMode** must be the same as those in the existing dynamic update batch of the group.
     *
     * For more information, see [Overview](~~58328~~).
     * @example HTTPS
     *
     * @var string
     */
    public $downloadProtocol;

    /**
     * @description Specifies whether to automatically push update tasks from IoT Platform to devices. Default value: true. Valid values:
     *
     *   **true**: After an update batch is created, IoT Platform automatically pushes update tasks to the specified online devices.
     *
     * In this case, a device can still initiate a request to obtain the information about the over-the-air (OTA) update task from IoT Platform.
     *
     *   **false**: A device must initiate a request to obtain the information about the OTA update task from IoT Platform.
     *
     * @example 1
     *
     * @var int
     */
    public $dynamicMode;

    /**
     * @description The **ProductKey** of the product to which the update package belongs.
     *
     * A **ProductKey** is the unique identifier of a product in IoT Platform. You can view the information about all products within the current Alibaba Cloud account in the IoT Platform console or by calling the [QueryProductList](~~69271~~) operation.
     * @example nx3xxVvFdwvn6dim50PY03****
     *
     * @var string
     */
    public $firmwareId;

    /**
     * @description The type of the group. Valid value: **LINK_PLATFORM_DYNAMIC**.
     *
     *   If you specify this parameter, you must also specify the **GroupId** parameter. In this case, do not specify the **SrcVersion.N** parameter.
     *   If you do not specify this parameter, you do not need to specify the **GroupId** parameter. In this case, you must specify the **SrcVersion.N** parameter.
     *
     * @example IwOwQj7DJ***
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The download protocol of the update package. Valid values: **HTTPS** and **MQTT**. Default value: HTTPS. After the device receives the update package information pushed by IoT Platform, this protocol is used to download the update package.
     *
     * > If you need to download the update package over MQTT, take note of the following items:
     * >*   Your service must be deployed in the China (Shanghai) region.
     * >*   The OTA update package can contain only one file, and the size of the file cannot exceed 16 MB.
     * >*   You must use the latest version of Link SDK for C to develop the device features to perform OTA updates and download files over MQTT. For more information, see [Sample code](~~330985~~).
     * @example LINK_PLATFORM_DYNAMIC
     *
     * @var string
     */
    public $groupType;

    /**
     * @description The ID of the update package.
     *
     * You can also call the [ListOTAFirmware](~~147450~~) operation to obtain the ID.
     * @example iot-cn-0pp1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description Specifies whether to overwrite the previous update task. Default value: 1. Valid values:
     *
     *   **1**: The previous update task is not overwritten. If a device already has an update task, the previous update task is implemented.
     *   **2**: The previous update task is overwritten. Only the current update task is implemented. In this case, you cannot set **MultiModuleMode** to **true**.
     *
     * >  The update task that is in progress is not overwritten.
     * @example 1000
     *
     * @var int
     */
    public $maximumPerMinute;

    /**
     * @description The list of firmware versions to be updated.
     *
     *   If you specify this parameter, do not specify the **GroupId** and **GroupType** parameters.
     *   If you do not specify this parameter, you must specify the **GroupId** and **GroupType** parameters.
     *
     * > If you use differential update packages to perform dynamic update tasks on dynamic groups, you do not need to specify this parameter.
     * >*   If you use differential update packages to perform dynamic update tasks based on versions, the value of this parameter must be the same as the value of **SrcVersion**.
     * >*   You can call the [QueryDeviceDetail](~~69594~~) operation and view the **FirmwareVersion** parameter in the response.
     * >*   The version numbers must be unique in the list.
     * >*   You can specify a maximum of 10 version numbers.
     * @example false
     *
     * @var bool
     */
    public $multiModuleMode;

    /**
     * @description The ID of the group.
     *
     *   If you specify this parameter, you must also specify the **GroupType** parameter. In this case, do not specify the **SrcVersion.N** parameter.
     *   If you do not specify this parameter, you do not need to specify the **GroupType** parameter. In this case, you must specify the **SrcVersion.N** parameter.
     *
     * You can call the [QueryDeviceGroupList](~~93356~~) operation to query the **GroupId** parameter.
     * @example false
     *
     * @var bool
     */
    public $needConfirm;

    /**
     * @description Specifies whether to control the update by using a mobile app. You must develop the mobile app as needed. Default value: false. Valid values:
     *
     *   **false**: A device obtains the information about the OTA update task based on the **NeedPush** parameter.
     *   **true**: To perform an OTA update on a device, you must confirm the update by using your mobile app. Then, the device can obtain the information about the OTA update task based on the **NeedPush** parameter.
     *
     * @example true
     *
     * @var bool
     */
    public $needPush;

    /**
     * @description The mode of dynamic update. Default value: 1. Valid values:
     *
     *   **1**: constantly updates the devices that meet the conditions.
     *   **2**: updates only the devices that subsequently submit the latest firmware versions.
     *
     * @example 2
     *
     * @var int
     */
    public $overwriteMode;

    /**
     * @description The automatic retry interval if a device fails to be updated. Unit: minutes. Valid values:
     *
     *   **0**: An automatic retry is immediately performed.
     *   **10**: An automatic retry is performed after 10 minutes.
     *   **30**: An automatic retry is performed after 30 minutes.
     *   **60**: An automatic retry is performed after 60 minutes (1 hour).
     *   **1440**: An automatic retry is performed after 1,440 minutes (24 hours).
     *
     * > The value of the **RetryInterval** parameter must be less than the value of the **TimeoutInMinutes** parameter. Examples:
     * >*   If the value of the **TimeoutInMinutes** parameter is set to 60, the maximum value of the **RetryInterval** parameter is 30.
     * >*   If the value of the **TimeoutInMinutes** parameter is set to 1440, the maximum value of the **RetryInterval** parameter is 60.
     *
     * If the value of the **RetryInterval** parameter is set to 1440, we recommend that you do not specify the **TimeoutInMinutes** parameter. If an update times out, no retry is performed.
     *
     * If you do not specify this parameter, no retry is performed.
     * @example a1Le6d0****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The timeout period of the update. If the device is not updated within the specified period, a timeout error occurs. Unit: minutes. Valid values: 1 to 1440.
     *
     * > *   The timeout period starts from the time when the specified device submits the update progress for the first time. During the update, the update package may be repeatedly pushed to the specified device because the device goes online and offline multiple times. The start time of the update period remains unchanged.
     * >*   If an update fails due to timeout, no retry is triggered.
     *
     * If you do not specify this parameter, timeout errors do not occur.
     * @example 1
     *
     * @var int
     */
    public $retryCount;

    /**
     * @description The number of automatic retries.
     *
     * If you specify the **RetryInterval** parameter, you must specify this parameter.
     *
     * Valid values:
     *
     *   **1**: retries once.
     *   **2**: retries twice.
     *   **5**: retries five times.
     *
     * @example 60
     *
     * @var int
     */
    public $retryInterval;

    /**
     * @example V1.0.1
     *
     * @var string[]
     */
    public $srcVersion;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @description The maximum number of devices to which the download URL of the update package is pushed per minute. Valid values: 10 to 10000.
     *
     * Default value: 10000.
     * @example 1440
     *
     * @var int
     */
    public $timeoutInMinutes;
    protected $_name = [
        'downloadProtocol' => 'DownloadProtocol',
        'dynamicMode'      => 'DynamicMode',
        'firmwareId'       => 'FirmwareId',
        'groupId'          => 'GroupId',
        'groupType'        => 'GroupType',
        'iotInstanceId'    => 'IotInstanceId',
        'maximumPerMinute' => 'MaximumPerMinute',
        'multiModuleMode'  => 'MultiModuleMode',
        'needConfirm'      => 'NeedConfirm',
        'needPush'         => 'NeedPush',
        'overwriteMode'    => 'OverwriteMode',
        'productKey'       => 'ProductKey',
        'retryCount'       => 'RetryCount',
        'retryInterval'    => 'RetryInterval',
        'srcVersion'       => 'SrcVersion',
        'tag'              => 'Tag',
        'timeoutInMinutes' => 'TimeoutInMinutes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadProtocol) {
            $res['DownloadProtocol'] = $this->downloadProtocol;
        }
        if (null !== $this->dynamicMode) {
            $res['DynamicMode'] = $this->dynamicMode;
        }
        if (null !== $this->firmwareId) {
            $res['FirmwareId'] = $this->firmwareId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->maximumPerMinute) {
            $res['MaximumPerMinute'] = $this->maximumPerMinute;
        }
        if (null !== $this->multiModuleMode) {
            $res['MultiModuleMode'] = $this->multiModuleMode;
        }
        if (null !== $this->needConfirm) {
            $res['NeedConfirm'] = $this->needConfirm;
        }
        if (null !== $this->needPush) {
            $res['NeedPush'] = $this->needPush;
        }
        if (null !== $this->overwriteMode) {
            $res['OverwriteMode'] = $this->overwriteMode;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->retryCount) {
            $res['RetryCount'] = $this->retryCount;
        }
        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
        }
        if (null !== $this->srcVersion) {
            $res['SrcVersion'] = $this->srcVersion;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOTADynamicUpgradeJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadProtocol'])) {
            $model->downloadProtocol = $map['DownloadProtocol'];
        }
        if (isset($map['DynamicMode'])) {
            $model->dynamicMode = $map['DynamicMode'];
        }
        if (isset($map['FirmwareId'])) {
            $model->firmwareId = $map['FirmwareId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['MaximumPerMinute'])) {
            $model->maximumPerMinute = $map['MaximumPerMinute'];
        }
        if (isset($map['MultiModuleMode'])) {
            $model->multiModuleMode = $map['MultiModuleMode'];
        }
        if (isset($map['NeedConfirm'])) {
            $model->needConfirm = $map['NeedConfirm'];
        }
        if (isset($map['NeedPush'])) {
            $model->needPush = $map['NeedPush'];
        }
        if (isset($map['OverwriteMode'])) {
            $model->overwriteMode = $map['OverwriteMode'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['RetryCount'])) {
            $model->retryCount = $map['RetryCount'];
        }
        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
        }
        if (isset($map['SrcVersion'])) {
            if (!empty($map['SrcVersion'])) {
                $model->srcVersion = $map['SrcVersion'];
            }
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }

        return $model;
    }
}

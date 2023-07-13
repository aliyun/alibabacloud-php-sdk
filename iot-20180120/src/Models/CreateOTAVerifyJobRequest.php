<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\CreateOTAVerifyJobRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateOTAVerifyJobRequest extends Model
{
    /**
     * @description The download protocol of the update package. Valid values: **HTTPS** and **MQTT**. Default value: HTTPS. After the device receives the update package information pushed by IoT Platform, this protocol is used to download the update package.
     *
     * > If you want to download the update package over MQTT, take note of the following items:
     * >*   The following regions are supported: China (Shanghai), China (Beijing), and China (Shenzhen).
     * >*   The OTA update package can contain only one file and the size of the file cannot exceed 16 MB.
     * >*   You must use the latest version of Link SDK for C to develop the device features to perform OTA updates and download files over MQTT. For more information, see [Sample code](~~330985~~).
     * @example HTTPS
     *
     * @var string
     */
    public $downloadProtocol;

    /**
     * @description The ID of the update package.
     *
     * The **FirmwareId** parameter is returned when you call the [CreateOTAFirmware](~~147311~~) operation to create an OTA update package.
     *
     * You can also call the [ListOTAFirmware](~~147450~~) operation to obtain the ID.
     * @example nx3xxVvFdwvn6dim50PY03****
     *
     * @var string
     */
    public $firmwareId;

    /**
     * @description The ID of the instance. You can view the ID of an instance on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must specify the ID for this parameter. Otherwise, the call fails.****
     * >*   If no **Overview** page or **ID** is generated for your instance, you do not need to configure this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description Specifies whether to control the update by using a mobile app. You must develop the mobile app as needed.
     *
     *   **false** (default): no. A device obtains the information about the OTA update task based on the **NeedPush** parameter.
     *   **true**: yes To perform an OTA update on a device, you must confirm the update by using your mobile app. Then, the device can obtain the information about the OTA update task based on the **NeedPush** parameter.
     *
     * @example false
     *
     * @var bool
     */
    public $needConfirm;

    /**
     * @description Specifies whether to automatically push update tasks from IoT Platform to devices.
     *
     *   **true** (default): yes. After an update batch is created, IoT Platform automatically pushes update tasks to the specified online devices.
     *
     * In this case, a device can still initiate a request to obtain the information about the over-the-air (OTA) update task from IoT Platform.
     *
     *   **false**: no. A device must initiate a request to obtain the information about the OTA update task from IoT Platform.
     *
     * @example true
     *
     * @var bool
     */
    public $needPush;

    /**
     * @description The ProductKey of the product to which the OTA update package belongs.
     *
     * @example a1VJwBw****
     *
     * @var string
     */
    public $productKey;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @example testdevice
     *
     * @var string[]
     */
    public $targetDeviceName;

    /**
     * @description The timeout period for a device to update the firmware. Unit: minutes. Valid values: 1 to 1440.
     *
     * @example 1440
     *
     * @var int
     */
    public $timeoutInMinutes;
    protected $_name = [
        'downloadProtocol' => 'DownloadProtocol',
        'firmwareId'       => 'FirmwareId',
        'iotInstanceId'    => 'IotInstanceId',
        'needConfirm'      => 'NeedConfirm',
        'needPush'         => 'NeedPush',
        'productKey'       => 'ProductKey',
        'tag'              => 'Tag',
        'targetDeviceName' => 'TargetDeviceName',
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
        if (null !== $this->firmwareId) {
            $res['FirmwareId'] = $this->firmwareId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->needConfirm) {
            $res['NeedConfirm'] = $this->needConfirm;
        }
        if (null !== $this->needPush) {
            $res['NeedPush'] = $this->needPush;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
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
        if (null !== $this->targetDeviceName) {
            $res['TargetDeviceName'] = $this->targetDeviceName;
        }
        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOTAVerifyJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadProtocol'])) {
            $model->downloadProtocol = $map['DownloadProtocol'];
        }
        if (isset($map['FirmwareId'])) {
            $model->firmwareId = $map['FirmwareId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['NeedConfirm'])) {
            $model->needConfirm = $map['NeedConfirm'];
        }
        if (isset($map['NeedPush'])) {
            $model->needPush = $map['NeedPush'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
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
        if (isset($map['TargetDeviceName'])) {
            if (!empty($map['TargetDeviceName'])) {
                $model->targetDeviceName = $map['TargetDeviceName'];
            }
        }
        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }

        return $model;
    }
}

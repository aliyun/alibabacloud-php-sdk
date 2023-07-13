<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CancelOTATaskByDeviceRequest extends Model
{
    /**
     * @example device1
     *
     * @var string[]
     */
    public $deviceName;

    /**
     * @description The unique ID of the OTA update package.
     *
     * You can call the [ListOTAFirmware](~~147450~~) operation and view the update package ID in the response.
     * @example T0F5b5tpFnHQrgfk****030100
     *
     * @var string
     */
    public $firmwareId;

    /**
     * @description The ID of the instance. You can view the **ID** of the instance on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must specify the ID for this parameter. Otherwise, the call fails.
     * >*   If no **Overview** page or ID is generated for your instance, you do not need to configure this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The ID of the update batch. If you configure this parameter, only the device update tasks in the specified update batch are deleted.
     *
     * After you call the [CreateOTAVerifyJob](~~147480~~), [CreateOTAStaticUpgradeJob](~~147496~~), or [CreateOTADynamicUpgradeJob](~~147887~~) operation to create a device update task, you can obtain the value of the **JobId** parameter. You can also view the batch ID on the **Firmware Details** page in the IoT Platform console.
     * @example wahVIzGkCMuAUE2gDERM02****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The ProductKey of the product to which the device belongs.
     *
     * @example a1V4kde****
     *
     * @var string
     */
    public $productKey;
    protected $_name = [
        'deviceName'    => 'DeviceName',
        'firmwareId'    => 'FirmwareId',
        'iotInstanceId' => 'IotInstanceId',
        'jobId'         => 'JobId',
        'productKey'    => 'ProductKey',
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
        if (null !== $this->firmwareId) {
            $res['FirmwareId'] = $this->firmwareId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelOTATaskByDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            if (!empty($map['DeviceName'])) {
                $model->deviceName = $map['DeviceName'];
            }
        }
        if (isset($map['FirmwareId'])) {
            $model->firmwareId = $map['FirmwareId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}

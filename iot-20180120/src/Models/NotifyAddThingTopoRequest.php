<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class NotifyAddThingTopoRequest extends Model
{
    /**
     * @description A JSON array of the sub-device identity information. You can use a combination of **ProductKey** and **DeviceName** or only **IotId** to specify a device, such as **\[{"productKey":"a1BwAGxxx","deviceName":"device1"},{"IotId":"Q7uOhxxx"}]**.
     *
     * @example [{"productKey":"a1BwAGV****","deviceName":"device1"},{"IotId":"Q7uOhVRdZRRlDnTLv****00100"}]
     *
     * @var string
     */
    public $deviceListStr;

    /**
     * @description The DeviceName of the gateway.
     *
     * >  If you specify this parameter, you must also specify the **ProductKey** parameter.
     * @example gateway
     *
     * @var string
     */
    public $gwDeviceName;

    /**
     * @description The ID of the gateway device. The ID is a unique identifier that is issued by IoT Platform to the device.
     *
     * >  If you specify this parameter, you do not need to specify **ProductKey** or **DeviceName**. The **IotId** parameter specifies a globally unique identifier (GUID) of the device, which corresponds to a combination of **ProductKey** and **DeviceName**. If you specify both **IotId** and the combination of **ProductKey** and **DeviceName**, **IotId** takes precedence.
     * @example vWxNur6BUApsqjv****4000100
     *
     * @var string
     */
    public $gwIotId;

    /**
     * @description The ProductKey of the product to which the gateway belongs.
     *
     * >  If you specify this parameter, you must also specify the **DeviceName** parameter.
     * @example a1T27vz****
     *
     * @var string
     */
    public $gwProductKey;

    /**
     * @description The ID of the instance. You can view the instance **ID** on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must configure this parameter. If you do not set this parameter, the call fails.
     * >*   If your instance has no **Overview** page or ID, you do not need to set this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'deviceListStr' => 'DeviceListStr',
        'gwDeviceName'  => 'GwDeviceName',
        'gwIotId'       => 'GwIotId',
        'gwProductKey'  => 'GwProductKey',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceListStr) {
            $res['DeviceListStr'] = $this->deviceListStr;
        }
        if (null !== $this->gwDeviceName) {
            $res['GwDeviceName'] = $this->gwDeviceName;
        }
        if (null !== $this->gwIotId) {
            $res['GwIotId'] = $this->gwIotId;
        }
        if (null !== $this->gwProductKey) {
            $res['GwProductKey'] = $this->gwProductKey;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NotifyAddThingTopoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceListStr'])) {
            $model->deviceListStr = $map['DeviceListStr'];
        }
        if (isset($map['GwDeviceName'])) {
            $model->gwDeviceName = $map['GwDeviceName'];
        }
        if (isset($map['GwIotId'])) {
            $model->gwIotId = $map['GwIotId'];
        }
        if (isset($map['GwProductKey'])) {
            $model->gwProductKey = $map['GwProductKey'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}

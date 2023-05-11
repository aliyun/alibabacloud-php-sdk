<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class SaveDevicePropRequest extends Model
{
    /**
     * @description The DeviceName of the device.
     *
     * >  If you specify this parameter, you must also specify the **ProductKey** parameter.
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The ID of the device. The ID is a unique identifier that is issued by IoT Platform to the device.
     *
     * >  If you specify this parameter, you do not need to specify the **ProductKey** or **DeviceName** parameters. The **IotId** parameter specifies a globally unique identifier (GUID) for the device. The value of the IotId parameter corresponds to a combination of the values of the **ProductKey** and **DeviceName** parameters. If you specify the **IotId**, **ProductKey**, and **DeviceName** parameters, the value of the **IotId** parameter takes precedence.
     * @example Q7uOhVRdZRRlDnTLv****00100
     *
     * @var string
     */
    public $iotId;

    /**
     * @description The ID of the instance. On the **Overview** page in the IoT Platform console, you can view the **ID** of the instance.
     *
     *
     **Important**
     *
     *   If your instance has an ID, you must specify the ID for this parameter. Otherwise, the call fails.
     *   If the **Overview** page or instance ID is not displayed in the IoT Platform console, you do not need to configure this parameter.
     *
     * For more information about the instance, see [Overview](~~356505~~).
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The ProductKey of the product to which the device belongs.
     *
     * >  If you specify this parameter, you must also specify the **DeviceName** parameter.
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The tag that you want to specify for the device. You can specify multiple tags.
     *
     * The tags must be JSON data in the **Key:Value** format. **Key** indicates the tag name, and **Value** indicates the tag value.
     *
     * Separate multiple tags with commas (,). Example: **Props={"color":"red","shape":"round"}**
     *
     *
     **Important**
     *
     *   The maximum size of the **Props** parameter is 5 KB.
     *   `abc` is a **key** that is reserved by IoT Platform. You cannot set **Key** to abc. If you set `Key` to abc, the abc tag is automatically filtered when you query tags.
     *
     * @example {"color":"red"}
     *
     * @var string
     */
    public $props;
    protected $_name = [
        'deviceName'    => 'DeviceName',
        'iotId'         => 'IotId',
        'iotInstanceId' => 'IotInstanceId',
        'productKey'    => 'ProductKey',
        'props'         => 'Props',
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
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->props) {
            $res['Props'] = $this->props;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveDevicePropRequest
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
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['Props'])) {
            $model->props = $map['Props'];
        }

        return $model;
    }
}

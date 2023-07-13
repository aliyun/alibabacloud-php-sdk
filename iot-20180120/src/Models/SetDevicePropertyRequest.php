<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class SetDevicePropertyRequest extends Model
{
    /**
     * @description The DeviceName of the device.
     *
     * > If you configure this parameter, you must specify a value for the **ProductKey** parameter.
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The ID of the device. The ID is a unique identifier that is issued by IoT Platform to the device.
     *
     * > The IotId parameter specifies a globally unique identifier (GUID) for the device. The value of the **IotId** parameter corresponds to a combination of the values of the **ProductKey** and **DeviceName** parameters. If you specify a value for this parameter, you do not need to configure the **ProductKey** or **DeviceName** parameter. If you specify values for the **IotId**, **ProductKey**, and **DeviceName** parameters, the value of the **IotId** parameter takes precedence.
     * @example Q7uOhVRdZRRlDnTLv****00100
     *
     * @var string
     */
    public $iotId;

    /**
     * @description The ID of the elastic container instance. You can view the ID of the instance on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must specify the ID for this parameter. Otherwise, the call fails.****
     * >*   If no **Overview** page or **ID** is generated for your instance, you do not need to configure this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot-v64*****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The properties that you want to specify. The properties must be in the JSON format.
     *
     * Each property consists of a **key-value pair in the key:value format**. Separate multiple properties with commas (,).
     *
     * For example, you can configure the following properties for a smart lamp:
     *
     *   A switch property whose key is **Switch** and whose data type is **BOOLEAN**. The value is **1**. The value 1 indicates that the light is on.
     *   A color property whose key is **Color** and whose data type is **STRING**. The value is **blue**.
     *
     * >  If you specify properties for the custom module testFb, set the Items parameter to `{"testFb:Switch":1,"testFb:Color":"blue"}`. The testFb module is not the default module.
     * @example {"Switch":1,"Color":"blue"}
     *
     * @var string
     */
    public $items;

    /**
     * @description The ProductKey of the product to which the device belongs.
     *
     * > If you configure this parameter, you must also specify a value for the **DeviceName** parameter.
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;
    protected $_name = [
        'deviceName'    => 'DeviceName',
        'iotId'         => 'IotId',
        'iotInstanceId' => 'IotInstanceId',
        'items'         => 'Items',
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
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->items) {
            $res['Items'] = $this->items;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDevicePropertyRequest
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
        if (isset($map['Items'])) {
            $model->items = $map['Items'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}

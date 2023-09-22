<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class SetDevicesPropertyRequest extends Model
{
    /**
     * @example light
     *
     * @var string[]
     */
    public $deviceName;

    /**
     * @description The ID of the instance. You can view the ID of the instance on the **Overview** page in the IoT Platform console.****
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
     * @description The properties that you want to specify. The properties must be in the JSON format.
     *
     * Each property consists of a **key-value pair in the key:value format**. Separate multiple properties with commas (,).
     *
     * For example, you can configure the following properties for a smart lamp:
     *
     *   A switch property whose key is **Switch** and whose data type is **BOOLEAN**. The value is **1**. The value 1 indicates that the light is on.
     *   A color property whose key is **Color** and whose data type is **STRING**. The value is **blue**.
     *
     * >  If you configure properties for the custom module testFb, set the Items parameter to `{"testFb:Switch":1,"testFb:Color":"blue"}`. The testFb module is not the default module.
     * @example {"Switch":1,"Color":"blue"}
     *
     * @var string
     */
    public $items;

    /**
     * @description The **ProductKey** of the product to which the device belongs.
     *
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @var int
     */
    public $qos;
    protected $_name = [
        'deviceName'    => 'DeviceName',
        'iotInstanceId' => 'IotInstanceId',
        'items'         => 'Items',
        'productKey'    => 'ProductKey',
        'qos'           => 'Qos',
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
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->items) {
            $res['Items'] = $this->items;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->qos) {
            $res['Qos'] = $this->qos;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDevicesPropertyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            if (!empty($map['DeviceName'])) {
                $model->deviceName = $map['DeviceName'];
            }
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
        if (isset($map['Qos'])) {
            $model->qos = $map['Qos'];
        }

        return $model;
    }
}

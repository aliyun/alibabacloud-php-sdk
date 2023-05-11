<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class SetDeviceDesiredPropertyRequest extends Model
{
    /**
     * @description The name of the device.
     *
     * > If you specify a value for this parameter, you must also specify a value for the **ProductKey** parameter.
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The ID of the device. The ID is a unique identifier that is issued by IoT Platform to the device.
     *
     * > The IotId parameter specifies a globally unique identifier (GUID) for the device. The value of the **IotId** parameter corresponds to a combination of the values of the **ProductKey** and **DeviceName** parameters. If you specify a value for this parameter, you do not need to specify the **ProductKey** or **DeviceName** parameters. If you specify values for the **IotId**, **ProductKey**, and **DeviceName** parameters, the value of the **IotId** parameter takes precedence.
     * @example Q7uOhVRdZRRlDnTLv****00100
     *
     * @var string
     */
    public $iotId;

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
     * @description The property value that you want to specify. The value of this parameter is a JSON string. Format: **Key:Value**. Example: {"Temperature":35}. You can specify up to 10 desired property values.
     *
     *   **Key** specifies the identifier of the property. You can view the property identifier on the **Define Feature**[ tab of the Product Details page in the IoT Platform console. You can also call the ](~~150321~~)QueryThingModel operation and view the property identifier in the returned TSL data.
     *
     * If the temperature property belongs to a custom module named testFb, this parameter is set to **{"testFb:temperature":35}**.
     *
     * >The specified property must allow read/write access. If you specify a read-only property, the setting fails. The property identifier must be unique.
     *
     *   **Value** specifies the desired value of the property. The value must match the data type and value range that are defined for the property.
     *
     * > If you set Value to null, the desired value of the property is cleared.
     * @example {"Temperature":35}
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

    /**
     * @description The version number of the desired property value. The value of this parameter is a JSON string. Format: Key:Value. Example: {"Temperature":2}.
     *
     *   **Key** specifies the identifier of the property. You can view the property identifier on the Define Feature tab of the Product Details page in the IoT Platform console.
     *
     * > The property identifier must be unique.
     *
     *   **Value** specifies the version number of the desired property value.
     *
     * > If the version number that you specify for this parameter is not the current version number, the server rejects the request. If you are not sure about the current version number, you do not need to specify a version number. However, you must enter a valid JSON object {}.
     * @example {"Temperature":2}
     *
     * @var string
     */
    public $versions;
    protected $_name = [
        'deviceName'    => 'DeviceName',
        'iotId'         => 'IotId',
        'iotInstanceId' => 'IotInstanceId',
        'items'         => 'Items',
        'productKey'    => 'ProductKey',
        'versions'      => 'Versions',
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
        if (null !== $this->versions) {
            $res['Versions'] = $this->versions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDeviceDesiredPropertyRequest
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
        if (isset($map['Versions'])) {
            $model->versions = $map['Versions'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class InvokeThingServiceRequest extends Model
{
    /**
     * @description The input parameter of the service. The value is a JSON string. Example: **Args={"param1": 1}**.
     *
     * If this parameter is left empty, set the value to **Args={}**.
     *
     * > If the TSL data is of the float or double type, the parameter values that correspond to the TSL data contain at least one decimal place. Examples: 10.0 and 11.1.
     * @example {"param1":1}
     *
     * @var string
     */
    public $args;

    /**
     * @description The DeviceName of the device to which the required service belongs.
     *
     * > If you configure this parameter, you must specify a value for the **ProductKey** parameter.
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The identifier of the service.
     *
     * You can use one of the following methods to view the **identifier** of the service:
     *
     *   Log on to the [IoT Platform console](https://iot.console.aliyun.com/). On the **Define Feature** tab of the product to which the device belongs, view the identifier.
     *   Call the [QueryThingModel](~~150321~~) operation and view the identifier in the TSL information that is returned.
     *
     * >  If a service named testService belongs to a custom module named testFb, you can set this parameter to ******testFb:testService******. The custom module is not the default module.
     * @example Set
     *
     * @var string
     */
    public $identifier;

    /**
     * @description The ID of the device. The ID is a unique identifier that is issued by IoT Platform to the device.
     *
     * >The IotId parameter specifies a globally unique identifier (GUID) for the device. The value of the **IotId** parameter corresponds to a combination of the values of the **ProductKey** and **DeviceName** parameters. If you specify a value for this parameter, you do not need to configure the **ProductKey** or **DeviceName** parameter. If you specify values for the **IotId**,**ProductKey**, and **DeviceName** parameters, the value of the **IotId** parameter takes precedence.
     * @example Q7uOhVRdZRRlDnTLv****00100
     *
     * @var string
     */
    public $iotId;

    /**
     * @description The ID of the elastic container instance. On the **Overview** page in the IoT Platform console, you can view the ID of the instance.****
     *
     * >*   If your instance has an ID, you must specify the ID for the parameter. Otherwise, the call fails.********
     * >*   If no **Overview** page or **ID** is generated for your instance, you do not need to configure this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The ProductKey of the product to which the device belongs.
     *
     * >If you configure this parameter, you must specify a value for the **DeviceName** parameter.
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;
    protected $_name = [
        'args'          => 'Args',
        'deviceName'    => 'DeviceName',
        'identifier'    => 'Identifier',
        'iotId'         => 'IotId',
        'iotInstanceId' => 'IotInstanceId',
        'productKey'    => 'ProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->args) {
            $res['Args'] = $this->args;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvokeThingServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Args'])) {
            $model->args = $map['Args'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
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

        return $model;
    }
}

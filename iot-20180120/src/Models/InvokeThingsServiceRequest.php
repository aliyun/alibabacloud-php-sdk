<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class InvokeThingsServiceRequest extends Model
{
    /**
     * @description The input parameter of the service. The value is a JSON string. Example: **Args={"param1": 1}**.
     *
     * If this parameter is left empty, set the value to **Args={}**.
     *
     * >If the TSL data is of the float or double type, the parameter values that correspond to the TSL data contain at least one decimal place. Examples: 10.0 and 11.1.
     * @example {"param1":1}
     *
     * @var string
     */
    public $args;

    /**
     * @example device1
     *
     * @var string[]
     */
    public $deviceName;

    /**
     * @description The identifier of the service.
     *
     * You can use one of the following methods to view the **identifier** of the service.
     *
     *   Log on to the IoT Platform console. On the **Define Feature** tab of the product to which the device belongs, you can view the identifier.
     *   Call the [QueryThingModel](~~150321~~) operation and view the identifier in the TSL information that is returned.
     *
     * >  If a service named testService belongs to a custom module named testFb, you can set this parameter to ******testFb:testService******. The custom module is not the default module.
     * @example Set
     *
     * @var string
     */
    public $identifier;

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
        'args'          => 'Args',
        'deviceName'    => 'DeviceName',
        'identifier'    => 'Identifier',
        'iotInstanceId' => 'IotInstanceId',
        'productKey'    => 'ProductKey',
        'qos'           => 'Qos',
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
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
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
     * @return InvokeThingsServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Args'])) {
            $model->args = $map['Args'];
        }
        if (isset($map['DeviceName'])) {
            if (!empty($map['DeviceName'])) {
                $model->deviceName = $map['DeviceName'];
            }
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
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

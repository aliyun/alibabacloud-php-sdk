<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateThingModelRequest extends Model
{
    /**
     * @description The identifier of the custom TSL module. Each identifier is unique in a product.
     *
     * If you do not specify this parameter or the **FunctionBlockName** parameter, the system updates the features of the default module.
     * @example BatteryModule
     *
     * @var string
     */
    public $functionBlockId;

    /**
     * @description The name of the custom module. The name must be 4 to 30 characters in length, and can contain letters, digits, and underscores (\_).
     *
     *   If you do not specify this parameter or the **FunctionBlockId** parameter, the system updates the features of the default module.
     *   If you specify this parameter, the parameter must be used in combination with the **FunctionBlockId** parameter. You can modify the name of the specified custom module. The name corresponds to the value of the **FunctionBlockId** parameter.
     *
     * >  You cannot modify the name of the default module.
     * @var string
     */
    public $functionBlockName;

    /**
     * @description The identifier of the feature.
     *
     * You can call the [GetThingModelTsl](~~150319~~) operation and view the identifier in the **TslStr** response parameter.
     * @example Temperature
     *
     * @var string
     */
    public $identifier;

    /**
     * @description The ID of the instance. You can view the instance **ID** on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must configure this parameter. If you do not set this parameter, the call fails.
     * >*   If your instance has no **Overview** page or ID, you do not need to set this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot-cn-0pp1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The **ProductKey** of the product.
     *
     * You can view the ProductKey on the Product Details page of the IoT Platform console. You can also obtain the ProductKey by calling the [QueryProductList](~~69271~~) operation.
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The updated details of the feature.
     *
     *   If you specify the **Identifier** parameter, you can define only the identifier of the feature.
     *   If you do not specify the **Identifier** parameter, you can define a maximum of 50 input and output parameters for a service or event.
     *
     * For more information about how to specify this parameter, see [Data structure of ThingModelJson](~~150457~~).
     * @var string
     */
    public $thingModelJson;
    protected $_name = [
        'functionBlockId'   => 'FunctionBlockId',
        'functionBlockName' => 'FunctionBlockName',
        'identifier'        => 'Identifier',
        'iotInstanceId'     => 'IotInstanceId',
        'productKey'        => 'ProductKey',
        'thingModelJson'    => 'ThingModelJson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionBlockId) {
            $res['FunctionBlockId'] = $this->functionBlockId;
        }
        if (null !== $this->functionBlockName) {
            $res['FunctionBlockName'] = $this->functionBlockName;
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
        if (null !== $this->thingModelJson) {
            $res['ThingModelJson'] = $this->thingModelJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateThingModelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FunctionBlockId'])) {
            $model->functionBlockId = $map['FunctionBlockId'];
        }
        if (isset($map['FunctionBlockName'])) {
            $model->functionBlockName = $map['FunctionBlockName'];
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
        if (isset($map['ThingModelJson'])) {
            $model->thingModelJson = $map['ThingModelJson'];
        }

        return $model;
    }
}

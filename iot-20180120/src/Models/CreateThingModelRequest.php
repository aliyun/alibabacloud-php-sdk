<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateThingModelRequest extends Model
{
    /**
     * @description The identifier of the custom TSL module. Each identifier is unique in a product. The identifier must be 1 to 30 characters in length, and can contain letters, digits, and underscores (\_).
     *
     * This parameter must be used in combination with the **FunctionBlockName** parameter. If you do not specify this parameter, the system imports the default module.
     * @example BatteryModule
     *
     * @var string
     */
    public $functionBlockId;

    /**
     * @description The name of the custom module. The name must be 4 to 30 characters in length, and can contain letters, digits, and underscores (\_).
     *
     * This parameter must be used in combination with the **FunctionBlockId** parameter. If you do not specify this parameter, the system imports the default module.
     * @var string
     */
    public $functionBlockName;

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
     * @description The details of the new features.
     *
     * "name": "Device information",
     * "productKey": "a1T***",
     * "name": "Dehumidifier humidity",
     * "productKey": "a1T***",
     * ```
     *
     * In the **properties** structure of the **ThingModelJson** parameter, you can use the **extendConfig** parameter to define the extended information of the TSL model. For more information, see [Data structure of ThingModelJson](~~150457~~).
     * @var string
     */
    public $thingModelJson;
    protected $_name = [
        'functionBlockId'   => 'FunctionBlockId',
        'functionBlockName' => 'FunctionBlockName',
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
     * @return CreateThingModelRequest
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

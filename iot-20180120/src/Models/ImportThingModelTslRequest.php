<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ImportThingModelTslRequest extends Model
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
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The ProductKey of the product.
     *
     * You can view the ProductKey on the Product Details page of the IoT Platform console. You can also obtain the ProductKey by calling the [QueryProductList](~~69271~~) operation.
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The ID of the resource group.
     *
     * >  You cannot specify this parameter.
     * @example rg-acfm4l5tcwd****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The TSL model to be edited. The value is a JSON string. The TSL model defines the properties, services, and events of the product.
     *
     * The value of the **TslStr** parameter must conform to the standard TSL data format. For more information, see [TSL data format](~~73727~~).
     *
     * >  To import a TSL model, you must specify the **TslStr** parameter.
     * @example {"schema":"https://iotx-tsl.oss-ap-southeast-1.aliyuncs.com/schema.json","profile":{"productKey":"a14TeW****"},"properties":[]}
     *
     * @var string
     */
    public $tslStr;

    /**
     * @description The URI that is used to store the TSL data in Object Storage Service (OSS).
     *
     * >  This parameter does not take effect. To import a TSL model, you must specify the **TslStr** parameter.
     * @example https://iotx-pop-dsl.oss-cn-shanghai.aliyuncs.com/thing/a14TeWI****\/model.json?Expires=1581947119...
     *
     * @var string
     */
    public $tslUrl;
    protected $_name = [
        'functionBlockId'   => 'FunctionBlockId',
        'functionBlockName' => 'FunctionBlockName',
        'iotInstanceId'     => 'IotInstanceId',
        'productKey'        => 'ProductKey',
        'resourceGroupId'   => 'ResourceGroupId',
        'tslStr'            => 'TslStr',
        'tslUrl'            => 'TslUrl',
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tslStr) {
            $res['TslStr'] = $this->tslStr;
        }
        if (null !== $this->tslUrl) {
            $res['TslUrl'] = $this->tslUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportThingModelTslRequest
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['TslStr'])) {
            $model->tslStr = $map['TslStr'];
        }
        if (isset($map['TslUrl'])) {
            $model->tslUrl = $map['TslUrl'];
        }

        return $model;
    }
}

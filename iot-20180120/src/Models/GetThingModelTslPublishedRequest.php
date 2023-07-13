<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class GetThingModelTslPublishedRequest extends Model
{
    /**
     * @description The identifier of the custom TSL module. Each identifier is unique in a product.
     *
     * If you do not specify this parameter, the default module is queried.
     * @example BatteryModule
     *
     * @var string
     */
    public $functionBlockId;

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
     * @description The version number of the TSL model.
     *
     * If you do not specify this parameter, the last published TSL model version is returned.
     * @example v1.0.0
     *
     * @var string
     */
    public $modelVersion;

    /**
     * @description The **ProductKey** of the product.
     *
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
     * @description Specifies whether to retrieve a simplified TSL model.
     *
     *   true: retrieves a simplified TSL model. A simplified TSL model includes only the **identifier** and **dataType** attributes of properties, services, events, and related input or output parameters. Simplified TSL models can be used by device developers for reference.
     *   false: retrieves the complete TSL model. A complete TSL model includes all the parameters and values of properties, services, and events. Complete TSL models can be used by cloud application developers for reference.
     *
     * Default value: false.
     * @example true
     *
     * @var bool
     */
    public $simple;
    protected $_name = [
        'functionBlockId' => 'FunctionBlockId',
        'iotInstanceId'   => 'IotInstanceId',
        'modelVersion'    => 'ModelVersion',
        'productKey'      => 'ProductKey',
        'resourceGroupId' => 'ResourceGroupId',
        'simple'          => 'Simple',
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
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->modelVersion) {
            $res['ModelVersion'] = $this->modelVersion;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->simple) {
            $res['Simple'] = $this->simple;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetThingModelTslPublishedRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FunctionBlockId'])) {
            $model->functionBlockId = $map['FunctionBlockId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ModelVersion'])) {
            $model->modelVersion = $map['ModelVersion'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Simple'])) {
            $model->simple = $map['Simple'];
        }

        return $model;
    }
}

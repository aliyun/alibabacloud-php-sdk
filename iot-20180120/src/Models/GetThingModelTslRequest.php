<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class GetThingModelTslRequest extends Model
{
    /**
     * @description The error code returned if the call fails. For more information, see [Error codes](~~87387~~).
     *
     * @example BatteryModule
     *
     * @var string
     */
    public $functionBlockId;

    /**
     * @description The ProductKey of the product.
     *
     * You can view the ProductKey on the Product Details page of the IoT Platform console. You can also obtain the ProductKey by calling the [QueryProductList](~~69271~~) operation.
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description Specifies whether to retrieve a simplified TSL model.
     *
     *   **true**: retrieves a simplified TSL model.
     *
     * A simplified TSL model includes only the **identifier** and **dataType** attributes of properties, services, events, and related input or output parameters. Simplified TSL models can be used by device developers for reference.
     *
     *   **false**: retrieves the complete TSL model.
     *
     * Default value: false.
     * @example v1.0.0
     *
     * @var string
     */
    public $modelVersion;

    /**
     * @description The version number of the TSL model to be queried.
     *
     * If you do not specify this parameter, IoT Platform returns the draft TSL model that is unpublished.
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The identifier of the custom TSL module. Each identifier is unique in a product.
     *
     * If you do not specify this parameter, the default module is queried.
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
        if (null !== $this->simple) {
            $res['Simple'] = $this->simple;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetThingModelTslRequest
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
        if (isset($map['Simple'])) {
            $model->simple = $map['Simple'];
        }

        return $model;
    }
}

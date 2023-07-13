<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CopyThingModelRequest extends Model
{
    /**
     * @description The ID of the instance. On the **Overview** page in the IoT Platform console, you can view the ID of the instance.
     *
     * >*   If your instance has an ID, you must specify this parameter. Otherwise, the call fails.
     * >*   If the **Overview** page or instance ID is not displayed in the IoT Platform console, ignore this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The ID of the resource group.
     *
     * >  You do not need to configure this parameter.
     * @example rg-acfm4l5tcwd****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The version of the TSL model that you want to copy.
     *
     * You can call the [ListThingModelVersion](~~150318~~) operation to view the TSL model versions of a product.
     * @example V1.0.0
     *
     * @var string
     */
    public $sourceModelVersion;

    /**
     * @description The ProductKey of the source product.
     *
     * You can view the ProductKey on the Product Details page of the IoT Platform console. You can also obtain the ProductKey by calling the [QueryProductList](~~69271~~) operation.
     * @example a1BwAGV****
     *
     * @var string
     */
    public $sourceProductKey;

    /**
     * @description The ProductKey of the destination product.
     *
     * You can view the ProductKey on the Product Details page of the IoT Platform console. You can also obtain the ProductKey by calling the [QueryProductList](~~69271~~) operation.
     * @example a1BwwG0****
     *
     * @var string
     */
    public $targetProductKey;
    protected $_name = [
        'iotInstanceId'      => 'IotInstanceId',
        'resourceGroupId'    => 'ResourceGroupId',
        'sourceModelVersion' => 'SourceModelVersion',
        'sourceProductKey'   => 'SourceProductKey',
        'targetProductKey'   => 'TargetProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sourceModelVersion) {
            $res['SourceModelVersion'] = $this->sourceModelVersion;
        }
        if (null !== $this->sourceProductKey) {
            $res['SourceProductKey'] = $this->sourceProductKey;
        }
        if (null !== $this->targetProductKey) {
            $res['TargetProductKey'] = $this->targetProductKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyThingModelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SourceModelVersion'])) {
            $model->sourceModelVersion = $map['SourceModelVersion'];
        }
        if (isset($map['SourceProductKey'])) {
            $model->sourceProductKey = $map['SourceProductKey'];
        }
        if (isset($map['TargetProductKey'])) {
            $model->targetProductKey = $map['TargetProductKey'];
        }

        return $model;
    }
}

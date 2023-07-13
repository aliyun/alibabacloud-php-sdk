<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DeleteThingModelRequest extends Model
{
    /**
     * @example OfflineAlert
     *
     * @var string[]
     */
    public $eventIdentifier;

    /**
     * @description The identifier of the custom TSL module. Each identifier is unique in a product.
     *
     *   If you configure the BatteryModule parameter when a value is specified for the **PropertyIdentifier.N**, **ServiceIdentifier.N**, or **EventIdentifier.N** parameter, the operation removes one or more specified features from the specified custom TSL module. If you do not configure the BatteryModule parameter, the operation removes one or more specified features from the default TSL module.
     *   If you configure the BatteryModule parameter when the **PropertyIdentifier.N**, **ServiceIdentifier.N**, and **EventIdentifier.N** parameters are empty, the operation removes all features from the specified custom TSL module.
     *
     * @example BatteryModule
     *
     * @var string
     */
    public $functionBlockId;

    /**
     * @description The ID of the instance. You can view the **ID** of the instance on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must specify the ID for this parameter. Otherwise, the call fails.
     * >*   If no **Overview** page or ID is generated for your instance, you do not need to configure this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot-cn-0pp1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The ProductKey of the product.
     *
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example Temperature
     *
     * @var string[]
     */
    public $propertyIdentifier;

    /**
     * @description The ID of the resource group.
     *
     * >  You cannot configure this parameter.
     * @example rg-acfm4l5tcwd****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example Set
     *
     * @var string[]
     */
    public $serviceIdentifier;
    protected $_name = [
        'eventIdentifier'    => 'EventIdentifier',
        'functionBlockId'    => 'FunctionBlockId',
        'iotInstanceId'      => 'IotInstanceId',
        'productKey'         => 'ProductKey',
        'propertyIdentifier' => 'PropertyIdentifier',
        'resourceGroupId'    => 'ResourceGroupId',
        'serviceIdentifier'  => 'ServiceIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventIdentifier) {
            $res['EventIdentifier'] = $this->eventIdentifier;
        }
        if (null !== $this->functionBlockId) {
            $res['FunctionBlockId'] = $this->functionBlockId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->propertyIdentifier) {
            $res['PropertyIdentifier'] = $this->propertyIdentifier;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serviceIdentifier) {
            $res['ServiceIdentifier'] = $this->serviceIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteThingModelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventIdentifier'])) {
            if (!empty($map['EventIdentifier'])) {
                $model->eventIdentifier = $map['EventIdentifier'];
            }
        }
        if (isset($map['FunctionBlockId'])) {
            $model->functionBlockId = $map['FunctionBlockId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['PropertyIdentifier'])) {
            if (!empty($map['PropertyIdentifier'])) {
                $model->propertyIdentifier = $map['PropertyIdentifier'];
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServiceIdentifier'])) {
            if (!empty($map['ServiceIdentifier'])) {
                $model->serviceIdentifier = $map['ServiceIdentifier'];
            }
        }

        return $model;
    }
}

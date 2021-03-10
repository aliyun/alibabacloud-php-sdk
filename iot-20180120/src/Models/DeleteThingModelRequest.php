<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DeleteThingModelRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string[]
     */
    public $propertyIdentifier;

    /**
     * @var string[]
     */
    public $serviceIdentifier;

    /**
     * @var string[]
     */
    public $eventIdentifier;

    /**
     * @var string
     */
    public $functionBlockId;
    protected $_name = [
        'iotInstanceId'      => 'IotInstanceId',
        'resourceGroupId'    => 'ResourceGroupId',
        'productKey'         => 'ProductKey',
        'propertyIdentifier' => 'PropertyIdentifier',
        'serviceIdentifier'  => 'ServiceIdentifier',
        'eventIdentifier'    => 'EventIdentifier',
        'functionBlockId'    => 'FunctionBlockId',
    ];

    public function validate()
    {
        Model::validateRequired('productKey', $this->productKey, true);
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
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->propertyIdentifier) {
            $res['PropertyIdentifier'] = $this->propertyIdentifier;
        }
        if (null !== $this->serviceIdentifier) {
            $res['ServiceIdentifier'] = $this->serviceIdentifier;
        }
        if (null !== $this->eventIdentifier) {
            $res['EventIdentifier'] = $this->eventIdentifier;
        }
        if (null !== $this->functionBlockId) {
            $res['FunctionBlockId'] = $this->functionBlockId;
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
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['PropertyIdentifier'])) {
            if (!empty($map['PropertyIdentifier'])) {
                $model->propertyIdentifier = $map['PropertyIdentifier'];
            }
        }
        if (isset($map['ServiceIdentifier'])) {
            if (!empty($map['ServiceIdentifier'])) {
                $model->serviceIdentifier = $map['ServiceIdentifier'];
            }
        }
        if (isset($map['EventIdentifier'])) {
            if (!empty($map['EventIdentifier'])) {
                $model->eventIdentifier = $map['EventIdentifier'];
            }
        }
        if (isset($map['FunctionBlockId'])) {
            $model->functionBlockId = $map['FunctionBlockId'];
        }

        return $model;
    }
}

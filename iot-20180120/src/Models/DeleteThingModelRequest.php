<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DeleteThingModelRequest extends Model
{
    /**
     * @var string[]
     */
    public $eventIdentifier;

    /**
     * @var string
     */
    public $functionBlockId;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string[]
     */
    public $propertyIdentifier;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
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

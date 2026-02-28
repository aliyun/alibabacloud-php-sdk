<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

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
        'eventIdentifier' => 'EventIdentifier',
        'functionBlockId' => 'FunctionBlockId',
        'iotInstanceId' => 'IotInstanceId',
        'productKey' => 'ProductKey',
        'propertyIdentifier' => 'PropertyIdentifier',
        'resourceGroupId' => 'ResourceGroupId',
        'serviceIdentifier' => 'ServiceIdentifier',
    ];

    public function validate()
    {
        if (\is_array($this->eventIdentifier)) {
            Model::validateArray($this->eventIdentifier);
        }
        if (\is_array($this->propertyIdentifier)) {
            Model::validateArray($this->propertyIdentifier);
        }
        if (\is_array($this->serviceIdentifier)) {
            Model::validateArray($this->serviceIdentifier);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventIdentifier) {
            if (\is_array($this->eventIdentifier)) {
                $res['EventIdentifier'] = [];
                $n1 = 0;
                foreach ($this->eventIdentifier as $item1) {
                    $res['EventIdentifier'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->propertyIdentifier)) {
                $res['PropertyIdentifier'] = [];
                $n1 = 0;
                foreach ($this->propertyIdentifier as $item1) {
                    $res['PropertyIdentifier'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->serviceIdentifier) {
            if (\is_array($this->serviceIdentifier)) {
                $res['ServiceIdentifier'] = [];
                $n1 = 0;
                foreach ($this->serviceIdentifier as $item1) {
                    $res['ServiceIdentifier'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventIdentifier'])) {
            if (!empty($map['EventIdentifier'])) {
                $model->eventIdentifier = [];
                $n1 = 0;
                foreach ($map['EventIdentifier'] as $item1) {
                    $model->eventIdentifier[$n1] = $item1;
                    ++$n1;
                }
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
                $model->propertyIdentifier = [];
                $n1 = 0;
                foreach ($map['PropertyIdentifier'] as $item1) {
                    $model->propertyIdentifier[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ServiceIdentifier'])) {
            if (!empty($map['ServiceIdentifier'])) {
                $model->serviceIdentifier = [];
                $n1 = 0;
                foreach ($map['ServiceIdentifier'] as $item1) {
                    $model->serviceIdentifier[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

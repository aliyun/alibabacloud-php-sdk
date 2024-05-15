<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\SDK\CCC\V20200701\Models\AddSchemaPropertyRequest\property;
use AlibabaCloud\Tea\Model;

class AddSchemaPropertyRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example b0eb2742-f37e-4c67-82d4-25c651c1xxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var property
     */
    public $property;

    /**
     * @example 03C67DAD-EB26-41D8-949D-9B0C470FB716
     *
     * @var string
     */
    public $requestId;

    /**
     * @description schema id
     *
     * This parameter is required.
     * @example profile
     *
     * @var string
     */
    public $schemaId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'property'   => 'Property',
        'requestId'  => 'RequestId',
        'schemaId'   => 'SchemaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->property) {
            $res['Property'] = null !== $this->property ? $this->property->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->schemaId) {
            $res['SchemaId'] = $this->schemaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddSchemaPropertyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Property'])) {
            $model->property = property::fromMap($map['Property']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SchemaId'])) {
            $model->schemaId = $map['SchemaId'];
        }

        return $model;
    }
}

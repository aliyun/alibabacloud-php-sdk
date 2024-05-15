<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateSchemaPropertyRequest\property;
use AlibabaCloud\Tea\Model;

class UpdateSchemaPropertyRequest extends Model
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
     * @example BC976D32-AC4C-4E0F-8AA9-F4BC6C4E2B3E
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
     * @return UpdateSchemaPropertyRequest
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

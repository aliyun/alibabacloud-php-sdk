<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\UpdateSchemaPropertyRequest\property;

class UpdateSchemaPropertyRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var property
     */
    public $property;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (null !== $this->property) {
            $this->property->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->property) {
            $res['Property'] = null !== $this->property ? $this->property->toArray($noStream) : $this->property;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->schemaId) {
            $res['SchemaId'] = $this->schemaId;
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

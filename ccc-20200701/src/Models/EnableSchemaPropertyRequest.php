<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class EnableSchemaPropertyRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 9cfad875-6260-4a53-ab6e-b13e3fb31f7d
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example name
     *
     * @var string
     */
    public $propertyName;

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
        'instanceId'   => 'InstanceId',
        'propertyName' => 'PropertyName',
        'requestId'    => 'RequestId',
        'schemaId'     => 'SchemaId',
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
        if (null !== $this->propertyName) {
            $res['PropertyName'] = $this->propertyName;
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
     * @return EnableSchemaPropertyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PropertyName'])) {
            $model->propertyName = $map['PropertyName'];
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

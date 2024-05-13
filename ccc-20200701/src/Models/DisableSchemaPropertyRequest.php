<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class DisableSchemaPropertyRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ef1e71e9-ae9d-487c-96ad-9181d85cf802
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
     * @example 2263B273-AC1B-44EB-BA98-87F2322C6780
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
     * @return DisableSchemaPropertyRequest
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

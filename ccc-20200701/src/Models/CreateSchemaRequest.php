<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\SDK\CCC\V20200701\Models\CreateSchemaRequest\properties;
use AlibabaCloud\Tea\Model;

class CreateSchemaRequest extends Model
{
    /**
     * @example -
     *
     * @var string
     */
    public $description;

    /**
     * @description schema id
     *
     * @example profile
     *
     * @var string
     */
    public $id;

    /**
     * @description This parameter is required.
     *
     * @example b0eb2742-f37e-4c67-82d4-25c651c1c450
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var properties[]
     */
    public $properties;

    /**
     * @example 7BEEA660-A45A-45E3-98CC-AFC65E715C23
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'description' => 'Description',
        'id'          => 'Id',
        'instanceId'  => 'InstanceId',
        'properties'  => 'Properties',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->properties) {
            $res['Properties'] = [];
            if (null !== $this->properties && \is_array($this->properties)) {
                $n = 0;
                foreach ($this->properties as $item) {
                    $res['Properties'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSchemaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Properties'])) {
            if (!empty($map['Properties'])) {
                $model->properties = [];
                $n                 = 0;
                foreach ($map['Properties'] as $item) {
                    $model->properties[$n++] = null !== $item ? properties::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

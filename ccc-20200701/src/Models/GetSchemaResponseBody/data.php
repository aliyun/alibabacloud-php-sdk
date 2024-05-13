<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetSchemaResponseBody;

use AlibabaCloud\SDK\CCC\V20200701\Models\DataPropertiesValue;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2021-07-14 10:48:43.0
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $deleted;

    /**
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
     * @example 5e0964fd-951c-4e45-b518-d09d4d2db8ca
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var DataPropertiesValue[]
     */
    public $properties;

    /**
     * @example 2021-07-14 10:48:43.0
     *
     * @var string
     */
    public $updatedTime;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'deleted'     => 'Deleted',
        'description' => 'Description',
        'id'          => 'Id',
        'instanceId'  => 'InstanceId',
        'properties'  => 'Properties',
        'updatedTime' => 'UpdatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }
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
                foreach ($this->properties as $key => $val) {
                    $res['Properties'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }
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
            $model->properties = $map['Properties'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}

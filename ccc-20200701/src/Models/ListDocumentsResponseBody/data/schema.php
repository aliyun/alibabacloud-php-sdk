<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListDocumentsResponseBody\data;

use AlibabaCloud\SDK\CCC\V20200701\Models\DataSchemaPropertiesValue;
use AlibabaCloud\Tea\Model;

class schema extends Model
{
    /**
     * @example 2020-10-14T09:53:53Z
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
     * @example -
     *
     * @var string
     */
    public $description;

    /**
     * @description schame id
     *
     * @example profile
     *
     * @var string
     */
    public $id;

    /**
     * @example 87b12784-8ce2-40b6-b21f-c49cb3b5501e
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var DataSchemaPropertiesValue[]
     */
    public $properties;

    /**
     * @example 2020-10-14T09:53:53Z
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
     * @return schema
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

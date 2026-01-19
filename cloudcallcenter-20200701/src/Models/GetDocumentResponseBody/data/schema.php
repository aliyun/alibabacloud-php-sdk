<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\GetDocumentResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\DataSchemaPropertiesValue;

class schema extends Model
{
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var DataSchemaPropertiesValue[]
     */
    public $properties;

    /**
     * @var string
     */
    public $updatedTime;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'deleted' => 'Deleted',
        'description' => 'Description',
        'id' => 'Id',
        'instanceId' => 'InstanceId',
        'properties' => 'Properties',
        'updatedTime' => 'UpdatedTime',
    ];

    public function validate()
    {
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->properties)) {
                $res['Properties'] = [];
                foreach ($this->properties as $key1 => $value1) {
                    $res['Properties'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
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
            if (!empty($map['Properties'])) {
                $model->properties = [];
                foreach ($map['Properties'] as $key1 => $value1) {
                    $model->properties[$key1] = DataSchemaPropertiesValue::fromMap($value1);
                }
            }
        }

        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}

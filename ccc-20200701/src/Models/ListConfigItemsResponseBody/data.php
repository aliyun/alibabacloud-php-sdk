<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListConfigItemsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'objectId'   => 'ObjectId',
        'value'      => 'Value',
        'objectType' => 'ObjectType',
        'instanceId' => 'InstanceId',
        'name'       => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}

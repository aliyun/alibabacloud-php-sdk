<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class UpdateConfigItemsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $configItems;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'objectId'    => 'ObjectId',
        'objectType'  => 'ObjectType',
        'configItems' => 'ConfigItems',
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
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->configItems) {
            $res['ConfigItems'] = $this->configItems;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateConfigItemsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['ConfigItems'])) {
            $model->configItems = $map['ConfigItems'];
        }

        return $model;
    }
}

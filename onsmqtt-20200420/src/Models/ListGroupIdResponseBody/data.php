<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListGroupIdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The time when the group was created.
     *
     * @example 1564577317000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The queried group that belongs to the ApsaraMQ for MQTT instance.
     *
     * @example GID_test1
     *
     * @var string
     */
    public $groupId;

    /**
     * @description Indicates whether a separate namespace is configured for the ApsaraMQ for MQTT instance. Valid values:
     *
     *   **true**: A separate namespace is configured for the ApsaraMQ for MQTT instance. Resource names must be unique within an ApsaraMQ for MQTT instance but can be the same across ApsaraMQ for MQTT instances.
     *   **false**: No separate namespace is configured for the ApsaraMQ for MQTT instance. Resource names must be globally unique within an ApsaraMQ for MQTT instance and across ApsaraMQ for MQTT instances.
     *
     * @example true
     *
     * @var bool
     */
    public $independentNaming;

    /**
     * @description The ID of the ApsaraMQ for MQTT instance to which the group belongs.
     *
     * @example post-cn-45910tj****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The time when the group was last updated.
     *
     * @example 1564577317000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime'        => 'CreateTime',
        'groupId'           => 'GroupId',
        'independentNaming' => 'IndependentNaming',
        'instanceId'        => 'InstanceId',
        'updateTime'        => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->independentNaming) {
            $res['IndependentNaming'] = $this->independentNaming;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['IndependentNaming'])) {
            $model->independentNaming = $map['IndependentNaming'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}

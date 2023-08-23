<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupListResponseBody\data;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupListResponseBody\data\subscribeInfoDo\tags;
use AlibabaCloud\Tea\Model;

class subscribeInfoDo extends Model
{
    /**
     * @description The point in time when the consumer group was created.
     *
     * @example 1568896605000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the consumer group.
     *
     * @example GID_test_group_id
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The protocol over which the queried consumer group publishes and subscribes to messages. All clients in a consumer group communicate with the ApsaraMQ for RocketMQ broker over the same protocol. You must create different consumer groups for TCP clients and HTTP clients. Valid values:
     *
     *   **tcp**: indicates that the consumer group publishes and subscribes to messages over TCP.
     *   **http**: indicates that the consumer group publishes and subscribes to messages over HTTP.
     *
     * @example tcp
     *
     * @var string
     */
    public $groupType;

    /**
     * @description Indicates whether the instance uses a namespace. Valid values:
     *
     *   **true**: The instance uses a separate namespace. The name of each resource must be unique in the instance. The names of resources in different instances can be the same.
     *   **false**: The instance does not use a separate namespace. The name of each resource must be globally unique within the instance and across all instances.
     *
     * @example true
     *
     * @var bool
     */
    public $independentNaming;

    /**
     * @description The ID of the instance
     *
     * @example MQ_INST_111111111111_DOxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The Alibaba Cloud account ID of the user who created the consumer group.
     *
     * @example 138015630679****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The description of the consumer group.
     *
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The tags that are attached to the consumer group.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The most recent point in time when the consumer group was updated.
     *
     * @example 1570700979000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime'        => 'CreateTime',
        'groupId'           => 'GroupId',
        'groupType'         => 'GroupType',
        'independentNaming' => 'IndependentNaming',
        'instanceId'        => 'InstanceId',
        'owner'             => 'Owner',
        'remark'            => 'Remark',
        'tags'              => 'Tags',
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
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->independentNaming) {
            $res['IndependentNaming'] = $this->independentNaming;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscribeInfoDo
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
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['IndependentNaming'])) {
            $model->independentNaming = $map['IndependentNaming'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}

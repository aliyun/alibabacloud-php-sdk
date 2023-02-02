<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicListResponseBody\data;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicListResponseBody\data\publishInfoDo\tags;
use AlibabaCloud\Tea\Model;

class publishInfoDo extends Model
{
    /**
     * @description The point in time when the topic was created.
     *
     * @example 1570700947000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description Indicates whether the instance that contains the topic uses a namespace. Valid values:
     *
     *   **true**: The instance uses a separate namespace. The name of each resource must be unique in the instance. The names of resources in different instances can be the same.
     *   **false**: The instance does not use a separate namespace. The name of each resource must be globally unique within and across all instances.
     *
     * @example true
     *
     * @var bool
     */
    public $independentNaming;

    /**
     * @description The ID of the instance that contains the topic.
     *
     * @example MQ_INST_188077086902****_BXSuW61e
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the messages. Valid values:
     *
     *   **0**: normal messages
     *   **1**: partitionally ordered messages
     *   **2**: globally ordered messages
     *   **4**: transactional messages
     *   **5**: scheduled or delayed messages
     *
     * @example 0
     *
     * @var int
     */
    public $messageType;

    /**
     * @description The user ID of the topic owner.
     *
     * @example 138015630679****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The code of the relationship between the current account and the topic. Valid values:
     *
     *   **1**: The current account is the owner of the topic.
     *   **2**: The current account can publish messages to the topic.
     *   **4**: The current account can subscribe to the topic.
     *   **6**: The current account can publish messages to and subscribe to the topic.
     *
     * @example 6
     *
     * @var int
     */
    public $relation;

    /**
     * @description The name of the relationship between the current account and the topic. The value of this parameter indicates that the current account is the owner of the topic, the current account can publish messages to the topic, the current account can subscribe to the topic, or the current account can publish messages to and subscribe to the topic.
     *
     * @example Publish and subscribe
     *
     * @var string
     */
    public $relationName;

    /**
     * @description The description of the topic.
     *
     * @example Test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The status of the topic. Valid values:
     *
     *   **0**: The topic is being created.
     *   **1**: The topic is being used.
     *
     * @example 0
     *
     * @var int
     */
    public $serviceStatus;

    /**
     * @description The tags that are attached to the topic.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The name of the topic.
     *
     * @example test
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'createTime'        => 'CreateTime',
        'independentNaming' => 'IndependentNaming',
        'instanceId'        => 'InstanceId',
        'messageType'       => 'MessageType',
        'owner'             => 'Owner',
        'relation'          => 'Relation',
        'relationName'      => 'RelationName',
        'remark'            => 'Remark',
        'serviceStatus'     => 'ServiceStatus',
        'tags'              => 'Tags',
        'topic'             => 'Topic',
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
        if (null !== $this->independentNaming) {
            $res['IndependentNaming'] = $this->independentNaming;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->relation) {
            $res['Relation'] = $this->relation;
        }
        if (null !== $this->relationName) {
            $res['RelationName'] = $this->relationName;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publishInfoDo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['IndependentNaming'])) {
            $model->independentNaming = $map['IndependentNaming'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Relation'])) {
            $model->relation = $map['Relation'];
        }
        if (isset($map['RelationName'])) {
            $model->relationName = $map['RelationName'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}

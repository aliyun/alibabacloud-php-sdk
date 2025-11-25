<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicListResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicListResponseBody\data\publishInfoDo\tags;

class publishInfoDo extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $independentNaming;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $messageType;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $relation;

    /**
     * @var string
     */
    public $relationName;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $serviceStatus;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'createTime' => 'CreateTime',
        'independentNaming' => 'IndependentNaming',
        'instanceId' => 'InstanceId',
        'messageType' => 'MessageType',
        'owner' => 'Owner',
        'relation' => 'Relation',
        'relationName' => 'RelationName',
        'remark' => 'Remark',
        'serviceStatus' => 'ServiceStatus',
        'tags' => 'Tags',
        'topic' => 'Topic',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
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

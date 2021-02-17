<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicListResponseBody\data;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicListResponseBody\data\publishInfoDo\tags;
use AlibabaCloud\Tea\Model;

class publishInfoDo extends Model
{
    /**
     * @var int
     */
    public $messageType;

    /**
     * @var string
     */
    public $relationName;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var bool
     */
    public $independentNaming;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $relation;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'messageType'       => 'MessageType',
        'relationName'      => 'RelationName',
        'owner'             => 'Owner',
        'independentNaming' => 'IndependentNaming',
        'remark'            => 'Remark',
        'relation'          => 'Relation',
        'createTime'        => 'CreateTime',
        'topic'             => 'Topic',
        'tags'              => 'Tags',
        'instanceId'        => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
        }
        if (null !== $this->relationName) {
            $res['RelationName'] = $this->relationName;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->independentNaming) {
            $res['IndependentNaming'] = $this->independentNaming;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->relation) {
            $res['Relation'] = $this->relation;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
        }
        if (isset($map['RelationName'])) {
            $model->relationName = $map['RelationName'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['IndependentNaming'])) {
            $model->independentNaming = $map['IndependentNaming'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Relation'])) {
            $model->relation = $map['Relation'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}

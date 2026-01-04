<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Datahub\V20240620\Models;

use AlibabaCloud\Dara\Model;

class GetTopicResponseBody extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var bool
     */
    public $enableSchemaRegistry;

    /**
     * @var bool
     */
    public $expandMode;

    /**
     * @var int
     */
    public $lifecycle;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $recordSchema;

    /**
     * @var string
     */
    public $recordType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $shardCount;

    /**
     * @var int
     */
    public $storage;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $topicName;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'comment' => 'Comment',
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'enableSchemaRegistry' => 'EnableSchemaRegistry',
        'expandMode' => 'ExpandMode',
        'lifecycle' => 'Lifecycle',
        'projectName' => 'ProjectName',
        'recordSchema' => 'RecordSchema',
        'recordType' => 'RecordType',
        'requestId' => 'RequestId',
        'shardCount' => 'ShardCount',
        'storage' => 'Storage',
        'success' => 'Success',
        'topicName' => 'TopicName',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->enableSchemaRegistry) {
            $res['EnableSchemaRegistry'] = $this->enableSchemaRegistry;
        }

        if (null !== $this->expandMode) {
            $res['ExpandMode'] = $this->expandMode;
        }

        if (null !== $this->lifecycle) {
            $res['Lifecycle'] = $this->lifecycle;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->recordSchema) {
            $res['RecordSchema'] = $this->recordSchema;
        }

        if (null !== $this->recordType) {
            $res['RecordType'] = $this->recordType;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->shardCount) {
            $res['ShardCount'] = $this->shardCount;
        }

        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['EnableSchemaRegistry'])) {
            $model->enableSchemaRegistry = $map['EnableSchemaRegistry'];
        }

        if (isset($map['ExpandMode'])) {
            $model->expandMode = $map['ExpandMode'];
        }

        if (isset($map['Lifecycle'])) {
            $model->lifecycle = $map['Lifecycle'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['RecordSchema'])) {
            $model->recordSchema = $map['RecordSchema'];
        }

        if (isset($map['RecordType'])) {
            $model->recordType = $map['RecordType'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ShardCount'])) {
            $model->shardCount = $map['ShardCount'];
        }

        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}

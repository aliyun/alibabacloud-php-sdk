<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Datahub\V20240620\Models;

use AlibabaCloud\Dara\Model;

class CreateTopicRequest extends Model
{
    /**
     * @var string
     */
    public $comment;

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
     * @var int
     */
    public $shardCount;

    /**
     * @var string
     */
    public $topicName;
    protected $_name = [
        'comment' => 'Comment',
        'enableSchemaRegistry' => 'EnableSchemaRegistry',
        'expandMode' => 'ExpandMode',
        'lifecycle' => 'Lifecycle',
        'projectName' => 'ProjectName',
        'recordSchema' => 'RecordSchema',
        'recordType' => 'RecordType',
        'shardCount' => 'ShardCount',
        'topicName' => 'TopicName',
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

        if (null !== $this->shardCount) {
            $res['ShardCount'] = $this->shardCount;
        }

        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
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

        if (isset($map['ShardCount'])) {
            $model->shardCount = $map['ShardCount'];
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}

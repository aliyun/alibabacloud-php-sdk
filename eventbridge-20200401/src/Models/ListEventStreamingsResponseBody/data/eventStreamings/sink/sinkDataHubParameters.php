<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkDataHubParameters\body;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkDataHubParameters\project;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkDataHubParameters\roleName;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkDataHubParameters\topic;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkDataHubParameters\topicSchema;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkDataHubParameters\topicType;

class sinkDataHubParameters extends Model
{
    /**
     * @var body
     */
    public $body;
    /**
     * @var project
     */
    public $project;
    /**
     * @var roleName
     */
    public $roleName;
    /**
     * @var topic
     */
    public $topic;
    /**
     * @var topicSchema
     */
    public $topicSchema;
    /**
     * @var topicType
     */
    public $topicType;
    protected $_name = [
        'body'        => 'Body',
        'project'     => 'Project',
        'roleName'    => 'RoleName',
        'topic'       => 'Topic',
        'topicSchema' => 'TopicSchema',
        'topicType'   => 'TopicType',
    ];

    public function validate()
    {
        if (null !== $this->body) {
            $this->body->validate();
        }
        if (null !== $this->project) {
            $this->project->validate();
        }
        if (null !== $this->roleName) {
            $this->roleName->validate();
        }
        if (null !== $this->topic) {
            $this->topic->validate();
        }
        if (null !== $this->topicSchema) {
            $this->topicSchema->validate();
        }
        if (null !== $this->topicType) {
            $this->topicType->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = null !== $this->body ? $this->body->toArray($noStream) : $this->body;
        }

        if (null !== $this->project) {
            $res['Project'] = null !== $this->project ? $this->project->toArray($noStream) : $this->project;
        }

        if (null !== $this->roleName) {
            $res['RoleName'] = null !== $this->roleName ? $this->roleName->toArray($noStream) : $this->roleName;
        }

        if (null !== $this->topic) {
            $res['Topic'] = null !== $this->topic ? $this->topic->toArray($noStream) : $this->topic;
        }

        if (null !== $this->topicSchema) {
            $res['TopicSchema'] = null !== $this->topicSchema ? $this->topicSchema->toArray($noStream) : $this->topicSchema;
        }

        if (null !== $this->topicType) {
            $res['TopicType'] = null !== $this->topicType ? $this->topicType->toArray($noStream) : $this->topicType;
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
        if (isset($map['Body'])) {
            $model->body = body::fromMap($map['Body']);
        }

        if (isset($map['Project'])) {
            $model->project = project::fromMap($map['Project']);
        }

        if (isset($map['RoleName'])) {
            $model->roleName = roleName::fromMap($map['RoleName']);
        }

        if (isset($map['Topic'])) {
            $model->topic = topic::fromMap($map['Topic']);
        }

        if (isset($map['TopicSchema'])) {
            $model->topicSchema = topicSchema::fromMap($map['TopicSchema']);
        }

        if (isset($map['TopicType'])) {
            $model->topicType = topicType::fromMap($map['TopicType']);
        }

        return $model;
    }
}

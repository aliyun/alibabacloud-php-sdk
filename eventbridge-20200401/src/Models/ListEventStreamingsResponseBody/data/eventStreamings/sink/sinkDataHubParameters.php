<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkDataHubParameters\body;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkDataHubParameters\project;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkDataHubParameters\roleName;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkDataHubParameters\topic;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkDataHubParameters\topicSchema;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkDataHubParameters\topicType;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->project) {
            $res['Project'] = null !== $this->project ? $this->project->toMap() : null;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = null !== $this->roleName ? $this->roleName->toMap() : null;
        }
        if (null !== $this->topic) {
            $res['Topic'] = null !== $this->topic ? $this->topic->toMap() : null;
        }
        if (null !== $this->topicSchema) {
            $res['TopicSchema'] = null !== $this->topicSchema ? $this->topicSchema->toMap() : null;
        }
        if (null !== $this->topicType) {
            $res['TopicType'] = null !== $this->topicType ? $this->topicType->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sinkDataHubParameters
     */
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

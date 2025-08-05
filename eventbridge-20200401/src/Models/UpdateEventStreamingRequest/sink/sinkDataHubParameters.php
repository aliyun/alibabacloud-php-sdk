<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkDataHubParameters\body;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkDataHubParameters\contentSchema;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkDataHubParameters\contentType;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkDataHubParameters\project;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkDataHubParameters\roleName;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkDataHubParameters\topic;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkDataHubParameters\topicSchema;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkDataHubParameters\topicType;
use AlibabaCloud\Tea\Model;

class sinkDataHubParameters extends Model
{
    /**
     * @description The data is of the BLOB type, and a template is defined for the record.
     *
     * @var body
     */
    public $body;

    /**
     * @description The key-value pair of custom logs. This parameter takes effect only if you set ContentType to KeyValue. Each key-value pair is in the Key_n, Value_n format.
     *
     * @var contentSchema
     */
    public $contentSchema;

    /**
     * @description The data format. Valid values:
     *
     *   JSON
     *   KeyValue
     *
     * @var contentType
     */
    public $contentType;

    /**
     * @description The name of the DataHub project.
     *
     * @var project
     */
    public $project;

    /**
     * @description The role name.
     *
     * @var roleName
     */
    public $roleName;

    /**
     * @description The name of the DataHub topic.
     *
     * @var topic
     */
    public $topic;

    /**
     * @description The data is of the TUBLE type, and a schema is defined for the DataHub topic.
     *
     * @var topicSchema
     */
    public $topicSchema;

    /**
     * @description The data type of the DataHub topic. Valid values:
     *
     *   TUPLE
     *   BLOB
     *
     * @var topicType
     */
    public $topicType;
    protected $_name = [
        'body' => 'Body',
        'contentSchema' => 'ContentSchema',
        'contentType' => 'ContentType',
        'project' => 'Project',
        'roleName' => 'RoleName',
        'topic' => 'Topic',
        'topicSchema' => 'TopicSchema',
        'topicType' => 'TopicType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->contentSchema) {
            $res['ContentSchema'] = null !== $this->contentSchema ? $this->contentSchema->toMap() : null;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = null !== $this->contentType ? $this->contentType->toMap() : null;
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
        if (isset($map['ContentSchema'])) {
            $model->contentSchema = contentSchema::fromMap($map['ContentSchema']);
        }
        if (isset($map['ContentType'])) {
            $model->contentType = contentType::fromMap($map['ContentType']);
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

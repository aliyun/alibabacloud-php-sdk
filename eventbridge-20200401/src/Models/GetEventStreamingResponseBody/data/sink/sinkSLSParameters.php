<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkSLSParameters\body;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkSLSParameters\contentSchema;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkSLSParameters\contentType;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkSLSParameters\logStore;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkSLSParameters\project;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkSLSParameters\roleName;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkSLSParameters\topic;

class sinkSLSParameters extends Model
{
    /**
     * @var body
     */
    public $body;

    /**
     * @var contentSchema
     */
    public $contentSchema;

    /**
     * @var contentType
     */
    public $contentType;

    /**
     * @var logStore
     */
    public $logStore;

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
    protected $_name = [
        'body' => 'Body',
        'contentSchema' => 'ContentSchema',
        'contentType' => 'ContentType',
        'logStore' => 'LogStore',
        'project' => 'Project',
        'roleName' => 'RoleName',
        'topic' => 'Topic',
    ];

    public function validate()
    {
        if (null !== $this->body) {
            $this->body->validate();
        }
        if (null !== $this->contentSchema) {
            $this->contentSchema->validate();
        }
        if (null !== $this->contentType) {
            $this->contentType->validate();
        }
        if (null !== $this->logStore) {
            $this->logStore->validate();
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = null !== $this->body ? $this->body->toArray($noStream) : $this->body;
        }

        if (null !== $this->contentSchema) {
            $res['ContentSchema'] = null !== $this->contentSchema ? $this->contentSchema->toArray($noStream) : $this->contentSchema;
        }

        if (null !== $this->contentType) {
            $res['ContentType'] = null !== $this->contentType ? $this->contentType->toArray($noStream) : $this->contentType;
        }

        if (null !== $this->logStore) {
            $res['LogStore'] = null !== $this->logStore ? $this->logStore->toArray($noStream) : $this->logStore;
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

        if (isset($map['ContentSchema'])) {
            $model->contentSchema = contentSchema::fromMap($map['ContentSchema']);
        }

        if (isset($map['ContentType'])) {
            $model->contentType = contentType::fromMap($map['ContentType']);
        }

        if (isset($map['LogStore'])) {
            $model->logStore = logStore::fromMap($map['LogStore']);
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

        return $model;
    }
}

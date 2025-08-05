<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkSLSParameters\body;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkSLSParameters\contentSchema;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkSLSParameters\contentType;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkSLSParameters\logStore;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkSLSParameters\project;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkSLSParameters\roleName;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkSLSParameters\topic;
use AlibabaCloud\Tea\Model;

class sinkSLSParameters extends Model
{
    /**
     * @description The message body that is sent to Simple Log Service.
     *
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
     * @description The Simple Log Service Logstore.
     *
     * @var logStore
     */
    public $logStore;

    /**
     * @description The Simple Log Service project.
     *
     * @var project
     */
    public $project;

    /**
     * @description The role name. If you want to authorize EventBridge to use this role to read logs in Log Service, you must select Alibaba Cloud Service for Selected Trusted Entity and EventBridge for Select Trusted Service when you create the role in the RAM console.
     *
     * @var roleName
     */
    public $roleName;

    /**
     * @description The name of the topic in which logs are stored. The topic corresponds to the topic reserved field in Simple Log Service.
     *
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
        if (null !== $this->logStore) {
            $res['LogStore'] = null !== $this->logStore ? $this->logStore->toMap() : null;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sinkSLSParameters
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

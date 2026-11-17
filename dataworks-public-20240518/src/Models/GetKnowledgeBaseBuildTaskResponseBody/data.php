<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgeBaseBuildTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgeBaseBuildTaskResponseBody\data\input;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgeBaseBuildTaskResponseBody\data\runtimeResource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgeBaseBuildTaskResponseBody\data\trigger;

class data extends Model
{
    /**
     * @var string
     */
    public $contentLocale;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var input
     */
    public $input;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var string
     */
    public $llmModel;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var runtimeResource
     */
    public $runtimeResource;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var trigger
     */
    public $trigger;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'contentLocale' => 'ContentLocale',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'input' => 'Input',
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'llmModel' => 'LlmModel',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'projectId' => 'ProjectId',
        'runtimeResource' => 'RuntimeResource',
        'taskId' => 'TaskId',
        'trigger' => 'Trigger',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->input) {
            $this->input->validate();
        }
        if (null !== $this->runtimeResource) {
            $this->runtimeResource->validate();
        }
        if (null !== $this->trigger) {
            $this->trigger->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentLocale) {
            $res['ContentLocale'] = $this->contentLocale;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toArray($noStream) : $this->input;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->llmModel) {
            $res['LlmModel'] = $this->llmModel;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->runtimeResource) {
            $res['RuntimeResource'] = null !== $this->runtimeResource ? $this->runtimeResource->toArray($noStream) : $this->runtimeResource;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->trigger) {
            $res['Trigger'] = null !== $this->trigger ? $this->trigger->toArray($noStream) : $this->trigger;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ContentLocale'])) {
            $model->contentLocale = $map['ContentLocale'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }

        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['LlmModel'])) {
            $model->llmModel = $map['LlmModel'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RuntimeResource'])) {
            $model->runtimeResource = runtimeResource::fromMap($map['RuntimeResource']);
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['Trigger'])) {
            $model->trigger = trigger::fromMap($map['Trigger']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

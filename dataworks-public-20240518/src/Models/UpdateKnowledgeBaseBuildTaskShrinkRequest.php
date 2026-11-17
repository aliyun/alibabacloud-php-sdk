<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class UpdateKnowledgeBaseBuildTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $contentLocale;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $inputShrink;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var string
     */
    public $llmModel;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $runtimeResourceShrink;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $triggerShrink;
    protected $_name = [
        'contentLocale' => 'ContentLocale',
        'description' => 'Description',
        'inputShrink' => 'Input',
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'llmModel' => 'LlmModel',
        'name' => 'Name',
        'projectId' => 'ProjectId',
        'runtimeResourceShrink' => 'RuntimeResource',
        'taskId' => 'TaskId',
        'triggerShrink' => 'Trigger',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentLocale) {
            $res['ContentLocale'] = $this->contentLocale;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->inputShrink) {
            $res['Input'] = $this->inputShrink;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->llmModel) {
            $res['LlmModel'] = $this->llmModel;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->runtimeResourceShrink) {
            $res['RuntimeResource'] = $this->runtimeResourceShrink;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->triggerShrink) {
            $res['Trigger'] = $this->triggerShrink;
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

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Input'])) {
            $model->inputShrink = $map['Input'];
        }

        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['LlmModel'])) {
            $model->llmModel = $map['LlmModel'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RuntimeResource'])) {
            $model->runtimeResourceShrink = $map['RuntimeResource'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['Trigger'])) {
            $model->triggerShrink = $map['Trigger'];
        }

        return $model;
    }
}

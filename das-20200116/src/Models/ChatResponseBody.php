<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;

class ChatResponseBody extends Model
{
    /**
     * @var string
     */
    public $activityType;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $delta;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parentMessageId;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var string
     */
    public $stepName;

    /**
     * @var string
     */
    public $taskTrackerId;

    /**
     * @var string
     */
    public $threadId;

    /**
     * @var string
     */
    public $toolCallId;

    /**
     * @var string
     */
    public $toolCallName;

    /**
     * @var string
     */
    public $type;

    /**
     * @var mixed
     */
    public $value;
    protected $_name = [
        'activityType' => 'ActivityType',
        'content' => 'Content',
        'delta' => 'Delta',
        'messageId' => 'MessageId',
        'name' => 'Name',
        'parentMessageId' => 'ParentMessageId',
        'role' => 'Role',
        'runId' => 'RunId',
        'stepName' => 'StepName',
        'taskTrackerId' => 'TaskTrackerId',
        'threadId' => 'ThreadId',
        'toolCallId' => 'ToolCallId',
        'toolCallName' => 'ToolCallName',
        'type' => 'Type',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityType) {
            $res['ActivityType'] = $this->activityType;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->delta) {
            $res['Delta'] = $this->delta;
        }

        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->parentMessageId) {
            $res['ParentMessageId'] = $this->parentMessageId;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->runId) {
            $res['RunId'] = $this->runId;
        }

        if (null !== $this->stepName) {
            $res['StepName'] = $this->stepName;
        }

        if (null !== $this->taskTrackerId) {
            $res['TaskTrackerId'] = $this->taskTrackerId;
        }

        if (null !== $this->threadId) {
            $res['ThreadId'] = $this->threadId;
        }

        if (null !== $this->toolCallId) {
            $res['ToolCallId'] = $this->toolCallId;
        }

        if (null !== $this->toolCallName) {
            $res['ToolCallName'] = $this->toolCallName;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['ActivityType'])) {
            $model->activityType = $map['ActivityType'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Delta'])) {
            $model->delta = $map['Delta'];
        }

        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ParentMessageId'])) {
            $model->parentMessageId = $map['ParentMessageId'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['RunId'])) {
            $model->runId = $map['RunId'];
        }

        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }

        if (isset($map['TaskTrackerId'])) {
            $model->taskTrackerId = $map['TaskTrackerId'];
        }

        if (isset($map['ThreadId'])) {
            $model->threadId = $map['ThreadId'];
        }

        if (isset($map['ToolCallId'])) {
            $model->toolCallId = $map['ToolCallId'];
        }

        if (isset($map['ToolCallName'])) {
            $model->toolCallName = $map['ToolCallName'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}

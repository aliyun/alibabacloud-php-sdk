<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class SendAsyncChatMessageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $digitalEmployeeNameShrink;

    /**
     * @var bool
     */
    public $directChat;

    /**
     * @var string
     */
    public $filesShrink;

    /**
     * @var string
     */
    public $model;

    /**
     * @var bool
     */
    public $reuseLastSession;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var bool
     */
    public $stream;

    /**
     * @var string
     */
    public $taskExecutionShrink;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'content' => 'content',
        'contentType' => 'contentType',
        'digitalEmployeeNameShrink' => 'digitalEmployeeName',
        'directChat' => 'directChat',
        'filesShrink' => 'files',
        'model' => 'model',
        'reuseLastSession' => 'reuseLastSession',
        'sessionId' => 'sessionId',
        'stream' => 'stream',
        'taskExecutionShrink' => 'taskExecution',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }

        if (null !== $this->digitalEmployeeNameShrink) {
            $res['digitalEmployeeName'] = $this->digitalEmployeeNameShrink;
        }

        if (null !== $this->directChat) {
            $res['directChat'] = $this->directChat;
        }

        if (null !== $this->filesShrink) {
            $res['files'] = $this->filesShrink;
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->reuseLastSession) {
            $res['reuseLastSession'] = $this->reuseLastSession;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
        }

        if (null !== $this->taskExecutionShrink) {
            $res['taskExecution'] = $this->taskExecutionShrink;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }

        if (isset($map['digitalEmployeeName'])) {
            $model->digitalEmployeeNameShrink = $map['digitalEmployeeName'];
        }

        if (isset($map['directChat'])) {
            $model->directChat = $map['directChat'];
        }

        if (isset($map['files'])) {
            $model->filesShrink = $map['files'];
        }

        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['reuseLastSession'])) {
            $model->reuseLastSession = $map['reuseLastSession'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }

        if (isset($map['taskExecution'])) {
            $model->taskExecutionShrink = $map['taskExecution'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}

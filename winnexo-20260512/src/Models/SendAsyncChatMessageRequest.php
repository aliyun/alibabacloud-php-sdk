<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\SendAsyncChatMessageRequest\files;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\SendAsyncChatMessageRequest\taskExecution;

class SendAsyncChatMessageRequest extends Model
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
     * @var string[]
     */
    public $digitalEmployeeName;

    /**
     * @var bool
     */
    public $directChat;

    /**
     * @var files[]
     */
    public $files;

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
     * @var taskExecution
     */
    public $taskExecution;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'content' => 'content',
        'contentType' => 'contentType',
        'digitalEmployeeName' => 'digitalEmployeeName',
        'directChat' => 'directChat',
        'files' => 'files',
        'model' => 'model',
        'reuseLastSession' => 'reuseLastSession',
        'sessionId' => 'sessionId',
        'stream' => 'stream',
        'taskExecution' => 'taskExecution',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        if (\is_array($this->digitalEmployeeName)) {
            Model::validateArray($this->digitalEmployeeName);
        }
        if (\is_array($this->files)) {
            Model::validateArray($this->files);
        }
        if (null !== $this->taskExecution) {
            $this->taskExecution->validate();
        }
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

        if (null !== $this->digitalEmployeeName) {
            if (\is_array($this->digitalEmployeeName)) {
                $res['digitalEmployeeName'] = [];
                $n1 = 0;
                foreach ($this->digitalEmployeeName as $item1) {
                    $res['digitalEmployeeName'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->directChat) {
            $res['directChat'] = $this->directChat;
        }

        if (null !== $this->files) {
            if (\is_array($this->files)) {
                $res['files'] = [];
                $n1 = 0;
                foreach ($this->files as $item1) {
                    $res['files'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->taskExecution) {
            $res['taskExecution'] = null !== $this->taskExecution ? $this->taskExecution->toArray($noStream) : $this->taskExecution;
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
            if (!empty($map['digitalEmployeeName'])) {
                $model->digitalEmployeeName = [];
                $n1 = 0;
                foreach ($map['digitalEmployeeName'] as $item1) {
                    $model->digitalEmployeeName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['directChat'])) {
            $model->directChat = $map['directChat'];
        }

        if (isset($map['files'])) {
            if (!empty($map['files'])) {
                $model->files = [];
                $n1 = 0;
                foreach ($map['files'] as $item1) {
                    $model->files[$n1] = files::fromMap($item1);
                    ++$n1;
                }
            }
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
            $model->taskExecution = taskExecution::fromMap($map['taskExecution']);
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}

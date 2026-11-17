<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\SendChatMessageRequest\contextItems;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\SendChatMessageRequest\files;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\SendChatMessageRequest\segments;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\SendChatMessageRequest\taskExecution;

class SendChatMessageRequest extends Model
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
     * @var contextItems[]
     */
    public $contextItems;

    /**
     * @var string[]
     */
    public $digitalEmployeeName;

    /**
     * @var bool
     */
    public $directChat;

    /**
     * @var mixed
     */
    public $directMaxHistoryRounds;

    /**
     * @var bool
     */
    public $enableWebSearch;

    /**
     * @var files[]
     */
    public $files;

    /**
     * @var string
     */
    public $locale;

    /**
     * @var string
     */
    public $model;

    /**
     * @var bool
     */
    public $reuseLastSession;

    /**
     * @var segments[]
     */
    public $segments;

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

    /**
     * @var string
     */
    public $workMode;
    protected $_name = [
        'content' => 'content',
        'contentType' => 'contentType',
        'contextItems' => 'contextItems',
        'digitalEmployeeName' => 'digitalEmployeeName',
        'directChat' => 'directChat',
        'directMaxHistoryRounds' => 'directMaxHistoryRounds',
        'enableWebSearch' => 'enableWebSearch',
        'files' => 'files',
        'locale' => 'locale',
        'model' => 'model',
        'reuseLastSession' => 'reuseLastSession',
        'segments' => 'segments',
        'sessionId' => 'sessionId',
        'stream' => 'stream',
        'taskExecution' => 'taskExecution',
        'tenantId' => 'tenantId',
        'workMode' => 'workMode',
    ];

    public function validate()
    {
        if (\is_array($this->contextItems)) {
            Model::validateArray($this->contextItems);
        }
        if (\is_array($this->digitalEmployeeName)) {
            Model::validateArray($this->digitalEmployeeName);
        }
        if (\is_array($this->files)) {
            Model::validateArray($this->files);
        }
        if (\is_array($this->segments)) {
            Model::validateArray($this->segments);
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

        if (null !== $this->contextItems) {
            if (\is_array($this->contextItems)) {
                $res['contextItems'] = [];
                $n1 = 0;
                foreach ($this->contextItems as $item1) {
                    $res['contextItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->directMaxHistoryRounds) {
            $res['directMaxHistoryRounds'] = $this->directMaxHistoryRounds;
        }

        if (null !== $this->enableWebSearch) {
            $res['enableWebSearch'] = $this->enableWebSearch;
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

        if (null !== $this->locale) {
            $res['locale'] = $this->locale;
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->reuseLastSession) {
            $res['reuseLastSession'] = $this->reuseLastSession;
        }

        if (null !== $this->segments) {
            if (\is_array($this->segments)) {
                $res['segments'] = [];
                $n1 = 0;
                foreach ($this->segments as $item1) {
                    $res['segments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->workMode) {
            $res['workMode'] = $this->workMode;
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

        if (isset($map['contextItems'])) {
            if (!empty($map['contextItems'])) {
                $model->contextItems = [];
                $n1 = 0;
                foreach ($map['contextItems'] as $item1) {
                    $model->contextItems[$n1] = contextItems::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['directMaxHistoryRounds'])) {
            $model->directMaxHistoryRounds = $map['directMaxHistoryRounds'];
        }

        if (isset($map['enableWebSearch'])) {
            $model->enableWebSearch = $map['enableWebSearch'];
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

        if (isset($map['locale'])) {
            $model->locale = $map['locale'];
        }

        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['reuseLastSession'])) {
            $model->reuseLastSession = $map['reuseLastSession'];
        }

        if (isset($map['segments'])) {
            if (!empty($map['segments'])) {
                $model->segments = [];
                $n1 = 0;
                foreach ($map['segments'] as $item1) {
                    $model->segments[$n1] = segments::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['workMode'])) {
            $model->workMode = $map['workMode'];
        }

        return $model;
    }
}

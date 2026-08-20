<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetScheduledTaskExecutionDetailResponseBody\files;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetScheduledTaskExecutionDetailResponseBody\metadata;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetScheduledTaskExecutionDetailResponseBody\triggerInfo;

class GetScheduledTaskExecutionDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $completedAt;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string[]
     */
    public $digitalEmployeeName;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $executionId;

    /**
     * @var files[]
     */
    public $files;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $message;

    /**
     * @var metadata
     */
    public $metadata;

    /**
     * @var string
     */
    public $outputContent;

    /**
     * @var string
     */
    public $pushResult;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $skillCodes;

    /**
     * @var string
     */
    public $startedAt;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var triggerInfo
     */
    public $triggerInfo;

    /**
     * @var string
     */
    public $triggerType;

    /**
     * @var string
     */
    public $visibility;
    protected $_name = [
        'code' => 'code',
        'completedAt' => 'completedAt',
        'content' => 'content',
        'creator' => 'creator',
        'digitalEmployeeName' => 'digitalEmployeeName',
        'errorMessage' => 'errorMessage',
        'executionId' => 'executionId',
        'files' => 'files',
        'gmtCreate' => 'gmtCreate',
        'message' => 'message',
        'metadata' => 'metadata',
        'outputContent' => 'outputContent',
        'pushResult' => 'pushResult',
        'requestId' => 'requestId',
        'skillCodes' => 'skillCodes',
        'startedAt' => 'startedAt',
        'status' => 'status',
        'taskId' => 'taskId',
        'title' => 'title',
        'triggerInfo' => 'triggerInfo',
        'triggerType' => 'triggerType',
        'visibility' => 'visibility',
    ];

    public function validate()
    {
        if (\is_array($this->digitalEmployeeName)) {
            Model::validateArray($this->digitalEmployeeName);
        }
        if (\is_array($this->files)) {
            Model::validateArray($this->files);
        }
        if (null !== $this->metadata) {
            $this->metadata->validate();
        }
        if (\is_array($this->skillCodes)) {
            Model::validateArray($this->skillCodes);
        }
        if (null !== $this->triggerInfo) {
            $this->triggerInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->completedAt) {
            $res['completedAt'] = $this->completedAt;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
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

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->executionId) {
            $res['executionId'] = $this->executionId;
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

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->metadata) {
            $res['metadata'] = null !== $this->metadata ? $this->metadata->toArray($noStream) : $this->metadata;
        }

        if (null !== $this->outputContent) {
            $res['outputContent'] = $this->outputContent;
        }

        if (null !== $this->pushResult) {
            $res['pushResult'] = $this->pushResult;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->skillCodes) {
            if (\is_array($this->skillCodes)) {
                $res['skillCodes'] = [];
                $n1 = 0;
                foreach ($this->skillCodes as $item1) {
                    $res['skillCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startedAt) {
            $res['startedAt'] = $this->startedAt;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->triggerInfo) {
            $res['triggerInfo'] = null !== $this->triggerInfo ? $this->triggerInfo->toArray($noStream) : $this->triggerInfo;
        }

        if (null !== $this->triggerType) {
            $res['triggerType'] = $this->triggerType;
        }

        if (null !== $this->visibility) {
            $res['visibility'] = $this->visibility;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['completedAt'])) {
            $model->completedAt = $map['completedAt'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
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

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['executionId'])) {
            $model->executionId = $map['executionId'];
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

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['metadata'])) {
            $model->metadata = metadata::fromMap($map['metadata']);
        }

        if (isset($map['outputContent'])) {
            $model->outputContent = $map['outputContent'];
        }

        if (isset($map['pushResult'])) {
            $model->pushResult = $map['pushResult'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['skillCodes'])) {
            if (!empty($map['skillCodes'])) {
                $model->skillCodes = [];
                $n1 = 0;
                foreach ($map['skillCodes'] as $item1) {
                    $model->skillCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['startedAt'])) {
            $model->startedAt = $map['startedAt'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['triggerInfo'])) {
            $model->triggerInfo = triggerInfo::fromMap($map['triggerInfo']);
        }

        if (isset($map['triggerType'])) {
            $model->triggerType = $map['triggerType'];
        }

        if (isset($map['visibility'])) {
            $model->visibility = $map['visibility'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetTodoDetailResponseBody\assignees;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetTodoDetailResponseBody\questions;

class GetTodoDetailResponseBody extends Model
{
    /**
     * @var int
     */
    public $assigneeCount;

    /**
     * @var assignees[]
     */
    public $assignees;

    /**
     * @var mixed[]
     */
    public $attachmentPolicy;

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
    public $completedByUserId;

    /**
     * @var string
     */
    public $completedByUserName;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var bool
     */
    public $isRead;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $myAssigneeStatus;

    /**
     * @var string
     */
    public $myDisplayState;

    /**
     * @var mixed[]
     */
    public $myPermissions;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var questions[]
     */
    public $questions;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $resultPayload;

    /**
     * @var mixed[]
     */
    public $sourceContext;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $sourceWorkflowId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $todoId;
    protected $_name = [
        'assigneeCount' => 'assigneeCount',
        'assignees' => 'assignees',
        'attachmentPolicy' => 'attachmentPolicy',
        'code' => 'code',
        'completedAt' => 'completedAt',
        'completedByUserId' => 'completedByUserId',
        'completedByUserName' => 'completedByUserName',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'isRead' => 'isRead',
        'message' => 'message',
        'messageId' => 'messageId',
        'myAssigneeStatus' => 'myAssigneeStatus',
        'myDisplayState' => 'myDisplayState',
        'myPermissions' => 'myPermissions',
        'priority' => 'priority',
        'questions' => 'questions',
        'requestId' => 'requestId',
        'resultPayload' => 'resultPayload',
        'sourceContext' => 'sourceContext',
        'sourceType' => 'sourceType',
        'sourceWorkflowId' => 'sourceWorkflowId',
        'status' => 'status',
        'summary' => 'summary',
        'title' => 'title',
        'todoId' => 'todoId',
    ];

    public function validate()
    {
        if (\is_array($this->assignees)) {
            Model::validateArray($this->assignees);
        }
        if (\is_array($this->attachmentPolicy)) {
            Model::validateArray($this->attachmentPolicy);
        }
        if (\is_array($this->myPermissions)) {
            Model::validateArray($this->myPermissions);
        }
        if (\is_array($this->questions)) {
            Model::validateArray($this->questions);
        }
        if (\is_array($this->resultPayload)) {
            Model::validateArray($this->resultPayload);
        }
        if (\is_array($this->sourceContext)) {
            Model::validateArray($this->sourceContext);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assigneeCount) {
            $res['assigneeCount'] = $this->assigneeCount;
        }

        if (null !== $this->assignees) {
            if (\is_array($this->assignees)) {
                $res['assignees'] = [];
                $n1 = 0;
                foreach ($this->assignees as $item1) {
                    $res['assignees'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->attachmentPolicy) {
            if (\is_array($this->attachmentPolicy)) {
                $res['attachmentPolicy'] = [];
                foreach ($this->attachmentPolicy as $key1 => $value1) {
                    $res['attachmentPolicy'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->completedAt) {
            $res['completedAt'] = $this->completedAt;
        }

        if (null !== $this->completedByUserId) {
            $res['completedByUserId'] = $this->completedByUserId;
        }

        if (null !== $this->completedByUserName) {
            $res['completedByUserName'] = $this->completedByUserName;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->isRead) {
            $res['isRead'] = $this->isRead;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->messageId) {
            $res['messageId'] = $this->messageId;
        }

        if (null !== $this->myAssigneeStatus) {
            $res['myAssigneeStatus'] = $this->myAssigneeStatus;
        }

        if (null !== $this->myDisplayState) {
            $res['myDisplayState'] = $this->myDisplayState;
        }

        if (null !== $this->myPermissions) {
            if (\is_array($this->myPermissions)) {
                $res['myPermissions'] = [];
                foreach ($this->myPermissions as $key1 => $value1) {
                    $res['myPermissions'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }

        if (null !== $this->questions) {
            if (\is_array($this->questions)) {
                $res['questions'] = [];
                $n1 = 0;
                foreach ($this->questions as $item1) {
                    $res['questions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->resultPayload) {
            if (\is_array($this->resultPayload)) {
                $res['resultPayload'] = [];
                foreach ($this->resultPayload as $key1 => $value1) {
                    $res['resultPayload'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->sourceContext) {
            if (\is_array($this->sourceContext)) {
                $res['sourceContext'] = [];
                foreach ($this->sourceContext as $key1 => $value1) {
                    $res['sourceContext'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->sourceWorkflowId) {
            $res['sourceWorkflowId'] = $this->sourceWorkflowId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->todoId) {
            $res['todoId'] = $this->todoId;
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
        if (isset($map['assigneeCount'])) {
            $model->assigneeCount = $map['assigneeCount'];
        }

        if (isset($map['assignees'])) {
            if (!empty($map['assignees'])) {
                $model->assignees = [];
                $n1 = 0;
                foreach ($map['assignees'] as $item1) {
                    $model->assignees[$n1] = assignees::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['attachmentPolicy'])) {
            if (!empty($map['attachmentPolicy'])) {
                $model->attachmentPolicy = [];
                foreach ($map['attachmentPolicy'] as $key1 => $value1) {
                    $model->attachmentPolicy[$key1] = $value1;
                }
            }
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['completedAt'])) {
            $model->completedAt = $map['completedAt'];
        }

        if (isset($map['completedByUserId'])) {
            $model->completedByUserId = $map['completedByUserId'];
        }

        if (isset($map['completedByUserName'])) {
            $model->completedByUserName = $map['completedByUserName'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['isRead'])) {
            $model->isRead = $map['isRead'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['messageId'])) {
            $model->messageId = $map['messageId'];
        }

        if (isset($map['myAssigneeStatus'])) {
            $model->myAssigneeStatus = $map['myAssigneeStatus'];
        }

        if (isset($map['myDisplayState'])) {
            $model->myDisplayState = $map['myDisplayState'];
        }

        if (isset($map['myPermissions'])) {
            if (!empty($map['myPermissions'])) {
                $model->myPermissions = [];
                foreach ($map['myPermissions'] as $key1 => $value1) {
                    $model->myPermissions[$key1] = $value1;
                }
            }
        }

        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }

        if (isset($map['questions'])) {
            if (!empty($map['questions'])) {
                $model->questions = [];
                $n1 = 0;
                foreach ($map['questions'] as $item1) {
                    $model->questions[$n1] = questions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['resultPayload'])) {
            if (!empty($map['resultPayload'])) {
                $model->resultPayload = [];
                foreach ($map['resultPayload'] as $key1 => $value1) {
                    $model->resultPayload[$key1] = $value1;
                }
            }
        }

        if (isset($map['sourceContext'])) {
            if (!empty($map['sourceContext'])) {
                $model->sourceContext = [];
                foreach ($map['sourceContext'] as $key1 => $value1) {
                    $model->sourceContext[$key1] = $value1;
                }
            }
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['sourceWorkflowId'])) {
            $model->sourceWorkflowId = $map['sourceWorkflowId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['todoId'])) {
            $model->todoId = $map['todoId'];
        }

        return $model;
    }
}

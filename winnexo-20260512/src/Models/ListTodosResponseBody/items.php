<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListTodosResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $assigneeCount;

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
     * @var string
     */
    public $priority;

    /**
     * @var int
     */
    public $questionCount;

    /**
     * @var string[]
     */
    public $questionSummaries;

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
    public $status;

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
        'completedAt' => 'completedAt',
        'completedByUserId' => 'completedByUserId',
        'completedByUserName' => 'completedByUserName',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'isRead' => 'isRead',
        'messageId' => 'messageId',
        'myAssigneeStatus' => 'myAssigneeStatus',
        'myDisplayState' => 'myDisplayState',
        'priority' => 'priority',
        'questionCount' => 'questionCount',
        'questionSummaries' => 'questionSummaries',
        'sourceContext' => 'sourceContext',
        'sourceType' => 'sourceType',
        'status' => 'status',
        'title' => 'title',
        'todoId' => 'todoId',
    ];

    public function validate()
    {
        if (\is_array($this->questionSummaries)) {
            Model::validateArray($this->questionSummaries);
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

        if (null !== $this->messageId) {
            $res['messageId'] = $this->messageId;
        }

        if (null !== $this->myAssigneeStatus) {
            $res['myAssigneeStatus'] = $this->myAssigneeStatus;
        }

        if (null !== $this->myDisplayState) {
            $res['myDisplayState'] = $this->myDisplayState;
        }

        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }

        if (null !== $this->questionCount) {
            $res['questionCount'] = $this->questionCount;
        }

        if (null !== $this->questionSummaries) {
            if (\is_array($this->questionSummaries)) {
                $res['questionSummaries'] = [];
                $n1 = 0;
                foreach ($this->questionSummaries as $item1) {
                    $res['questionSummaries'][$n1] = $item1;
                    ++$n1;
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

        if (null !== $this->status) {
            $res['status'] = $this->status;
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

        if (isset($map['messageId'])) {
            $model->messageId = $map['messageId'];
        }

        if (isset($map['myAssigneeStatus'])) {
            $model->myAssigneeStatus = $map['myAssigneeStatus'];
        }

        if (isset($map['myDisplayState'])) {
            $model->myDisplayState = $map['myDisplayState'];
        }

        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }

        if (isset($map['questionCount'])) {
            $model->questionCount = $map['questionCount'];
        }

        if (isset($map['questionSummaries'])) {
            if (!empty($map['questionSummaries'])) {
                $model->questionSummaries = [];
                $n1 = 0;
                foreach ($map['questionSummaries'] as $item1) {
                    $model->questionSummaries[$n1] = $item1;
                    ++$n1;
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

        if (isset($map['status'])) {
            $model->status = $map['status'];
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

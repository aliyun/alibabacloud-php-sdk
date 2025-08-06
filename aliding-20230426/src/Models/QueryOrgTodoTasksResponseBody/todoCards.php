<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryOrgTodoTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryOrgTodoTasksResponseBody\todoCards\detailUrl;

class todoCards extends Model
{
    /**
     * @var string
     */
    public $bizTag;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var detailUrl
     */
    public $detailUrl;

    /**
     * @var int
     */
    public $dueTime;

    /**
     * @var bool
     */
    public $isDone;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'bizTag' => 'bizTag',
        'createdTime' => 'createdTime',
        'creatorId' => 'creatorId',
        'detailUrl' => 'detailUrl',
        'dueTime' => 'dueTime',
        'isDone' => 'isDone',
        'modifiedTime' => 'modifiedTime',
        'priority' => 'priority',
        'sourceId' => 'sourceId',
        'subject' => 'subject',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        if (null !== $this->detailUrl) {
            $this->detailUrl->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizTag) {
            $res['bizTag'] = $this->bizTag;
        }

        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }

        if (null !== $this->creatorId) {
            $res['creatorId'] = $this->creatorId;
        }

        if (null !== $this->detailUrl) {
            $res['detailUrl'] = null !== $this->detailUrl ? $this->detailUrl->toArray($noStream) : $this->detailUrl;
        }

        if (null !== $this->dueTime) {
            $res['dueTime'] = $this->dueTime;
        }

        if (null !== $this->isDone) {
            $res['isDone'] = $this->isDone;
        }

        if (null !== $this->modifiedTime) {
            $res['modifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }

        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }

        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
        if (isset($map['bizTag'])) {
            $model->bizTag = $map['bizTag'];
        }

        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }

        if (isset($map['creatorId'])) {
            $model->creatorId = $map['creatorId'];
        }

        if (isset($map['detailUrl'])) {
            $model->detailUrl = detailUrl::fromMap($map['detailUrl']);
        }

        if (isset($map['dueTime'])) {
            $model->dueTime = $map['dueTime'];
        }

        if (isset($map['isDone'])) {
            $model->isDone = $map['isDone'];
        }

        if (isset($map['modifiedTime'])) {
            $model->modifiedTime = $map['modifiedTime'];
        }

        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }

        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}

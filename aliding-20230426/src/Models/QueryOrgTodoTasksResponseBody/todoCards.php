<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryOrgTodoTasksResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryOrgTodoTasksResponseBody\todoCards\detailUrl;
use AlibabaCloud\Tea\Model;

class todoCards extends Model
{
    /**
     * @example isv_dingtalkTodo
     *
     * @var string
     */
    public $bizTag;

    /**
     * @example 1617675000000
     *
     * @var int
     */
    public $createdTime;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $creatorId;

    /**
     * @var detailUrl
     */
    public $detailUrl;

    /**
     * @example 1617675000000
     *
     * @var int
     */
    public $dueTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDone;

    /**
     * @example 1617675000000
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @example 10
     *
     * @var int
     */
    public $priority;

    /**
     * @example isv_dingtalkTodo1
     *
     * @var string
     */
    public $sourceId;

    /**
     * @example 接入钉钉待办
     *
     * @var string
     */
    public $subject;

    /**
     * @example taskOPJpwtwPVNGIFKURjrzd
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'bizTag'       => 'bizTag',
        'createdTime'  => 'createdTime',
        'creatorId'    => 'creatorId',
        'detailUrl'    => 'detailUrl',
        'dueTime'      => 'dueTime',
        'isDone'       => 'isDone',
        'modifiedTime' => 'modifiedTime',
        'priority'     => 'priority',
        'sourceId'     => 'sourceId',
        'subject'      => 'subject',
        'taskId'       => 'taskId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['detailUrl'] = null !== $this->detailUrl ? $this->detailUrl->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return todoCards
     */
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

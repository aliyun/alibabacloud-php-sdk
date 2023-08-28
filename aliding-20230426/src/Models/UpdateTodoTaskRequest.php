<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class UpdateTodoTaskRequest extends Model
{
    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @example 应用可以调用该接口发起一个钉钉待办任务，该待办事项会出现在钉钉客户端“待办”页面，需要注意的是，通过开放接口发起的待办，目前仅支持直接跳转ISV应用详情页（ISV在调该接口时需传入自身应用详情页链接）。
     *
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var bool
     */
    public $done;

    /**
     * @example 1617675000000
     *
     * @var int
     */
    public $dueTime;

    /**
     * @example []
     *
     * @var string[]
     */
    public $executorIds;

    /**
     * @example []
     *
     * @var string[]
     */
    public $participantIds;

    /**
     * @example 更新钉钉待办
     *
     * @var string
     */
    public $subject;

    /**
     * @example taskId
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'tenantContext'  => 'TenantContext',
        'description'    => 'description',
        'done'           => 'done',
        'dueTime'        => 'dueTime',
        'executorIds'    => 'executorIds',
        'participantIds' => 'participantIds',
        'subject'        => 'subject',
        'taskId'         => 'taskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->done) {
            $res['done'] = $this->done;
        }
        if (null !== $this->dueTime) {
            $res['dueTime'] = $this->dueTime;
        }
        if (null !== $this->executorIds) {
            $res['executorIds'] = $this->executorIds;
        }
        if (null !== $this->participantIds) {
            $res['participantIds'] = $this->participantIds;
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
     * @return UpdateTodoTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['done'])) {
            $model->done = $map['done'];
        }
        if (isset($map['dueTime'])) {
            $model->dueTime = $map['dueTime'];
        }
        if (isset($map['executorIds'])) {
            if (!empty($map['executorIds'])) {
                $model->executorIds = $map['executorIds'];
            }
        }
        if (isset($map['participantIds'])) {
            if (!empty($map['participantIds'])) {
                $model->participantIds = $map['participantIds'];
            }
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

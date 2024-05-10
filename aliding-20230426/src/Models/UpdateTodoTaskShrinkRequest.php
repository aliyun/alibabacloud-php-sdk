<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class UpdateTodoTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $tenantContextShrink;

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
     * @var string
     */
    public $executorIdsShrink;

    /**
     * @example []
     *
     * @var string
     */
    public $participantIdsShrink;

    /**
     * @example 更新钉钉待办
     *
     * @var string
     */
    public $subject;

    /**
     * @description This parameter is required.
     *
     * @example taskId
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'tenantContextShrink'  => 'TenantContext',
        'description'          => 'description',
        'done'                 => 'done',
        'dueTime'              => 'dueTime',
        'executorIdsShrink'    => 'executorIds',
        'participantIdsShrink' => 'participantIds',
        'subject'              => 'subject',
        'taskId'               => 'taskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
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
        if (null !== $this->executorIdsShrink) {
            $res['executorIds'] = $this->executorIdsShrink;
        }
        if (null !== $this->participantIdsShrink) {
            $res['participantIds'] = $this->participantIdsShrink;
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
     * @return UpdateTodoTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
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
            $model->executorIdsShrink = $map['executorIds'];
        }
        if (isset($map['participantIds'])) {
            $model->participantIdsShrink = $map['participantIds'];
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

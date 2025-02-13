<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class UpdateTodoTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $tenantContextShrink;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $done;
    /**
     * @var int
     */
    public $dueTime;
    /**
     * @var string
     */
    public $executorIdsShrink;
    /**
     * @var string
     */
    public $participantIdsShrink;
    /**
     * @var string
     */
    public $subject;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

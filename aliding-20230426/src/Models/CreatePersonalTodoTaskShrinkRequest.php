<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class CreatePersonalTodoTaskShrinkRequest extends Model
{
    /**
     * @example 待办备注信息
     *
     * @var string
     */
    public $description;

    /**
     * @example 1703750708595
     *
     * @var int
     */
    public $dueTime;

    /**
     * @description This parameter is required.
     *
     * @example [ "012345" ]
     *
     * @var string
     */
    public $executorIdsShrink;

    /**
     * @var string
     */
    public $notifyConfigsShrink;

    /**
     * @example [ "012345" ]
     *
     * @var string
     */
    public $participantIdsShrink;

    /**
     * @description This parameter is required.
     *
     * @example 待办标题
     *
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'description'          => 'Description',
        'dueTime'              => 'DueTime',
        'executorIdsShrink'    => 'ExecutorIds',
        'notifyConfigsShrink'  => 'NotifyConfigs',
        'participantIdsShrink' => 'ParticipantIds',
        'subject'              => 'Subject',
        'tenantContextShrink'  => 'TenantContext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dueTime) {
            $res['DueTime'] = $this->dueTime;
        }
        if (null !== $this->executorIdsShrink) {
            $res['ExecutorIds'] = $this->executorIdsShrink;
        }
        if (null !== $this->notifyConfigsShrink) {
            $res['NotifyConfigs'] = $this->notifyConfigsShrink;
        }
        if (null !== $this->participantIdsShrink) {
            $res['ParticipantIds'] = $this->participantIdsShrink;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePersonalTodoTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DueTime'])) {
            $model->dueTime = $map['DueTime'];
        }
        if (isset($map['ExecutorIds'])) {
            $model->executorIdsShrink = $map['ExecutorIds'];
        }
        if (isset($map['NotifyConfigs'])) {
            $model->notifyConfigsShrink = $map['NotifyConfigs'];
        }
        if (isset($map['ParticipantIds'])) {
            $model->participantIdsShrink = $map['ParticipantIds'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}

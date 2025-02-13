<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class CreatePersonalTodoTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $description;
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
    public $notifyConfigsShrink;
    /**
     * @var string
     */
    public $participantIdsShrink;
    /**
     * @var int
     */
    public $reminderTimeStamp;
    /**
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
        'reminderTimeStamp'    => 'ReminderTimeStamp',
        'subject'              => 'Subject',
        'tenantContextShrink'  => 'TenantContext',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->reminderTimeStamp) {
            $res['ReminderTimeStamp'] = $this->reminderTimeStamp;
        }

        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }

        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
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

        if (isset($map['ReminderTimeStamp'])) {
            $model->reminderTimeStamp = $map['ReminderTimeStamp'];
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

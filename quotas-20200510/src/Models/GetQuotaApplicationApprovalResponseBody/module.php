<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaApplicationApprovalResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var int
     */
    public $approvalHours;

    /**
     * @var int
     */
    public $reminderIntervalHours;

    /**
     * @var bool
     */
    public $supportReminder;

    /**
     * @var string
     */
    public $unsupportReminderReason;
    protected $_name = [
        'approvalHours' => 'ApprovalHours',
        'reminderIntervalHours' => 'ReminderIntervalHours',
        'supportReminder' => 'SupportReminder',
        'unsupportReminderReason' => 'UnsupportReminderReason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approvalHours) {
            $res['ApprovalHours'] = $this->approvalHours;
        }

        if (null !== $this->reminderIntervalHours) {
            $res['ReminderIntervalHours'] = $this->reminderIntervalHours;
        }

        if (null !== $this->supportReminder) {
            $res['SupportReminder'] = $this->supportReminder;
        }

        if (null !== $this->unsupportReminderReason) {
            $res['UnsupportReminderReason'] = $this->unsupportReminderReason;
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
        if (isset($map['ApprovalHours'])) {
            $model->approvalHours = $map['ApprovalHours'];
        }

        if (isset($map['ReminderIntervalHours'])) {
            $model->reminderIntervalHours = $map['ReminderIntervalHours'];
        }

        if (isset($map['SupportReminder'])) {
            $model->supportReminder = $map['SupportReminder'];
        }

        if (isset($map['UnsupportReminderReason'])) {
            $model->unsupportReminderReason = $map['UnsupportReminderReason'];
        }

        return $model;
    }
}

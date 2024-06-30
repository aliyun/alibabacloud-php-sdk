<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaApplicationApprovalResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @description The average amount of time required to approve quota applications. Unit: hour.
     *
     * @example 24
     *
     * @var int
     */
    public $approvalHours;

    /**
     * @description The interval between two consecutive approval reminders. Unit: hour.
     *
     * @example 24
     *
     * @var int
     */
    public $reminderIntervalHours;

    /**
     * @description Indicates whether approval reminders are supported for quota applications. Valid values:
     *
     *   false
     *   true
     *
     * @example false
     *
     * @var bool
     */
    public $supportReminder;

    /**
     * @description The reason why approval reminders are not supported for quota applications.
     *
     * @example can only be remind once within the interval
     *
     * @var string
     */
    public $unsupportReminderReason;
    protected $_name = [
        'approvalHours'           => 'ApprovalHours',
        'reminderIntervalHours'   => 'ReminderIntervalHours',
        'supportReminder'         => 'SupportReminder',
        'unsupportReminderReason' => 'UnsupportReminderReason',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return module
     */
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

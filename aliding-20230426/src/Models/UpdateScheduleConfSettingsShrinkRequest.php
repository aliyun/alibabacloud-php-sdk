<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class UpdateScheduleConfSettingsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $scheduleConfSettingModelShrink;

    /**
     * @var string
     */
    public $scheduleConferenceId;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'scheduleConfSettingModelShrink' => 'ScheduleConfSettingModel',
        'scheduleConferenceId' => 'ScheduleConferenceId',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scheduleConfSettingModelShrink) {
            $res['ScheduleConfSettingModel'] = $this->scheduleConfSettingModelShrink;
        }

        if (null !== $this->scheduleConferenceId) {
            $res['ScheduleConferenceId'] = $this->scheduleConferenceId;
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
        if (isset($map['ScheduleConfSettingModel'])) {
            $model->scheduleConfSettingModelShrink = $map['ScheduleConfSettingModel'];
        }

        if (isset($map['ScheduleConferenceId'])) {
            $model->scheduleConferenceId = $map['ScheduleConferenceId'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}

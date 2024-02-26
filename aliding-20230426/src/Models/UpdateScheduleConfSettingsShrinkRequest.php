<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class UpdateScheduleConfSettingsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $scheduleConfSettingModelShrink;

    /**
     * @example f6fb627e-a7e8-403e-b1f8-26e85450f4a9
     *
     * @var string
     */
    public $scheduleConferenceId;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'scheduleConfSettingModelShrink' => 'ScheduleConfSettingModel',
        'scheduleConferenceId'           => 'ScheduleConferenceId',
        'tenantContextShrink'            => 'TenantContext',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateScheduleConfSettingsShrinkRequest
     */
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

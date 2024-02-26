<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConfSettingsRequest\scheduleConfSettingModel;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConfSettingsRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class UpdateScheduleConfSettingsRequest extends Model
{
    /**
     * @var scheduleConfSettingModel
     */
    public $scheduleConfSettingModel;

    /**
     * @example f6fb627e-a7e8-403e-b1f8-26e85450f4a9
     *
     * @var string
     */
    public $scheduleConferenceId;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'scheduleConfSettingModel' => 'ScheduleConfSettingModel',
        'scheduleConferenceId'     => 'ScheduleConferenceId',
        'tenantContext'            => 'TenantContext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scheduleConfSettingModel) {
            $res['ScheduleConfSettingModel'] = null !== $this->scheduleConfSettingModel ? $this->scheduleConfSettingModel->toMap() : null;
        }
        if (null !== $this->scheduleConferenceId) {
            $res['ScheduleConferenceId'] = $this->scheduleConferenceId;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateScheduleConfSettingsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScheduleConfSettingModel'])) {
            $model->scheduleConfSettingModel = scheduleConfSettingModel::fromMap($map['ScheduleConfSettingModel']);
        }
        if (isset($map['ScheduleConferenceId'])) {
            $model->scheduleConferenceId = $map['ScheduleConferenceId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}

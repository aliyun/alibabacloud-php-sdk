<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConfSettingsRequest\scheduleConfSettingModel;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConfSettingsRequest\tenantContext;

class UpdateScheduleConfSettingsRequest extends Model
{
    /**
     * @var scheduleConfSettingModel
     */
    public $scheduleConfSettingModel;

    /**
     * @var string
     */
    public $scheduleConferenceId;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'scheduleConfSettingModel' => 'ScheduleConfSettingModel',
        'scheduleConferenceId' => 'ScheduleConferenceId',
        'tenantContext' => 'TenantContext',
    ];

    public function validate()
    {
        if (null !== $this->scheduleConfSettingModel) {
            $this->scheduleConfSettingModel->validate();
        }
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scheduleConfSettingModel) {
            $res['ScheduleConfSettingModel'] = null !== $this->scheduleConfSettingModel ? $this->scheduleConfSettingModel->toArray($noStream) : $this->scheduleConfSettingModel;
        }

        if (null !== $this->scheduleConferenceId) {
            $res['ScheduleConferenceId'] = $this->scheduleConferenceId;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
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

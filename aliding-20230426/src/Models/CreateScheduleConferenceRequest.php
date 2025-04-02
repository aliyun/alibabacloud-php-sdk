<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateScheduleConferenceRequest\scheduleConfSettingModel;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateScheduleConferenceRequest\tenantContext;

class CreateScheduleConferenceRequest extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var scheduleConfSettingModel
     */
    public $scheduleConfSettingModel;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'endTime' => 'EndTime',
        'scheduleConfSettingModel' => 'ScheduleConfSettingModel',
        'startTime' => 'StartTime',
        'tenantContext' => 'TenantContext',
        'title' => 'Title',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->scheduleConfSettingModel) {
            $res['ScheduleConfSettingModel'] = null !== $this->scheduleConfSettingModel ? $this->scheduleConfSettingModel->toArray($noStream) : $this->scheduleConfSettingModel;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ScheduleConfSettingModel'])) {
            $model->scheduleConfSettingModel = scheduleConfSettingModel::fromMap($map['ScheduleConfSettingModel']);
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}

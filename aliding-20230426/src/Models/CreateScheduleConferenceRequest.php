<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateScheduleConferenceRequest\scheduleConfSettingModel;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateScheduleConferenceRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class CreateScheduleConferenceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1687928400000L
     *
     * @var int
     */
    public $endTime;

    /**
     * @var scheduleConfSettingModel
     */
    public $scheduleConfSettingModel;

    /**
     * @description This parameter is required.
     *
     * @example 1687924800000L
     *
     * @var int
     */
    public $startTime;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @description This parameter is required.
     *
     * @example 预约会议标题
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->scheduleConfSettingModel) {
            $res['ScheduleConfSettingModel'] = null !== $this->scheduleConfSettingModel ? $this->scheduleConfSettingModel->toMap() : null;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateScheduleConferenceRequest
     */
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

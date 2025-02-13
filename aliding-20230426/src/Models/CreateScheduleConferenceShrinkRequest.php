<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class CreateScheduleConferenceShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var string
     */
    public $scheduleConfSettingModelShrink;
    /**
     * @var int
     */
    public $startTime;
    /**
     * @var string
     */
    public $tenantContextShrink;
    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'endTime'                        => 'EndTime',
        'scheduleConfSettingModelShrink' => 'ScheduleConfSettingModel',
        'startTime'                      => 'StartTime',
        'tenantContextShrink'            => 'TenantContext',
        'title'                          => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->scheduleConfSettingModelShrink) {
            $res['ScheduleConfSettingModel'] = $this->scheduleConfSettingModelShrink;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
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
            $model->scheduleConfSettingModelShrink = $map['ScheduleConfSettingModel'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}

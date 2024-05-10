<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class CancelScheduleConferenceShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 2a489xxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx
     *
     * @var string
     */
    public $scheduleConferenceId;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'scheduleConferenceId' => 'ScheduleConferenceId',
        'tenantContextShrink'  => 'TenantContext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return CancelScheduleConferenceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScheduleConferenceId'])) {
            $model->scheduleConferenceId = $map['ScheduleConferenceId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}

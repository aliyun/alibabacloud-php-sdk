<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class QueryScheduleConferenceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @description This parameter is required.
     *
     * @example 2a489c68-xxxx-xxxx-xxxx-xxxxxxxxxxxx
     *
     * @var string
     */
    public $scheduleConferenceId;
    protected $_name = [
        'tenantContextShrink'  => 'TenantContext',
        'scheduleConferenceId' => 'scheduleConferenceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }
        if (null !== $this->scheduleConferenceId) {
            $res['scheduleConferenceId'] = $this->scheduleConferenceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryScheduleConferenceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }
        if (isset($map['scheduleConferenceId'])) {
            $model->scheduleConferenceId = $map['scheduleConferenceId'];
        }

        return $model;
    }
}

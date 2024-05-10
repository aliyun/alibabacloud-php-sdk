<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryScheduleConferenceRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class QueryScheduleConferenceRequest extends Model
{
    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @description This parameter is required.
     *
     * @example 2a489c68-xxxx-xxxx-xxxx-xxxxxxxxxxxx
     *
     * @var string
     */
    public $scheduleConferenceId;
    protected $_name = [
        'tenantContext'        => 'TenantContext',
        'scheduleConferenceId' => 'scheduleConferenceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }
        if (null !== $this->scheduleConferenceId) {
            $res['scheduleConferenceId'] = $this->scheduleConferenceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryScheduleConferenceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }
        if (isset($map['scheduleConferenceId'])) {
            $model->scheduleConferenceId = $map['scheduleConferenceId'];
        }

        return $model;
    }
}

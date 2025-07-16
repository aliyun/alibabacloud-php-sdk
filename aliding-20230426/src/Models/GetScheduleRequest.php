<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetScheduleRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class GetScheduleRequest extends Model
{
    /**
     * @example 2020-01-01T10:15:30+08:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 2020-01-01T10:15:30+08:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var string[]
     */
    public $userIds;
    protected $_name = [
        'endTime' => 'EndTime',
        'startTime' => 'StartTime',
        'tenantContext' => 'TenantContext',
        'userIds' => 'UserIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }
        if (null !== $this->userIds) {
            $res['UserIds'] = $this->userIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetScheduleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }
        if (isset($map['UserIds'])) {
            if (!empty($map['UserIds'])) {
                $model->userIds = $map['UserIds'];
            }
        }

        return $model;
    }
}

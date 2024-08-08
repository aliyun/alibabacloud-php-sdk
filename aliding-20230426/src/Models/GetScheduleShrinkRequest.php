<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetScheduleShrinkRequest extends Model
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
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @var string
     */
    public $userIdsShrink;
    protected $_name = [
        'endTime'             => 'EndTime',
        'startTime'           => 'StartTime',
        'tenantContextShrink' => 'TenantContext',
        'userIdsShrink'       => 'UserIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }
        if (null !== $this->userIdsShrink) {
            $res['UserIds'] = $this->userIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetScheduleShrinkRequest
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
            $model->tenantContextShrink = $map['TenantContext'];
        }
        if (isset($map['UserIds'])) {
            $model->userIdsShrink = $map['UserIds'];
        }

        return $model;
    }
}

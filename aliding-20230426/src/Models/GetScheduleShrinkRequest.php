<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class GetScheduleShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

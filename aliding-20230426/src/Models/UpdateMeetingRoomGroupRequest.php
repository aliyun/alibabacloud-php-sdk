<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomGroupRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class UpdateMeetingRoomGroupRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 172
     *
     * @var string
     */
    public $groupId;

    /**
     * @example 测试分组
     *
     * @var string
     */
    public $groupName;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'groupId'       => 'GroupId',
        'groupName'     => 'GroupName',
        'tenantContext' => 'TenantContext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMeetingRoomGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}

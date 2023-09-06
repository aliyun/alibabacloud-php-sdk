<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMeetingRoomGroupRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class CreateMeetingRoomGroupRequest extends Model
{
    /**
     * @example 测试分组
     *
     * @var string
     */
    public $groupName;

    /**
     * @example 172L
     *
     * @var int
     */
    public $parentGroupId;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'groupName'     => 'GroupName',
        'parentGroupId' => 'ParentGroupId',
        'tenantContext' => 'TenantContext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->parentGroupId) {
            $res['ParentGroupId'] = $this->parentGroupId;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMeetingRoomGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['ParentGroupId'])) {
            $model->parentGroupId = $map['ParentGroupId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}

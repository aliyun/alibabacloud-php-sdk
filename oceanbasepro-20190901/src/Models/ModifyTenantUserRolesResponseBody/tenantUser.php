<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantUserRolesResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantUserRolesResponseBody\tenantUser\userRole;
use AlibabaCloud\Tea\Model;

class tenantUser extends Model
{
    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var userRole[]
     */
    public $userRole;
    protected $_name = [
        'tenantId' => 'TenantId',
        'userName' => 'UserName',
        'userRole' => 'UserRole',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->userRole) {
            $res['UserRole'] = [];
            if (null !== $this->userRole && \is_array($this->userRole)) {
                $n = 0;
                foreach ($this->userRole as $item) {
                    $res['UserRole'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenantUser
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['UserRole'])) {
            if (!empty($map['UserRole'])) {
                $model->userRole = [];
                $n               = 0;
                foreach ($map['UserRole'] as $item) {
                    $model->userRole[$n++] = null !== $item ? userRole::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

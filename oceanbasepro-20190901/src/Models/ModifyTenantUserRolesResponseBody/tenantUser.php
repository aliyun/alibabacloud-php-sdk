<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantUserRolesResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantUserRolesResponseBody\tenantUser\userRole;
use AlibabaCloud\Tea\Model;

class tenantUser extends Model
{
    /**
     * @example t33h8y08k****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @example pay_test
     *
     * @var string
     */
    public $userName;

    /**
     * @description The name of the database (MySQL mode) or schema (Oracle mode).
     *
     * @example 账号具备的数据库权限信息列表。
     *
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantUserResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantUserResponseBody\tenantUser\roles;
use AlibabaCloud\Tea\Model;

class tenantUser extends Model
{
    /**
     * @var roles[]
     */
    public $roles;

    /**
     * @example pay_test
     *
     * @var string
     */
    public $userName;

    /**
     * @example ONLINE
     *
     * @var string
     */
    public $userStatus;

    /**
     * @var string
     */
    public $userType;
    protected $_name = [
        'roles'      => 'Roles',
        'userName'   => 'UserName',
        'userStatus' => 'UserStatus',
        'userType'   => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roles) {
            $res['Roles'] = [];
            if (null !== $this->roles && \is_array($this->roles)) {
                $n = 0;
                foreach ($this->roles as $item) {
                    $res['Roles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->userStatus) {
            $res['UserStatus'] = $this->userStatus;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
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
        if (isset($map['Roles'])) {
            if (!empty($map['Roles'])) {
                $model->roles = [];
                $n            = 0;
                foreach ($map['Roles'] as $item) {
                    $model->roles[$n++] = null !== $item ? roles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['UserStatus'])) {
            $model->userStatus = $map['UserStatus'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}

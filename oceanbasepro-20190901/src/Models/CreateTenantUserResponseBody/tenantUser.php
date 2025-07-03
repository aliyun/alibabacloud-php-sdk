<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantUserResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantUserResponseBody\tenantUser\roles;

class tenantUser extends Model
{
    /**
     * @var string
     */
    public $globalPermissions;

    /**
     * @var roles[]
     */
    public $roles;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $userStatus;

    /**
     * @var string
     */
    public $userType;
    protected $_name = [
        'globalPermissions' => 'GlobalPermissions',
        'roles' => 'Roles',
        'userName' => 'UserName',
        'userStatus' => 'UserStatus',
        'userType' => 'UserType',
    ];

    public function validate()
    {
        if (\is_array($this->roles)) {
            Model::validateArray($this->roles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->globalPermissions) {
            $res['GlobalPermissions'] = $this->globalPermissions;
        }

        if (null !== $this->roles) {
            if (\is_array($this->roles)) {
                $res['Roles'] = [];
                $n1 = 0;
                foreach ($this->roles as $item1) {
                    $res['Roles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GlobalPermissions'])) {
            $model->globalPermissions = $map['GlobalPermissions'];
        }

        if (isset($map['Roles'])) {
            if (!empty($map['Roles'])) {
                $model->roles = [];
                $n1 = 0;
                foreach ($map['Roles'] as $item1) {
                    $model->roles[$n1] = roles::fromMap($item1);
                    ++$n1;
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

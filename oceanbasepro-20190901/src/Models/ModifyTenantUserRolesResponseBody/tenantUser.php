<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantUserRolesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantUserRolesResponseBody\tenantUser\userRole;

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
        if (\is_array($this->userRole)) {
            Model::validateArray($this->userRole);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->userRole) {
            if (\is_array($this->userRole)) {
                $res['UserRole'] = [];
                $n1 = 0;
                foreach ($this->userRole as $item1) {
                    $res['UserRole'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['UserRole'])) {
            if (!empty($map['UserRole'])) {
                $model->userRole = [];
                $n1 = 0;
                foreach ($map['UserRole'] as $item1) {
                    $model->userRole[$n1] = userRole::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

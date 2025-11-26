<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSecurityGroupPermissionsRequest\permissions;

class DeleteSecurityGroupPermissionsRequest extends Model
{
    /**
     * @var permissions[]
     */
    public $permissions;

    /**
     * @var string
     */
    public $securityGroupId;
    protected $_name = [
        'permissions' => 'Permissions',
        'securityGroupId' => 'SecurityGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->permissions)) {
            Model::validateArray($this->permissions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->permissions) {
            if (\is_array($this->permissions)) {
                $res['Permissions'] = [];
                $n1 = 0;
                foreach ($this->permissions as $item1) {
                    $res['Permissions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
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
        if (isset($map['Permissions'])) {
            if (!empty($map['Permissions'])) {
                $model->permissions = [];
                $n1 = 0;
                foreach ($map['Permissions'] as $item1) {
                    $model->permissions[$n1] = permissions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        return $model;
    }
}

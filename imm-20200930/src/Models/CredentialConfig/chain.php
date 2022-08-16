<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CredentialConfig;

use AlibabaCloud\Tea\Model;

class chain extends Model
{
    /**
     * @var string
     */
    public $assumeRoleFor;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $roleType;
    protected $_name = [
        'assumeRoleFor' => 'AssumeRoleFor',
        'role'          => 'Role',
        'roleType'      => 'RoleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assumeRoleFor) {
            $res['AssumeRoleFor'] = $this->assumeRoleFor;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return chain
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssumeRoleFor'])) {
            $model->assumeRoleFor = $map['AssumeRoleFor'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        return $model;
    }
}

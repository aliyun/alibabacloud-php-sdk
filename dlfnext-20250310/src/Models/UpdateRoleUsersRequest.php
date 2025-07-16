<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class UpdateRoleUsersRequest extends Model
{
    /**
     * @example acs:dlf::[accountId]:role/role_name
     *
     * @var string
     */
    public $rolePrincipal;

    /**
     * @var string[]
     */
    public $userPrincipals;
    protected $_name = [
        'rolePrincipal' => 'rolePrincipal',
        'userPrincipals' => 'userPrincipals',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->rolePrincipal) {
            $res['rolePrincipal'] = $this->rolePrincipal;
        }
        if (null !== $this->userPrincipals) {
            $res['userPrincipals'] = $this->userPrincipals;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRoleUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['rolePrincipal'])) {
            $model->rolePrincipal = $map['rolePrincipal'];
        }
        if (isset($map['userPrincipals'])) {
            if (!empty($map['userPrincipals'])) {
                $model->userPrincipals = $map['userPrincipals'];
            }
        }

        return $model;
    }
}

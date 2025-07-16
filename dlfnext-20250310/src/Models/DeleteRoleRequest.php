<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class DeleteRoleRequest extends Model
{
    /**
     * @example acs:dlf::[accountId]:role/role_name
     *
     * @var string
     */
    public $rolePrincipal;
    protected $_name = [
        'rolePrincipal' => 'rolePrincipal',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->rolePrincipal) {
            $res['rolePrincipal'] = $this->rolePrincipal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['rolePrincipal'])) {
            $model->rolePrincipal = $map['rolePrincipal'];
        }

        return $model;
    }
}

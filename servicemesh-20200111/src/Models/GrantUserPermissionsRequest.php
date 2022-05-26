<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class GrantUserPermissionsRequest extends Model
{
    /**
     * @var string
     */
    public $permissions;

    /**
     * @var string
     */
    public $subAccountUserId;
    protected $_name = [
        'permissions'      => 'Permissions',
        'subAccountUserId' => 'SubAccountUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->permissions) {
            $res['Permissions'] = $this->permissions;
        }
        if (null !== $this->subAccountUserId) {
            $res['SubAccountUserId'] = $this->subAccountUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantUserPermissionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Permissions'])) {
            $model->permissions = $map['Permissions'];
        }
        if (isset($map['SubAccountUserId'])) {
            $model->subAccountUserId = $map['SubAccountUserId'];
        }

        return $model;
    }
}

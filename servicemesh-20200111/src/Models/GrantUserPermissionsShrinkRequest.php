<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

class GrantUserPermissionsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $permissions;

    /**
     * @var string
     */
    public $subAccountUserId;

    /**
     * @var string
     */
    public $subAccountUserIdsShrink;
    protected $_name = [
        'permissions' => 'Permissions',
        'subAccountUserId' => 'SubAccountUserId',
        'subAccountUserIdsShrink' => 'SubAccountUserIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->permissions) {
            $res['Permissions'] = $this->permissions;
        }

        if (null !== $this->subAccountUserId) {
            $res['SubAccountUserId'] = $this->subAccountUserId;
        }

        if (null !== $this->subAccountUserIdsShrink) {
            $res['SubAccountUserIds'] = $this->subAccountUserIdsShrink;
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
            $model->permissions = $map['Permissions'];
        }

        if (isset($map['SubAccountUserId'])) {
            $model->subAccountUserId = $map['SubAccountUserId'];
        }

        if (isset($map['SubAccountUserIds'])) {
            $model->subAccountUserIdsShrink = $map['SubAccountUserIds'];
        }

        return $model;
    }
}

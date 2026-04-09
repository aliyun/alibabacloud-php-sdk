<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateDataPermissionsRequest;

use AlibabaCloud\Dara\Model;

class permissionUserInfos extends Model
{
    /**
     * @var string
     */
    public $permissionUserId;

    /**
     * @var string
     */
    public $permissionUsername;
    protected $_name = [
        'permissionUserId' => 'PermissionUserId',
        'permissionUsername' => 'PermissionUsername',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->permissionUserId) {
            $res['PermissionUserId'] = $this->permissionUserId;
        }

        if (null !== $this->permissionUsername) {
            $res['PermissionUsername'] = $this->permissionUsername;
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
        if (isset($map['PermissionUserId'])) {
            $model->permissionUserId = $map['PermissionUserId'];
        }

        if (isset($map['PermissionUsername'])) {
            $model->permissionUsername = $map['PermissionUsername'];
        }

        return $model;
    }
}

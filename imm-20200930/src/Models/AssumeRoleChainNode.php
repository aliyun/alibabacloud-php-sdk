<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class AssumeRoleChainNode extends Model
{
    /**
     * @description 账号id
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description 授权角色名
     *
     * @var string
     */
    public $role;

    /**
     * @description 账号类型，普通账号填 user，服务账号填 service
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'ownerId' => 'OwnerId',
        'role'    => 'Role',
        'type'    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssumeRoleChainNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

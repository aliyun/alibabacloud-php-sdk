<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class CheckSlrRoleRequest extends Model
{
    /**
     * @var bool
     */
    public $createIfNotExist;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'createIfNotExist' => 'CreateIfNotExist',
        'roleName'         => 'RoleName',
        'securityToken'    => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createIfNotExist) {
            $res['CreateIfNotExist'] = $this->createIfNotExist;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckSlrRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateIfNotExist'])) {
            $model->createIfNotExist = $map['CreateIfNotExist'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}

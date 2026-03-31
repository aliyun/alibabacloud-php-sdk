<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SetYikeUserRoleRequest extends Model
{
    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $yikeUserId;
    protected $_name = [
        'roleName' => 'RoleName',
        'yikeUserId' => 'YikeUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        if (null !== $this->yikeUserId) {
            $res['YikeUserId'] = $this->yikeUserId;
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
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        if (isset($map['YikeUserId'])) {
            $model->yikeUserId = $map['YikeUserId'];
        }

        return $model;
    }
}

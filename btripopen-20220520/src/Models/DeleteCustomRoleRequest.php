<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class DeleteCustomRoleRequest extends Model
{
    /**
     * @var string
     */
    public $roleId;
    protected $_name = [
        'roleId' => 'role_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->roleId) {
            $res['role_id'] = $this->roleId;
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
        if (isset($map['role_id'])) {
            $model->roleId = $map['role_id'];
        }

        return $model;
    }
}

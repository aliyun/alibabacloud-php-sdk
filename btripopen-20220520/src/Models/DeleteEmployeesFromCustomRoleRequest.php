<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class DeleteEmployeesFromCustomRoleRequest extends Model
{
    /**
     * @var string
     */
    public $roleId;

    /**
     * @var string[]
     */
    public $userIdList;
    protected $_name = [
        'roleId' => 'role_id',
        'userIdList' => 'user_id_list',
    ];

    public function validate()
    {
        if (\is_array($this->userIdList)) {
            Model::validateArray($this->userIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->roleId) {
            $res['role_id'] = $this->roleId;
        }

        if (null !== $this->userIdList) {
            if (\is_array($this->userIdList)) {
                $res['user_id_list'] = [];
                $n1 = 0;
                foreach ($this->userIdList as $item1) {
                    $res['user_id_list'][$n1++] = $item1;
                }
            }
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

        if (isset($map['user_id_list'])) {
            if (!empty($map['user_id_list'])) {
                $model->userIdList = [];
                $n1 = 0;
                foreach ($map['user_id_list'] as $item1) {
                    $model->userIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

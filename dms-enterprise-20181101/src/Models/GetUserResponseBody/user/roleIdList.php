<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserResponseBody\user;

use AlibabaCloud\Dara\Model;

class roleIdList extends Model
{
    /**
     * @var int[]
     */
    public $roleIds;
    protected $_name = [
        'roleIds' => 'RoleIds',
    ];

    public function validate()
    {
        if (\is_array($this->roleIds)) {
            Model::validateArray($this->roleIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->roleIds) {
            if (\is_array($this->roleIds)) {
                $res['RoleIds'] = [];
                $n1 = 0;
                foreach ($this->roleIds as $item1) {
                    $res['RoleIds'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['RoleIds'])) {
            if (!empty($map['RoleIds'])) {
                $model->roleIds = [];
                $n1 = 0;
                foreach ($map['RoleIds'] as $item1) {
                    $model->roleIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

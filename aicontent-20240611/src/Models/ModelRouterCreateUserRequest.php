<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelRouterCreateUserRequest extends Model
{
    /**
     * @var DepartmentRoleCmd[]
     */
    public $departmentRoles;

    /**
     * @var string
     */
    public $loginName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $phone;
    protected $_name = [
        'departmentRoles' => 'departmentRoles',
        'loginName' => 'loginName',
        'name' => 'name',
        'phone' => 'phone',
    ];

    public function validate()
    {
        if (\is_array($this->departmentRoles)) {
            Model::validateArray($this->departmentRoles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->departmentRoles) {
            if (\is_array($this->departmentRoles)) {
                $res['departmentRoles'] = [];
                $n1 = 0;
                foreach ($this->departmentRoles as $item1) {
                    $res['departmentRoles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->loginName) {
            $res['loginName'] = $this->loginName;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
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
        if (isset($map['departmentRoles'])) {
            if (!empty($map['departmentRoles'])) {
                $model->departmentRoles = [];
                $n1 = 0;
                foreach ($map['departmentRoles'] as $item1) {
                    $model->departmentRoles[$n1] = DepartmentRoleCmd::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['loginName'])) {
            $model->loginName = $map['loginName'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        return $model;
    }
}

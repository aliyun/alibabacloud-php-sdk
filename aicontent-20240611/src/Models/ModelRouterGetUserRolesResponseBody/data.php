<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterGetUserRolesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiContent\V20240611\Models\UserDepartmentDTO;

class data extends Model
{
    /**
     * @var UserDepartmentDTO[]
     */
    public $departmentRoles;
    protected $_name = [
        'departmentRoles' => 'departmentRoles',
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
                    $model->departmentRoles[$n1] = UserDepartmentDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class UserListItemDTO extends Model
{
    /**
     * @var UserDepartmentDTO[]
     */
    public $departments;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $id;

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
        'departments' => 'departments',
        'gmtCreate' => 'gmtCreate',
        'id' => 'id',
        'loginName' => 'loginName',
        'name' => 'name',
        'phone' => 'phone',
    ];

    public function validate()
    {
        if (\is_array($this->departments)) {
            Model::validateArray($this->departments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->departments) {
            if (\is_array($this->departments)) {
                $res['departments'] = [];
                $n1 = 0;
                foreach ($this->departments as $item1) {
                    $res['departments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
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
        if (isset($map['departments'])) {
            if (!empty($map['departments'])) {
                $model->departments = [];
                $n1 = 0;
                foreach ($map['departments'] as $item1) {
                    $model->departments[$n1] = UserDepartmentDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
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

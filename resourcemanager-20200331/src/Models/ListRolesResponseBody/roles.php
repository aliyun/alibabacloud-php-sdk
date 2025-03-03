<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListRolesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListRolesResponseBody\roles\role;

class roles extends Model
{
    /**
     * @var role[]
     */
    public $role;
    protected $_name = [
        'role' => 'Role',
    ];

    public function validate()
    {
        if (\is_array($this->role)) {
            Model::validateArray($this->role);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->role) {
            if (\is_array($this->role)) {
                $res['Role'] = [];
                $n1          = 0;
                foreach ($this->role as $item1) {
                    $res['Role'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Role'])) {
            if (!empty($map['Role'])) {
                $model->role = [];
                $n1          = 0;
                foreach ($map['Role'] as $item1) {
                    $model->role[$n1++] = role::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

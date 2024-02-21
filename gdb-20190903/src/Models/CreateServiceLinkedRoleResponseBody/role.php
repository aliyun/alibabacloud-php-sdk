<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gdb\V20190903\Models\CreateServiceLinkedRoleResponseBody;

use AlibabaCloud\Tea\Model;

class role extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Gdb\V20190903\Models\CreateServiceLinkedRoleResponseBody\role\role[]
     */
    public $role;
    protected $_name = [
        'role' => 'Role',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->role) {
            $res['Role'] = [];
            if (null !== $this->role && \is_array($this->role)) {
                $n = 0;
                foreach ($this->role as $item) {
                    $res['Role'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return role
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Role'])) {
            if (!empty($map['Role'])) {
                $model->role = [];
                $n           = 0;
                foreach ($map['Role'] as $item) {
                    $model->role[$n++] = null !== $item ? \AlibabaCloud\SDK\Gdb\V20190903\Models\CreateServiceLinkedRoleResponseBody\role\role::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

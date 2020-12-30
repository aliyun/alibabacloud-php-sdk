<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetUserResponseBody\user;

use AlibabaCloud\SDK\CCC\V20170705\Models\GetUserResponseBody\user\roles\role;
use AlibabaCloud\Tea\Model;

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
     * @return roles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Role'])) {
            if (!empty($map['Role'])) {
                $model->role = [];
                $n           = 0;
                foreach ($map['Role'] as $item) {
                    $model->role[$n++] = null !== $item ? role::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

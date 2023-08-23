<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListRolesResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListRolesResponseBody\data\roles;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The MaxCompute project-level roles.
     *
     * @var roles[]
     */
    public $roles;
    protected $_name = [
        'roles' => 'roles',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roles) {
            $res['roles'] = [];
            if (null !== $this->roles && \is_array($this->roles)) {
                $n = 0;
                foreach ($this->roles as $item) {
                    $res['roles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['roles'])) {
            if (!empty($map['roles'])) {
                $model->roles = [];
                $n            = 0;
                foreach ($map['roles'] as $item) {
                    $model->roles[$n++] = null !== $item ? roles::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

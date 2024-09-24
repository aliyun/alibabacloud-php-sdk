<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\CheckServiceRoleRequest\roles;
use AlibabaCloud\Tea\Model;

class CheckServiceRoleRequest extends Model
{
    /**
     * @description The service roles that you want to check.
     *
     * This parameter is required.
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
     * @return CheckServiceRoleRequest
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

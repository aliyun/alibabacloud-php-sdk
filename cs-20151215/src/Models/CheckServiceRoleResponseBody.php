<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\CheckServiceRoleResponseBody\roles;

class CheckServiceRoleResponseBody extends Model
{
    /**
     * @var roles[]
     */
    public $roles;
    protected $_name = [
        'roles' => 'roles',
    ];

    public function validate()
    {
        if (\is_array($this->roles)) {
            Model::validateArray($this->roles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->roles) {
            if (\is_array($this->roles)) {
                $res['roles'] = [];
                $n1           = 0;
                foreach ($this->roles as $item1) {
                    $res['roles'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['roles'])) {
            if (!empty($map['roles'])) {
                $model->roles = [];
                $n1           = 0;
                foreach ($map['roles'] as $item1) {
                    $model->roles[$n1++] = roles::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

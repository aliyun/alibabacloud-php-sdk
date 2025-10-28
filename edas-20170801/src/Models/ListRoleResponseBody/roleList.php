<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListRoleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListRoleResponseBody\roleList\roleItem;

class roleList extends Model
{
    /**
     * @var roleItem[]
     */
    public $roleItem;
    protected $_name = [
        'roleItem' => 'RoleItem',
    ];

    public function validate()
    {
        if (\is_array($this->roleItem)) {
            Model::validateArray($this->roleItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->roleItem) {
            if (\is_array($this->roleItem)) {
                $res['RoleItem'] = [];
                $n1 = 0;
                foreach ($this->roleItem as $item1) {
                    $res['RoleItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RoleItem'])) {
            if (!empty($map['RoleItem'])) {
                $model->roleItem = [];
                $n1 = 0;
                foreach ($map['RoleItem'] as $item1) {
                    $model->roleItem[$n1] = roleItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

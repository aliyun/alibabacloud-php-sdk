<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListRoleResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListRoleResponseBody\roleList\roleItem;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleItem) {
            $res['RoleItem'] = [];
            if (null !== $this->roleItem && \is_array($this->roleItem)) {
                $n = 0;
                foreach ($this->roleItem as $item) {
                    $res['RoleItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleItem'])) {
            if (!empty($map['RoleItem'])) {
                $model->roleItem = [];
                $n               = 0;
                foreach ($map['RoleItem'] as $item) {
                    $model->roleItem[$n++] = null !== $item ? roleItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

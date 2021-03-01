<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListRoleResponseBody\roleList;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListRoleResponseBody\roleList\roleItem\actionList;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListRoleResponseBody\roleList\roleItem\role;
use AlibabaCloud\Tea\Model;

class roleItem extends Model
{
    /**
     * @var actionList
     */
    public $actionList;

    /**
     * @var role
     */
    public $role;
    protected $_name = [
        'actionList' => 'ActionList',
        'role'       => 'Role',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionList) {
            $res['ActionList'] = null !== $this->actionList ? $this->actionList->toMap() : null;
        }
        if (null !== $this->role) {
            $res['Role'] = null !== $this->role ? $this->role->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roleItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionList'])) {
            $model->actionList = actionList::fromMap($map['ActionList']);
        }
        if (isset($map['Role'])) {
            $model->role = role::fromMap($map['Role']);
        }

        return $model;
    }
}

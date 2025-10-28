<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListRoleResponseBody\roleList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListRoleResponseBody\roleList\roleItem\actionList;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListRoleResponseBody\roleList\roleItem\role;

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
        'role' => 'Role',
    ];

    public function validate()
    {
        if (null !== $this->actionList) {
            $this->actionList->validate();
        }
        if (null !== $this->role) {
            $this->role->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionList) {
            $res['ActionList'] = null !== $this->actionList ? $this->actionList->toArray($noStream) : $this->actionList;
        }

        if (null !== $this->role) {
            $res['Role'] = null !== $this->role ? $this->role->toArray($noStream) : $this->role;
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
        if (isset($map['ActionList'])) {
            $model->actionList = actionList::fromMap($map['ActionList']);
        }

        if (isset($map['Role'])) {
            $model->role = role::fromMap($map['Role']);
        }

        return $model;
    }
}

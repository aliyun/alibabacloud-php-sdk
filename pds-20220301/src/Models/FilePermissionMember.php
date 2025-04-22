<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class FilePermissionMember extends Model
{
    /**
     * @var string[]
     */
    public $actionList;

    /**
     * @var bool
     */
    public $disinheritSubGroup;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var Identity
     */
    public $identity;

    /**
     * @var string
     */
    public $roleId;
    protected $_name = [
        'actionList' => 'action_list',
        'disinheritSubGroup' => 'disinherit_sub_group',
        'expireTime' => 'expire_time',
        'identity' => 'identity',
        'roleId' => 'role_id',
    ];

    public function validate()
    {
        if (\is_array($this->actionList)) {
            Model::validateArray($this->actionList);
        }
        if (null !== $this->identity) {
            $this->identity->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionList) {
            if (\is_array($this->actionList)) {
                $res['action_list'] = [];
                $n1 = 0;
                foreach ($this->actionList as $item1) {
                    $res['action_list'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->disinheritSubGroup) {
            $res['disinherit_sub_group'] = $this->disinheritSubGroup;
        }

        if (null !== $this->expireTime) {
            $res['expire_time'] = $this->expireTime;
        }

        if (null !== $this->identity) {
            $res['identity'] = null !== $this->identity ? $this->identity->toArray($noStream) : $this->identity;
        }

        if (null !== $this->roleId) {
            $res['role_id'] = $this->roleId;
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
        if (isset($map['action_list'])) {
            if (!empty($map['action_list'])) {
                $model->actionList = [];
                $n1 = 0;
                foreach ($map['action_list'] as $item1) {
                    $model->actionList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['disinherit_sub_group'])) {
            $model->disinheritSubGroup = $map['disinherit_sub_group'];
        }

        if (isset($map['expire_time'])) {
            $model->expireTime = $map['expire_time'];
        }

        if (isset($map['identity'])) {
            $model->identity = Identity::fromMap($map['identity']);
        }

        if (isset($map['role_id'])) {
            $model->roleId = $map['role_id'];
        }

        return $model;
    }
}

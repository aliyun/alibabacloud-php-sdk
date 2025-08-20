<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListMembersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListMembersResponseBody\members\actions;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListMembersResponseBody\members\roles;

class members extends Model
{
    /**
     * @var actions[]
     */
    public $actions;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $memberArn;

    /**
     * @var roles[]
     */
    public $roles;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $userType;

    /**
     * @var bool
     */
    public $visible;
    protected $_name = [
        'actions' => 'actions',
        'createTime' => 'createTime',
        'displayName' => 'displayName',
        'memberArn' => 'memberArn',
        'roles' => 'roles',
        'userName' => 'userName',
        'userType' => 'userType',
        'visible' => 'visible',
    ];

    public function validate()
    {
        if (\is_array($this->actions)) {
            Model::validateArray($this->actions);
        }
        if (\is_array($this->roles)) {
            Model::validateArray($this->roles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actions) {
            if (\is_array($this->actions)) {
                $res['actions'] = [];
                $n1 = 0;
                foreach ($this->actions as $item1) {
                    $res['actions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->memberArn) {
            $res['memberArn'] = $this->memberArn;
        }

        if (null !== $this->roles) {
            if (\is_array($this->roles)) {
                $res['roles'] = [];
                $n1 = 0;
                foreach ($this->roles as $item1) {
                    $res['roles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }

        if (null !== $this->userType) {
            $res['userType'] = $this->userType;
        }

        if (null !== $this->visible) {
            $res['visible'] = $this->visible;
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
        if (isset($map['actions'])) {
            if (!empty($map['actions'])) {
                $model->actions = [];
                $n1 = 0;
                foreach ($map['actions'] as $item1) {
                    $model->actions[$n1] = actions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['memberArn'])) {
            $model->memberArn = $map['memberArn'];
        }

        if (isset($map['roles'])) {
            if (!empty($map['roles'])) {
                $model->roles = [];
                $n1 = 0;
                foreach ($map['roles'] as $item1) {
                    $model->roles[$n1] = roles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        if (isset($map['userType'])) {
            $model->userType = $map['userType'];
        }

        if (isset($map['visible'])) {
            $model->visible = $map['visible'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListApplicationMembersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListApplicationMembersResponseBody\records\roleList;

class records extends Model
{
    /**
     * @var string
     */
    public $avatar;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var string
     */
    public $id;
    /**
     * @var roleList[]
     */
    public $roleList;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'avatar'      => 'avatar',
        'description' => 'description',
        'displayName' => 'displayName',
        'id'          => 'id',
        'roleList'    => 'roleList',
        'type'        => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->roleList)) {
            Model::validateArray($this->roleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avatar) {
            $res['avatar'] = $this->avatar;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->roleList) {
            if (\is_array($this->roleList)) {
                $res['roleList'] = [];
                $n1              = 0;
                foreach ($this->roleList as $item1) {
                    $res['roleList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['avatar'])) {
            $model->avatar = $map['avatar'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['roleList'])) {
            if (!empty($map['roleList'])) {
                $model->roleList = [];
                $n1              = 0;
                foreach ($map['roleList'] as $item1) {
                    $model->roleList[$n1++] = roleList::fromMap($item1);
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

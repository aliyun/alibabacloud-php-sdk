<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListApplicationMembersResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListApplicationMembersResponseBody\records\roleList;
use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @example http://
     *
     * @var string
     */
    public $avatar;

    /**
     * @example 成语描述
     *
     * @var string
     */
    public $description;

    /**
     * @example 成员1
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 1332695887xxxxxx
     *
     * @var string
     */
    public $id;

    /**
     * @var roleList[]
     */
    public $roleList;

    /**
     * @example User
     *
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
    }

    public function toMap()
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
            $res['roleList'] = [];
            if (null !== $this->roleList && \is_array($this->roleList)) {
                $n = 0;
                foreach ($this->roleList as $item) {
                    $res['roleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
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
                $n               = 0;
                foreach ($map['roleList'] as $item) {
                    $model->roleList[$n++] = null !== $item ? roleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

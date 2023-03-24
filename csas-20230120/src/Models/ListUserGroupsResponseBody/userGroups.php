<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListUserGroupsResponseBody;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserGroupsResponseBody\userGroups\attributes;
use AlibabaCloud\Tea\Model;

class userGroups extends Model
{
    /**
     * @var attributes[]
     */
    public $attributes;

    /**
     * @example 2022-10-10 11:39:22
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example user_group_name
     *
     * @var string
     */
    public $name;

    /**
     * @example usergroup-6f1ef2fc56b6****
     *
     * @var string
     */
    public $userGroupId;
    protected $_name = [
        'attributes'  => 'Attributes',
        'createTime'  => 'CreateTime',
        'description' => 'Description',
        'name'        => 'Name',
        'userGroupId' => 'UserGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['Attributes'] = [];
            if (null !== $this->attributes && \is_array($this->attributes)) {
                $n = 0;
                foreach ($this->attributes as $item) {
                    $res['Attributes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attributes'])) {
            if (!empty($map['Attributes'])) {
                $model->attributes = [];
                $n                 = 0;
                foreach ($map['Attributes'] as $item) {
                    $model->attributes[$n++] = null !== $item ? attributes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        return $model;
    }
}

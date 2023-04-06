<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class CreateGroupRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @example false
     *
     * @var bool
     */
    public $isRoot;

    /**
     * @example 2e43ec8427dd45f19431b7504649a1b3
     *
     * @var string
     */
    public $parentGroupId;
    protected $_name = [
        'description'   => 'description',
        'groupName'     => 'group_name',
        'isRoot'        => 'is_root',
        'parentGroupId' => 'parent_group_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->groupName) {
            $res['group_name'] = $this->groupName;
        }
        if (null !== $this->isRoot) {
            $res['is_root'] = $this->isRoot;
        }
        if (null !== $this->parentGroupId) {
            $res['parent_group_id'] = $this->parentGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['group_name'])) {
            $model->groupName = $map['group_name'];
        }
        if (isset($map['is_root'])) {
            $model->isRoot = $map['is_root'];
        }
        if (isset($map['parent_group_id'])) {
            $model->parentGroupId = $map['parent_group_id'];
        }

        return $model;
    }
}

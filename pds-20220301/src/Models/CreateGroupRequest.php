<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class CreateGroupRequest extends Model
{
    /**
     * @description The description of the group. The description can be up to 1,024 characters in length.
     *
     * @example test group description
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the group. The name must be 1 to 128 characters in length.
     *
     * This parameter is required.
     * @example test group
     *
     * @var string
     */
    public $groupName;

    /**
     * @description Specifies whether the group is a root group. A root group cannot be added to any other group. In most cases, a root group is the top-level organization in the organizational structure.
     *
     * @example false
     *
     * @var bool
     */
    public $isRoot;

    /**
     * @description The ID of the parent group to which the group is added. If this parameter is specified, the system automatically adds the group to the specified parent group after the group is created.
     *
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class UpdateGroupRequest extends Model
{
    /**
     * @description The description of the group after modification.
     *
     * @example test group description
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the group that you want to modify.
     *
     * @example 2e43ec8427dd45f19431b7504649a1b4
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the group after modification.
     *
     * @example test group
     *
     * @var string
     */
    public $groupName;
    protected $_name = [
        'description' => 'description',
        'groupId'     => 'group_id',
        'groupName'   => 'group_name',
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
        if (null !== $this->groupId) {
            $res['group_id'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['group_name'] = $this->groupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['group_id'])) {
            $model->groupId = $map['group_id'];
        }
        if (isset($map['group_name'])) {
            $model->groupName = $map['group_name'];
        }

        return $model;
    }
}

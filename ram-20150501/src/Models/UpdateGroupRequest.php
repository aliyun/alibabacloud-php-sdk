<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class UpdateGroupRequest extends Model
{
    /**
     * @description The name of the RAM user group.
     *
     * @example Dev-Team
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The new description of the RAM user group.
     *
     * The comments must be 1 to 128 characters in length.
     * @example NewDev-Team
     *
     * @var string
     */
    public $newComments;

    /**
     * @description The new name of the RAM user group.
     *
     * The name must be 1 to 64 characters in length and can contain letters, digits, periods (.), hyphens (-), and underscores (_).
     * @example NewDev-Team
     *
     * @var string
     */
    public $newGroupName;
    protected $_name = [
        'groupName'    => 'GroupName',
        'newComments'  => 'NewComments',
        'newGroupName' => 'NewGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->newComments) {
            $res['NewComments'] = $this->newComments;
        }
        if (null !== $this->newGroupName) {
            $res['NewGroupName'] = $this->newGroupName;
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
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['NewComments'])) {
            $model->newComments = $map['NewComments'];
        }
        if (isset($map['NewGroupName'])) {
            $model->newGroupName = $map['NewGroupName'];
        }

        return $model;
    }
}

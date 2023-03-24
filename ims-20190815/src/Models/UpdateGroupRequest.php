<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

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
     * @description The new description.
     *
     * The value can be up to 128 characters in length.
     * @var string
     */
    public $newComments;

    /**
     * @description The new display name of the RAM user group.
     *
     * The name can be up to 24 characters in length.
     * @example Test-Team
     *
     * @var string
     */
    public $newDisplayName;

    /**
     * @description The new name of the RAM user group.
     *
     * The name can be up to 64 characters in length and can contain letters, digits, periods (.), underscores (\_), and hyphens (-).
     * @example Test-Team
     *
     * @var string
     */
    public $newGroupName;
    protected $_name = [
        'groupName'      => 'GroupName',
        'newComments'    => 'NewComments',
        'newDisplayName' => 'NewDisplayName',
        'newGroupName'   => 'NewGroupName',
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
        if (null !== $this->newDisplayName) {
            $res['NewDisplayName'] = $this->newDisplayName;
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
        if (isset($map['NewDisplayName'])) {
            $model->newDisplayName = $map['NewDisplayName'];
        }
        if (isset($map['NewGroupName'])) {
            $model->newGroupName = $map['NewGroupName'];
        }

        return $model;
    }
}

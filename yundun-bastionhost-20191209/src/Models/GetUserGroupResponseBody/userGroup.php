<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetUserGroupResponseBody;

use AlibabaCloud\Tea\Model;

class userGroup extends Model
{
    /**
     * @description The description of the user group.
     *
     * @example comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ID of the group.
     *
     * @example 1
     *
     * @var string
     */
    public $userGroupId;

    /**
     * @description The name of the user group.
     *
     * @example UserGroup01
     *
     * @var string
     */
    public $userGroupName;
    protected $_name = [
        'comment'       => 'Comment',
        'userGroupId'   => 'UserGroupId',
        'userGroupName' => 'UserGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }
        if (null !== $this->userGroupName) {
            $res['UserGroupName'] = $this->userGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }
        if (isset($map['UserGroupName'])) {
            $model->userGroupName = $map['UserGroupName'];
        }

        return $model;
    }
}

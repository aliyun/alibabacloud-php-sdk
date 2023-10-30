<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListUserGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class userGroups extends Model
{
    /**
     * @example comment
     *
     * @var string
     */
    public $comment;

    /**
     * @example 5
     *
     * @var int
     */
    public $memberCount;

    /**
     * @example 1
     *
     * @var string
     */
    public $userGroupId;

    /**
     * @example TestGroup01
     *
     * @var string
     */
    public $userGroupName;
    protected $_name = [
        'comment'       => 'Comment',
        'memberCount'   => 'MemberCount',
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
        if (null !== $this->memberCount) {
            $res['MemberCount'] = $this->memberCount;
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
     * @return userGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['MemberCount'])) {
            $model->memberCount = $map['MemberCount'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserGroupResponseBody\data;

use AlibabaCloud\Tea\Model;

class userGroupList extends Model
{
    /**
     * @example 2020-05-12 17:12:37
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example TestUserGroupId
     *
     * @var string
     */
    public $userGroupId;

    /**
     * @example TestUserGroupName
     *
     * @var string
     */
    public $userGroupName;
    protected $_name = [
        'modifiedTime'  => 'ModifiedTime',
        'userGroupId'   => 'UserGroupId',
        'userGroupName' => 'UserGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
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
     * @return userGroupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
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

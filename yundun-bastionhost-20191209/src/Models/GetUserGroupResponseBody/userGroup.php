<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetUserGroupResponseBody;

use AlibabaCloud\Tea\Model;

class userGroup extends Model
{
    /**
     * @var string
     */
    public $userGroupName;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $userGroupId;
    protected $_name = [
        'userGroupName' => 'UserGroupName',
        'comment'       => 'Comment',
        'userGroupId'   => 'UserGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userGroupName) {
            $res['UserGroupName'] = $this->userGroupName;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
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
        if (isset($map['UserGroupName'])) {
            $model->userGroupName = $map['UserGroupName'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        return $model;
    }
}

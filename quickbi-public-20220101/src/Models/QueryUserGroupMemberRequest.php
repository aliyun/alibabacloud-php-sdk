<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryUserGroupMemberRequest extends Model
{
    /**
     * @description Keyword for the username or nickname of the user group member.
     *
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @description User group ID.
     *
     * This parameter is required.
     *
     * @example 2fe4fbd8-588f-489a-b3e1-e92c7af0****
     *
     * @var string
     */
    public $userGroupId;
    protected $_name = [
        'keyword' => 'Keyword',
        'userGroupId' => 'UserGroupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryUserGroupMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        return $model;
    }
}

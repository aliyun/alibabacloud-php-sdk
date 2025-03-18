<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyUserScopeResponseBody;

use AlibabaCloud\Tea\Model;

class userScope extends Model
{
    /**
     * @description The scope of users to whom the control policy applies.
     *   If **All** is returned for this parameter, the control policy applies to all users.
     *
     *   If no value is returned for this parameter, the control policy applies to the assets specified in the return values of UserGroupIds and UserIds.
     *
     * @example All
     *
     * @var string
     */
    public $scopeType;

    /**
     * @description The user groups to which the control policy applies.
     *
     * @var string[]
     */
    public $userGroupIds;

    /**
     * @description The users to whom the control policy applies.
     *
     * @var string[]
     */
    public $userIds;
    protected $_name = [
        'scopeType' => 'ScopeType',
        'userGroupIds' => 'UserGroupIds',
        'userIds' => 'UserIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
        }
        if (null !== $this->userGroupIds) {
            $res['UserGroupIds'] = $this->userGroupIds;
        }
        if (null !== $this->userIds) {
            $res['UserIds'] = $this->userIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userScope
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
        }
        if (isset($map['UserGroupIds'])) {
            if (!empty($map['UserGroupIds'])) {
                $model->userGroupIds = $map['UserGroupIds'];
            }
        }
        if (isset($map['UserIds'])) {
            if (!empty($map['UserIds'])) {
                $model->userIds = $map['UserIds'];
            }
        }

        return $model;
    }
}

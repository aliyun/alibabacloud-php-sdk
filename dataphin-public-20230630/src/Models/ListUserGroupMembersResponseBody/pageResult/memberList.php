<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUserGroupMembersResponseBody\pageResult;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUserGroupMembersResponseBody\pageResult\memberList\creator;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUserGroupMembersResponseBody\pageResult\memberList\userInfo;
use AlibabaCloud\Tea\Model;

class memberList extends Model
{
    /**
     * @var creator
     */
    public $creator;

    /**
     * @example zhangsan
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 2324211
     *
     * @var string
     */
    public $id;

    /**
     * @example 231111
     *
     * @var string
     */
    public $userGroupId;

    /**
     * @var userInfo
     */
    public $userInfo;

    /**
     * @example SECURITY_ADMIN
     *
     * @var string
     */
    public $userRole;
    protected $_name = [
        'creator'     => 'Creator',
        'gmtCreate'   => 'GmtCreate',
        'id'          => 'Id',
        'userGroupId' => 'UserGroupId',
        'userInfo'    => 'UserInfo',
        'userRole'    => 'UserRole',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creator) {
            $res['Creator'] = null !== $this->creator ? $this->creator->toMap() : null;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }
        if (null !== $this->userRole) {
            $res['UserRole'] = $this->userRole;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return memberList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Creator'])) {
            $model->creator = creator::fromMap($map['Creator']);
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }
        if (isset($map['UserRole'])) {
            $model->userRole = $map['UserRole'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUserGroupMembersResponseBody\pageResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUserGroupMembersResponseBody\pageResult\memberList\creator;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUserGroupMembersResponseBody\pageResult\memberList\userInfo;

class memberList extends Model
{
    /**
     * @var creator
     */
    public $creator;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $userGroupId;

    /**
     * @var userInfo
     */
    public $userInfo;

    /**
     * @var string
     */
    public $userRole;
    protected $_name = [
        'creator' => 'Creator',
        'gmtCreate' => 'GmtCreate',
        'id' => 'Id',
        'userGroupId' => 'UserGroupId',
        'userInfo' => 'UserInfo',
        'userRole' => 'UserRole',
    ];

    public function validate()
    {
        if (null !== $this->creator) {
            $this->creator->validate();
        }
        if (null !== $this->userInfo) {
            $this->userInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creator) {
            $res['Creator'] = null !== $this->creator ? $this->creator->toArray($noStream) : $this->creator;
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
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toArray($noStream) : $this->userInfo;
        }

        if (null !== $this->userRole) {
            $res['UserRole'] = $this->userRole;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

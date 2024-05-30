<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectMembersResponseBody\data;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectMembersResponseBody\data\projectMemberList\projectRoleList;
use AlibabaCloud\Tea\Model;

class projectMemberList extends Model
{
    /**
     * @description The nickname of the member.
     *
     * @example zhangsan
     *
     * @var string
     */
    public $nick;

    /**
     * @description The member ID.
     *
     * @example 121
     *
     * @var string
     */
    public $projectMemberId;

    /**
     * @description The name of the member.
     *
     * @example zhangsan
     *
     * @var string
     */
    public $projectMemberName;

    /**
     * @description The type of the member. Valid values:
     *
     *   1: USER_ALIYUN, which indicates that the member is an Alibaba Cloud account.
     *   5: USER_UBACCOUNT, which indicates that the member is a RAM user.
     *   6: USER_STS_ROLE, which indicates that the member is a RAM role.
     *
     * @example 1
     *
     * @var string
     */
    public $projectMemberType;

    /**
     * @description The roles that are assigned to the member.
     *
     * @var projectRoleList[]
     */
    public $projectRoleList;

    /**
     * @description The status of the member. Valid values:
     *
     *   0: NORMAL, which indicates that the member is in a normal state.
     *   1: FORBIDDEN, which indicates that the member is disabled.
     *   2: DELETED, which indicates that the member is deleted.
     *
     * @example 0
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'nick'              => 'Nick',
        'projectMemberId'   => 'ProjectMemberId',
        'projectMemberName' => 'ProjectMemberName',
        'projectMemberType' => 'ProjectMemberType',
        'projectRoleList'   => 'ProjectRoleList',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nick) {
            $res['Nick'] = $this->nick;
        }
        if (null !== $this->projectMemberId) {
            $res['ProjectMemberId'] = $this->projectMemberId;
        }
        if (null !== $this->projectMemberName) {
            $res['ProjectMemberName'] = $this->projectMemberName;
        }
        if (null !== $this->projectMemberType) {
            $res['ProjectMemberType'] = $this->projectMemberType;
        }
        if (null !== $this->projectRoleList) {
            $res['ProjectRoleList'] = [];
            if (null !== $this->projectRoleList && \is_array($this->projectRoleList)) {
                $n = 0;
                foreach ($this->projectRoleList as $item) {
                    $res['ProjectRoleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectMemberList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Nick'])) {
            $model->nick = $map['Nick'];
        }
        if (isset($map['ProjectMemberId'])) {
            $model->projectMemberId = $map['ProjectMemberId'];
        }
        if (isset($map['ProjectMemberName'])) {
            $model->projectMemberName = $map['ProjectMemberName'];
        }
        if (isset($map['ProjectMemberType'])) {
            $model->projectMemberType = $map['ProjectMemberType'];
        }
        if (isset($map['ProjectRoleList'])) {
            if (!empty($map['ProjectRoleList'])) {
                $model->projectRoleList = [];
                $n                      = 0;
                foreach ($map['ProjectRoleList'] as $item) {
                    $model->projectRoleList[$n++] = null !== $item ? projectRoleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

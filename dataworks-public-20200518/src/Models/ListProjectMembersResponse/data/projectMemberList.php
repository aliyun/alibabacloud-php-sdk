<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectMembersResponse\data;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectMembersResponse\data\projectMemberList\projectRoleList;
use AlibabaCloud\Tea\Model;

class projectMemberList extends Model
{
    /**
     * @var string
     */
    public $nick;

    /**
     * @var string
     */
    public $projectMemberId;

    /**
     * @var string
     */
    public $projectMemberName;

    /**
     * @var string
     */
    public $projectMemberType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var projectRoleList[]
     */
    public $projectRoleList;
    protected $_name = [
        'nick'              => 'Nick',
        'projectMemberId'   => 'ProjectMemberId',
        'projectMemberName' => 'ProjectMemberName',
        'projectMemberType' => 'ProjectMemberType',
        'status'            => 'Status',
        'projectRoleList'   => 'ProjectRoleList',
    ];

    public function validate()
    {
        Model::validateRequired('nick', $this->nick, true);
        Model::validateRequired('projectMemberId', $this->projectMemberId, true);
        Model::validateRequired('projectMemberName', $this->projectMemberName, true);
        Model::validateRequired('projectMemberType', $this->projectMemberType, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('projectRoleList', $this->projectRoleList, true);
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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

        return $model;
    }
}

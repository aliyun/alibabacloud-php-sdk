<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectMembersResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectMembersResponseBody\data\projectMemberList\projectRoleList;

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
     * @var projectRoleList[]
     */
    public $projectRoleList;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'nick' => 'Nick',
        'projectMemberId' => 'ProjectMemberId',
        'projectMemberName' => 'ProjectMemberName',
        'projectMemberType' => 'ProjectMemberType',
        'projectRoleList' => 'ProjectRoleList',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->projectRoleList)) {
            Model::validateArray($this->projectRoleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->projectRoleList)) {
                $res['ProjectRoleList'] = [];
                $n1 = 0;
                foreach ($this->projectRoleList as $item1) {
                    $res['ProjectRoleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
                $n1 = 0;
                foreach ($map['ProjectRoleList'] as $item1) {
                    $model->projectRoleList[$n1] = projectRoleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectMembersResponseBody\data\projectMemberList;

use AlibabaCloud\Dara\Model;

class projectRoleList extends Model
{
    /**
     * @var string
     */
    public $projectRoleCode;
    /**
     * @var int
     */
    public $projectRoleId;
    /**
     * @var string
     */
    public $projectRoleName;
    /**
     * @var string
     */
    public $projectRoleType;
    protected $_name = [
        'projectRoleCode' => 'ProjectRoleCode',
        'projectRoleId'   => 'ProjectRoleId',
        'projectRoleName' => 'ProjectRoleName',
        'projectRoleType' => 'ProjectRoleType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectRoleCode) {
            $res['ProjectRoleCode'] = $this->projectRoleCode;
        }

        if (null !== $this->projectRoleId) {
            $res['ProjectRoleId'] = $this->projectRoleId;
        }

        if (null !== $this->projectRoleName) {
            $res['ProjectRoleName'] = $this->projectRoleName;
        }

        if (null !== $this->projectRoleType) {
            $res['ProjectRoleType'] = $this->projectRoleType;
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
        if (isset($map['ProjectRoleCode'])) {
            $model->projectRoleCode = $map['ProjectRoleCode'];
        }

        if (isset($map['ProjectRoleId'])) {
            $model->projectRoleId = $map['ProjectRoleId'];
        }

        if (isset($map['ProjectRoleName'])) {
            $model->projectRoleName = $map['ProjectRoleName'];
        }

        if (isset($map['ProjectRoleType'])) {
            $model->projectRoleType = $map['ProjectRoleType'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectRolesResponseBody;

use AlibabaCloud\Tea\Model;

class projectRoleList extends Model
{
    /**
     * @var int
     */
    public $projectRoleId;

    /**
     * @var string
     */
    public $projectRoleType;

    /**
     * @var string
     */
    public $projectRoleName;

    /**
     * @var string
     */
    public $projectRoleCode;
    protected $_name = [
        'projectRoleId'   => 'ProjectRoleId',
        'projectRoleType' => 'ProjectRoleType',
        'projectRoleName' => 'ProjectRoleName',
        'projectRoleCode' => 'ProjectRoleCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectRoleId) {
            $res['ProjectRoleId'] = $this->projectRoleId;
        }
        if (null !== $this->projectRoleType) {
            $res['ProjectRoleType'] = $this->projectRoleType;
        }
        if (null !== $this->projectRoleName) {
            $res['ProjectRoleName'] = $this->projectRoleName;
        }
        if (null !== $this->projectRoleCode) {
            $res['ProjectRoleCode'] = $this->projectRoleCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectRoleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectRoleId'])) {
            $model->projectRoleId = $map['ProjectRoleId'];
        }
        if (isset($map['ProjectRoleType'])) {
            $model->projectRoleType = $map['ProjectRoleType'];
        }
        if (isset($map['ProjectRoleName'])) {
            $model->projectRoleName = $map['ProjectRoleName'];
        }
        if (isset($map['ProjectRoleCode'])) {
            $model->projectRoleCode = $map['ProjectRoleCode'];
        }

        return $model;
    }
}

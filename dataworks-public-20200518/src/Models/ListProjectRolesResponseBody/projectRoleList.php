<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectRolesResponseBody;

use AlibabaCloud\Tea\Model;

class projectRoleList extends Model
{
    /**
     * @description The code of the role in the DataWorks workspace.
     *
     * @example role_project_guest
     *
     * @var string
     */
    public $projectRoleCode;

    /**
     * @description The ID of the role in the DataWorks workspace.
     *
     * @example 1
     *
     * @var int
     */
    public $projectRoleId;

    /**
     * @description The name of the role in the DataWorks workspace.
     *
     * @example visitor
     *
     * @var string
     */
    public $projectRoleName;

    /**
     * @description The type of the role in the DataWorks workspace.
     *
     * @example 0
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return projectRoleList
     */
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

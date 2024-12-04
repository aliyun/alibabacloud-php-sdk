<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProjectRoleResponseBody;

use AlibabaCloud\Tea\Model;

class projectRole extends Model
{
    /**
     * @description The code of the role in the DataWorks workspace.
     *
     * Valid values:
     *
     *   role_project_admin: workspace administrator
     *   role_project_dev: developer
     *   role_project_dg_admin: data governance administrator
     *   role_project_guest: visitor
     *   role_project_security: security administrator
     *   role_project_deploy: deployer
     *   role_project_owner: workspace owner
     *   role_project_data_analyst: data analyst
     *   role_project_pe: O\\&M engineer
     *   role_project_erd: model designer
     *
     * @example role_project_guest
     *
     * @var string
     */
    public $code;

    /**
     * @description The name of the role in the DataWorks workspace.
     *
     * @var string
     */
    public $name;

    /**
     * @description The DataWorks workspace ID.
     *
     * @example 10002
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The type of the role in the DataWorks workspace.
     *
     * Valid values:
     *
     *   UserCustom: user-defined role
     *   System: system role
     *
     * @example System
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'code'      => 'Code',
        'name'      => 'Name',
        'projectId' => 'ProjectId',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectRole
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class GetProjectRoleRequest extends Model
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
     * This parameter is required.
     * @example role_project_guest
     *
     * @var string
     */
    public $code;

    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to query the ID.
     *
     * This parameter is required.
     * @example 10002
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'code'      => 'Code',
        'projectId' => 'ProjectId',
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
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProjectRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProjectMemberResponseBody\projectMember;

use AlibabaCloud\Tea\Model;

class roles extends Model
{
    /**
     * @description The code of the role. Valid values:
     *
     *   role_project_admin: Workspace Administrator
     *   role_project_dev: Develop
     *   role_project_dg_admin: Data Governance Administrator
     *   role_project_guest: Visitor
     *   role_project_security: Security Administrator
     *   role_project_deploy: Deploy
     *   role_project_owner: Workspace Owner
     *   role_project_data_analyst: Data Analyst
     *   role_project_pe: O\\&M
     *   role_project_erd: Model Designer
     *
     * @example role_project_guest
     *
     * @var string
     */
    public $code;

    /**
     * @description The name of the role.
     *
     * @example Visitors
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the role. Valid values:
     *
     *   UserCustom: custom role
     *   System: built-in role
     *
     * @example System
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'code' => 'Code',
        'name' => 'Name',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roles
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

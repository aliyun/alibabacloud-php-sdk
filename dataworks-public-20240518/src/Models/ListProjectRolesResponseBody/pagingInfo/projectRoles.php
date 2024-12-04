<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListProjectRolesResponseBody\pagingInfo;

use AlibabaCloud\Tea\Model;

class projectRoles extends Model
{
    /**
     * @description The code of the role in the DataWorks workspace.
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
     * @example 21229
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The type of the role in the DataWorks workspace.
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
     * @return projectRoles
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

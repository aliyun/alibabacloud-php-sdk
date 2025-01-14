<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class UpdateProjectRequest extends Model
{
    /**
     * @description The description of the workspace.
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to enable the development environment. Valid values:
     *
     *   true: enables the development environment. In this case, the development environment is isolated from the production environment in the workspace.
     *   false: disables the development environment. In this case, only the production environment is used in the workspace.
     *
     * @example true
     *
     * @var bool
     */
    public $devEnvironmentEnabled;

    /**
     * @description Specifies whether to disable the Develop role. Valid values:
     *
     *   false (default)
     *   true
     *
     * Note: If you disable the Develop role, you cannot assume the Develop role to develop nodes in workflows and edit node code. The Develop role cannot be enabled again after it is disabled.
     * @example true
     *
     * @var bool
     */
    public $devRoleDisabled;

    /**
     * @description The display name of the workspace.
     *
     * @var string
     */
    public $displayName;

    /**
     * @description This parameter is required.
     *
     * @example 123456
     *
     * @var int
     */
    public $id;

    /**
     * @description Specifies whether to enable scheduling of Platform for AI (PAI) tasks. Valid values:
     *
     *   true: enables scheduling of PAI tasks. In this case, you can create a PAI node in a DataWorks workspace and configure scheduling properties for the node to implement periodic scheduling of PAI tasks.
     *   false: disables scheduling of PAI tasks.
     *
     * @example true
     *
     * @var bool
     */
    public $paiTaskEnabled;

    /**
     * @description Specifies whether to disable or enable the workspace. Valid values:
     *
     *   Available: enables the workspace.
     *   Forbidden: disables the workspace.
     *
     * @example Forbidden
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'description'           => 'Description',
        'devEnvironmentEnabled' => 'DevEnvironmentEnabled',
        'devRoleDisabled'       => 'DevRoleDisabled',
        'displayName'           => 'DisplayName',
        'id'                    => 'Id',
        'paiTaskEnabled'        => 'PaiTaskEnabled',
        'status'                => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->devEnvironmentEnabled) {
            $res['DevEnvironmentEnabled'] = $this->devEnvironmentEnabled;
        }
        if (null !== $this->devRoleDisabled) {
            $res['DevRoleDisabled'] = $this->devRoleDisabled;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->paiTaskEnabled) {
            $res['PaiTaskEnabled'] = $this->paiTaskEnabled;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DevEnvironmentEnabled'])) {
            $model->devEnvironmentEnabled = $map['DevEnvironmentEnabled'];
        }
        if (isset($map['DevRoleDisabled'])) {
            $model->devRoleDisabled = $map['DevRoleDisabled'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['PaiTaskEnabled'])) {
            $model->paiTaskEnabled = $map['PaiTaskEnabled'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class SetDataSourceShareRequest extends Model
{
    /**
     * @description The name of the data source to be shared.
     *
     * @example mysql_name
     *
     * @var string
     */
    public $datasourceName;

    /**
     * @description The environment to which the data source belongs. Valid values:
     *
     *   0: development environment
     *   1: production environment
     *
     * @example 1
     *
     * @var string
     */
    public $envType;

    /**
     * @description The ID of the DataWorks workspace to which the data source belongs. You can call the [ListProjects](~~178393~~) operation to query the ID of the workspace.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The DataWorks workspace to which the data source is to be shared. If you set this parameter, all members of the specified DataWorks workspace can view and use the data source. The value must be a JSON array. Example: {"projectId":1000,"permission":"WRITE","sharedName":"PX_DATAHUB1.shared_name"}.
     *
     * Field description:
     *
     *   projectId: the ID of the DataWorks workspace to which the data source is to be shared.
     *   permission: the mode in which the data source is shared. Valid values: READ and WRITE. The value READ indicates that all members of the specified workspace can read data from the data source, but cannot modify the data. The value WRITE indicates that all members of the specified workspace can modify the data in the data source.
     *   sharedName: the name of the data source to be shared.
     *
     * @example [{"projectId":1000,"permission":"WRITE","sharedName":"PX_DATAHUB1.shared_name"}]
     *
     * @var string
     */
    public $projectPermissions;

    /**
     * @description The user to whom the data source is to be shared. If you set this parameter, the specified user can view or use the data source. The value must be a JSON array. Example: {"projectId":10000,"users":\[{"userId":"276184575345452131","permission":"WRITE"},"sharedName":"PX_DATAHUB1.shared_name"}].
     *
     * Field description:
     *
     *   projectId: the ID of the DataWorks workspace. If you set the UserPermissions parameter, the specified user can view or use the data source only in this specified DataWorks workspace.
     *   userId: the ID of the user to whom the data source is to be shared.
     *   permission: the mode in which the data source is shared. Valid values: READ and WRITE. The value READ indicates that the specified user can read data from the data source, but cannot modify the data. The value WRITE indicates that the specified user can modify the data in the data source.
     *   sharedName: the name of the data source to be shared.
     *
     * If the ProjectPermissions and UserPermissions parameters are both left empty, the specified data source is not shared to any DataWorks workspace or user. If neither of the parameters is left empty, both parameters take effect.
     * @example [{"projectId":10000,"users":[{"userId":"276184575345452131","permission":"WRITE"}],"sharedName":"PX_DATAHUB1.shared_name"}]
     *
     * @var string
     */
    public $userPermissions;
    protected $_name = [
        'datasourceName'     => 'DatasourceName',
        'envType'            => 'EnvType',
        'projectId'          => 'ProjectId',
        'projectPermissions' => 'ProjectPermissions',
        'userPermissions'    => 'UserPermissions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasourceName) {
            $res['DatasourceName'] = $this->datasourceName;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectPermissions) {
            $res['ProjectPermissions'] = $this->projectPermissions;
        }
        if (null !== $this->userPermissions) {
            $res['UserPermissions'] = $this->userPermissions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDataSourceShareRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasourceName'])) {
            $model->datasourceName = $map['DatasourceName'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectPermissions'])) {
            $model->projectPermissions = $map['ProjectPermissions'];
        }
        if (isset($map['UserPermissions'])) {
            $model->userPermissions = $map['UserPermissions'];
        }

        return $model;
    }
}

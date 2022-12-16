<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class SetDataSourceShareRequest extends Model
{
    /**
     * @example mysql_name
     *
     * @var string
     */
    public $datasourceName;

    /**
     * @example 1
     *
     * @var string
     */
    public $envType;

    /**
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @example [{"projectId":1000,"permission":"WRITE","sharedName":"PX_DATAHUB1.shared_name"}]
     *
     * @var string
     */
    public $projectPermissions;

    /**
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

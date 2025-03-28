<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class SetDataSourceShareRequest extends Model
{
    /**
     * @var string
     */
    public $datasourceName;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectPermissions;

    /**
     * @var string
     */
    public $userPermissions;
    protected $_name = [
        'datasourceName' => 'DatasourceName',
        'envType' => 'EnvType',
        'projectId' => 'ProjectId',
        'projectPermissions' => 'ProjectPermissions',
        'userPermissions' => 'UserPermissions',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

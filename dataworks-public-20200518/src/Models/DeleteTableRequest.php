<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteTableRequest extends Model
{
    /**
     * @description The globally unique identifier (GUID) of the MaxCompute project. Specify the GUID in the odps.{projectName} format.
     *
     * @example odps.test
     *
     * @var string
     */
    public $appGuid;

    /**
     * @description The environment of the DataWorks workspace. Valid values: 0 and 1. The value 0 indicates the development environment. The value 1 indicates the production environment.
     *
     * @example 1
     *
     * @var int
     */
    public $envType;

    /**
     * @description The ID of the DataWorks workspace.
     *
     * @example 101
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The schema information of the table. You need to enter the schema information of the table if you enable the table schema in MaxCompute.
     *
     * @example default
     *
     * @var string
     */
    public $schema;

    /**
     * @description The name of the MaxCompute table.
     *
     * @example table1
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'appGuid'   => 'AppGuid',
        'envType'   => 'EnvType',
        'projectId' => 'ProjectId',
        'schema'    => 'Schema',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appGuid) {
            $res['AppGuid'] = $this->appGuid;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppGuid'])) {
            $model->appGuid = $map['AppGuid'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}

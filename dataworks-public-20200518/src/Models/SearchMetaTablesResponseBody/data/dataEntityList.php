<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SearchMetaTablesResponseBody\data;

use AlibabaCloud\Tea\Model;

class dataEntityList extends Model
{
    /**
     * @description The ID of the EMR cluster.
     *
     * @example abc
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the metadatabase.
     *
     * @example abc
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The type of the metatable. Valid values:
     *
     *   0: table
     *   1: view
     *
     * @example 0
     *
     * @var int
     */
    public $entityType;

    /**
     * @description The type of the environment. Valid values:
     *
     *   1: production environment
     *   0: development environment
     *
     * @example 1
     *
     * @var int
     */
    public $envType;

    /**
     * @description The ID of the Alibaba Cloud account used by the workspace owner.
     *
     * @example 123
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description The ID of the workspace.
     *
     * @example 323
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The name of the workspace.
     *
     * @example test
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The schema information of the table. This parameter is returned only if you enable the table schema in MaxCompute.
     *
     * @example default
     *
     * @var string
     */
    public $schema;

    /**
     * @description The GUID of the metatable.
     *
     * @example odps.engine_name.test_name
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @description The name of the metatable.
     *
     * @example test_name
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The ID of the tenant.
     *
     * @example 12345
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'databaseName' => 'DatabaseName',
        'entityType'   => 'EntityType',
        'envType'      => 'EnvType',
        'ownerId'      => 'OwnerId',
        'projectId'    => 'ProjectId',
        'projectName'  => 'ProjectName',
        'schema'       => 'Schema',
        'tableGuid'    => 'TableGuid',
        'tableName'    => 'TableName',
        'tenantId'     => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataEntityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}

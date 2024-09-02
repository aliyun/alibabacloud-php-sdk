<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTablesResponseBody\data\tableEntityList;

use AlibabaCloud\Tea\Model;

class entityContent extends Model
{
    /**
     * @example accountId:cn-shanghai:odps:project
     *
     * @var string
     */
    public $dataSourceQualifiedName;

    /**
     * @example e70f92239d491057f6a2563b545bdaf8cc6b537d9dc55ec84c55f7cfefg
     *
     * @var string
     */
    public $dataSourceUniqueId;

    /**
     * @example database
     *
     * @var string
     */
    public $databaseName;

    /**
     * @example rm-uf6rn0123
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example project
     *
     * @var string
     */
    public $projectName;

    /**
     * @example table
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'dataSourceQualifiedName' => 'DataSourceQualifiedName',
        'dataSourceUniqueId'      => 'DataSourceUniqueId',
        'databaseName'            => 'DatabaseName',
        'instanceId'              => 'InstanceId',
        'projectName'             => 'ProjectName',
        'tableName'               => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceQualifiedName) {
            $res['DataSourceQualifiedName'] = $this->dataSourceQualifiedName;
        }
        if (null !== $this->dataSourceUniqueId) {
            $res['DataSourceUniqueId'] = $this->dataSourceUniqueId;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entityContent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceQualifiedName'])) {
            $model->dataSourceQualifiedName = $map['DataSourceQualifiedName'];
        }
        if (isset($map['DataSourceUniqueId'])) {
            $model->dataSourceUniqueId = $map['DataSourceUniqueId'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}

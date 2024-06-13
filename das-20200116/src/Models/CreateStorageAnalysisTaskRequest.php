<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class CreateStorageAnalysisTaskRequest extends Model
{
    /**
     * @description The database name. If you specify a database, the operation analyzes the storage usage of the specified database.
     *
     * @example testdb01
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example rm-2ze1jdv45i7l6****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The node ID. For ApsaraDB for MongoDB instances, you can use this parameter to specify a node for storage analysis. You can call the [DescribeRoleZoneInfo](https://help.aliyun.com/document_detail/123802.html) operation to query the information about nodes of an ApsaraDB for MongoDB instance.
     *
     *   If you set this parameter to a value in the **InsName** format, such as `d-bp1872fa24d5****`, you can call this operation to analyze the hidden node that corresponds to the node ID.
     *   If you set this parameter to a value in the `InsName#RoleId` format, such as `d-bp1872fa24d5****#299****5`, you can call this operation to analyze the specified node.
     *
     * >  If you run a storage analysis task on an ApsaraDB for MongoDB replica set instances and you do not specify this parameter, only the hidden node of the instance is analyzed by default. If you run a storage analysis task on an ApsaraDB for MongoDB sharded cluster instance, we recommend that you set this parameter to specify a node.
     * @example 23302528
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The table name. If you specify a table in the specified database, the operation analyzes the storage usage of the specified table. If you specify a table, you must also specify the database to which the table belongs by using **DbName**.
     *
     * @example test_table
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'dbName'     => 'DbName',
        'instanceId' => 'InstanceId',
        'nodeId'     => 'NodeId',
        'tableName'  => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStorageAnalysisTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}

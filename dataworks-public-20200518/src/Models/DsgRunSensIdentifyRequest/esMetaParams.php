<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgRunSensIdentifyRequest;

use AlibabaCloud\Tea\Model;

class esMetaParams extends Model
{
    /**
     * @example 101010
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example ODPS.ODPS
     *
     * @var string
     */
    public $dbType;

    /**
     * @example hgprecn-cn-9lb37k181024
     *
     * @var int
     */
    public $instanceId;

    /**
     * @example 1666676756691024
     *
     * @var string
     */
    public $projectName;

    /**
     * @example default
     *
     * @var string
     */
    public $schemaName;

    /**
     * @example table1
     *
     * @var string
     */
    public $tableName;

    /**
     * @var string[]
     */
    public $tableNameList;

    /**
     * @example xxx-uat
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'dbType'        => 'DbType',
        'instanceId'    => 'InstanceId',
        'projectName'   => 'ProjectName',
        'schemaName'    => 'SchemaName',
        'tableName'     => 'TableName',
        'tableNameList' => 'TableNameList',
        'user'          => 'User',
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
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tableNameList) {
            $res['TableNameList'] = $this->tableNameList;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return esMetaParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TableNameList'])) {
            if (!empty($map['TableNameList'])) {
                $model->tableNameList = $map['TableNameList'];
            }
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}

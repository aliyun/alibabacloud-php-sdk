<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableTopologyResponseBody\tableTopology;

use AlibabaCloud\Tea\Model;

class tableTopologyInfoList extends Model
{
    /**
     * @description The ID of the physical database.
     *
     * @example 43215
     *
     * @var int
     */
    public $dbId;

    /**
     * @description The name of the database.
     *
     * @example yuyang_test
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The name that is used to search for the database.
     *
     * @example yuyang_test@localhost:3306【yuyang_test_dev】
     *
     * @var string
     */
    public $dbSearchName;

    /**
     * @description The database engine.
     *
     * @example mysql
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The ID of the instance to which the physical database belongs.
     *
     * @example 4325325
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The ID of the resource related to the instance. The resource corresponds with the database instance type returned in the InstanceSource parameter.
     *
     *   **RDS**:The ID of the ApsaraDB RDS instance.
     *   **ECS_OWN**: The ID of the Elastic Compute Service (ECS) instance.
     *   **PUBLIC_OWN**: This parameter is left empty for self-managed database instances that are connected over the Internet.
     *   **VPC_ID**:The ID of the virtual private cloud (VPC).
     *   **GATEWAY**: The ID of the database gateway.
     *
     * @example rm-xxx
     *
     * @var string
     */
    public $instanceResourceId;

    /**
     * @description The type of the database instance. Valid values:
     *
     *   **RDS**: an ApsaraDB RDS instance.
     *   **ECS_OWN**: a self-managed database that is deployed on an ECS instance
     *   **PUBLIC_OWN**: a self-managed database instance that is connected over the Internet.
     *   **VPC_ID**: a self-managed database instance in a VPC that is connected over Express Connect circuits.
     *   **GATEWAY**: a database instance connected by using a database gateway.
     *
     * @example RDS
     *
     * @var string
     */
    public $instanceSource;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of tables.
     *
     * @example 6
     *
     * @var int
     */
    public $tableCount;

    /**
     * @description The expression of the names of logical tables.
     *
     **
     *
     **Description**This parameter is not returned for physical tables.
     *
     * @example test_ch_[0000-0005]
     *
     * @var string
     */
    public $tableNameExpr;

    /**
     * @description The names of tables.
     *
     * > The table names are separated by commas (,).
     * @example test_ch_0000,test_ch_0001,test_ch_0002,test_ch_0003,test_ch_0004,test_ch_0005
     *
     * @var string
     */
    public $tableNameList;
    protected $_name = [
        'dbId'               => 'DbId',
        'dbName'             => 'DbName',
        'dbSearchName'       => 'DbSearchName',
        'dbType'             => 'DbType',
        'instanceId'         => 'InstanceId',
        'instanceResourceId' => 'InstanceResourceId',
        'instanceSource'     => 'InstanceSource',
        'regionId'           => 'RegionId',
        'tableCount'         => 'TableCount',
        'tableNameExpr'      => 'TableNameExpr',
        'tableNameList'      => 'TableNameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->dbSearchName) {
            $res['DbSearchName'] = $this->dbSearchName;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceResourceId) {
            $res['InstanceResourceId'] = $this->instanceResourceId;
        }
        if (null !== $this->instanceSource) {
            $res['InstanceSource'] = $this->instanceSource;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tableCount) {
            $res['TableCount'] = $this->tableCount;
        }
        if (null !== $this->tableNameExpr) {
            $res['TableNameExpr'] = $this->tableNameExpr;
        }
        if (null !== $this->tableNameList) {
            $res['TableNameList'] = $this->tableNameList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableTopologyInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DbSearchName'])) {
            $model->dbSearchName = $map['DbSearchName'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceResourceId'])) {
            $model->instanceResourceId = $map['InstanceResourceId'];
        }
        if (isset($map['InstanceSource'])) {
            $model->instanceSource = $map['InstanceSource'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TableCount'])) {
            $model->tableCount = $map['TableCount'];
        }
        if (isset($map['TableNameExpr'])) {
            $model->tableNameExpr = $map['TableNameExpr'];
        }
        if (isset($map['TableNameList'])) {
            $model->tableNameList = $map['TableNameList'];
        }

        return $model;
    }
}

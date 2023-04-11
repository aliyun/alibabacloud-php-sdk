<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDBTopologyResponseBody\DBTopology;

use AlibabaCloud\Tea\Model;

class DBTopologyInfoList extends Model
{
    /**
     * @description The name of the catalog to which the database belongs.
     *
     * > If the database is a PostgreSQL database, the value of this parameter is the name of the database.
     * @example def
     *
     * @var string
     */
    public $catalogName;

    /**
     * @description The ID of the logical database.
     *
     * @example 423532
     *
     * @var int
     */
    public $dbId;

    /**
     * @description The type of the database. For more information about the valid values of this parameter, see [DbType parameter](~~198106~~).
     *
     * @example polardb
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The type of the environment to which the logical database belongs. Valid values:
     *
     *   **product**: production environment
     *   **dev**: development environment
     *   **pre**: pre-release environment
     *   **test**: test environment
     *   **sit**: SIT environment
     *   **uat**: UAT environment
     *   **pet**: stress testing environment
     *   **stag**: staging environment
     *
     * > For more information, see [Change the environment type of an instance](~~163309~~).
     * @example dev
     *
     * @var string
     */
    public $envType;

    /**
     * @description The ID of the instance in which the logical database resides.
     *
     * @example 4325325
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The ID of the resource related to the instance. The resource corresponds with the database instance type returned in the InstanceSource parameter.
     *
     *   If the value of the InstanceSource parameter is RDS, the ID of an ApsaraDB RDS instance is returned.
     *   If the value of the InstanceSource parameter is ECS_OWN, the ID of a self-managed database that is hosted on an Elastic Compute Service (ECS) instance is returned.
     *   If the value of the InstanceSource parameter is PUBLIC_OWN, an empty string is returned.
     *   If the value of the InstanceSource parameter is VPC_ID, the ID of a self-managed database instance in a virtual private cloud (VPC) that is connected over Express Connect circuits is returned.
     *   If the value of the InstanceSource parameter is GATEWAY, the ID of a database instance connected by using a database gateway is returned.
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
     *   **ECS_OWN**: a self-managed database that is hosted on an ECS instance.
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
     * @description The ID of the region in which the instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the logical database.
     *
     * > If the database is a PostgreSQL database, the value of this parameter is the name of the database schema.
     * @example db_test@rm-xxx:3306
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The name that is used to search for the database.
     *
     * @example db_test
     *
     * @var string
     */
    public $searchName;
    protected $_name = [
        'catalogName'        => 'CatalogName',
        'dbId'               => 'DbId',
        'dbType'             => 'DbType',
        'envType'            => 'EnvType',
        'instanceId'         => 'InstanceId',
        'instanceResourceId' => 'InstanceResourceId',
        'instanceSource'     => 'InstanceSource',
        'regionId'           => 'RegionId',
        'schemaName'         => 'SchemaName',
        'searchName'         => 'SearchName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogName) {
            $res['CatalogName'] = $this->catalogName;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
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
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBTopologyInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogName'])) {
            $model->catalogName = $map['CatalogName'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
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
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }

        return $model;
    }
}

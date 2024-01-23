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
     * @description The ID of the database for which the schema design is executed.
     *
     * @example 423532
     *
     * @var int
     */
    public $dbId;

    /**
     * @description The type of the database engine.
     *
     * @example polardb
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The type of the environment to which the database belongs. Valid values:
     *
     *   product: production environment
     *   dev: development environment
     *   pre: staging environment
     *   test: test environment
     *   sit: SIT environment
     *   uat: user acceptance testing (UAT) environment
     *   pet: stress testing environment
     *   stag: STAG environment
     *
     * @example dev
     *
     * @var string
     */
    public $envType;

    /**
     * @description The ID of the instance. The valid value is returned if you call the ListInstances operation. The instance ID is not the ID of the RDS instance.
     *
     * @example 4325325
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description Instance resource ID.
     *
     * @example rm-xxx
     *
     * @var string
     */
    public $instanceResourceId;

    /**
     * @description The source of the database instance. Valid values:
     *
     *   **PUBLIC_OWN:** a self-managed database instance that is deployed on the Internet
     *   **RDS:** an ApsaraDB RDS instance
     *   **ECS_OWN:** a self-managed database that is deployed on an Elastic Compute Service (ECS) instance
     *   **VPC_IDC:** a self-managed database instance that is deployed in a data center connected over a virtual private cloud (VPC)
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
     * @description The name of the saved search.
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

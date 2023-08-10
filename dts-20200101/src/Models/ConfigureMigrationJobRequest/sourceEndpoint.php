<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureMigrationJobRequest;

use AlibabaCloud\Tea\Model;

class sourceEndpoint extends Model
{
    /**
     * @description The name of the source database or the authentication database.
     *
     * >
     *   You must specify the database name only if the **SourceEndpoint.EngineName** parameter is set to **PostgreSQL** or **MongoDB**.
     *   If the **SourceEndpoint.EngineName** parameter is set to **PostgreSQL**, specify the name of the source database. If the SourceEndpoint.EngineName parameter is set to **MongoDB**, specify the name of the authentication database.
     *
     * @example dtstestdatabase
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The engine type of the source database. Valid values: **MySQL**, **TiDB**, **SQLServer**, **PostgreSQL**, **Oracle**, **MongoDB**, **Redis**, **POLARDB**, and **polardb_pg**.
     *
     * >  You must specify the engine type only if the **DestinationEndpoint.InstanceType** parameter is set to **RDS**, **POLARDB**, **ECS**, **LocalInstance**, or **Express**.
     * @example MySQL
     *
     * @var string
     */
    public $engineName;

    /**
     * @description The endpoint of the source database.
     *
     * >  You must specify the endpoint only if the **SourceEndpoint.InstanceType** parameter is set to **LocalInstance** or **Express**.
     * @example 172.16.88.***
     *
     * @var string
     */
    public $IP;

    /**
     * @description The ID of the instance that hosts the source database.
     *
     * >
     *   You must specify the instance ID only if the **SourceEndpoint.InstanceType** parameter is set to **RDS**, **ECS**, **Express**, **MongoDB**, **POLARDB**, or **PolarDB_o**. For example, if the SourceEndpoint.InstanceType parameter is set to **ECS**, you must specify the ID of the ECS instance.
     *   If the **SourceEndpoint.InstanceType** parameter is set to **Express**, you must specify the ID of the virtual private cloud (VPC).
     *
     * @example rm-bp1i99e8l7913****
     *
     * @var string
     */
    public $instanceID;

    /**
     * @description The instance type of the source database. Valid values:
     *
     *   **RDS**: ApsaraDB RDS instance
     *   **ECS**: self-managed database that is hosted on ECS
     *   **LocalInstance**: self-managed database with a public IP address
     *   **Express**: self-managed database that is connected over Express Connect, VPN Gateway, or Smart Access Gateway
     *   **dg**: self-managed database that is connected over Database Gateway
     *   **cen**: self-managed database that is connected over Cloud Enterprise Network (CEN)
     *   **MongoDB**: ApsaraDB for MongoDB instance
     *   **POLARDB**: PolarDB for MySQL cluster or PolarDB for PostgreSQL cluster
     *   **PolarDB_o**: PolarDB O Edition cluster
     *
     * @example RDS
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The system ID (SID) of the Oracle database.
     *
     * >  You must specify this parameter only if the **SourceEndpoint.EngineName** parameter is set to **Oracle** and the **Oracle** database is deployed in a non-RAC architecture.
     * @example testsid
     *
     * @var string
     */
    public $oracleSID;

    /**
     * @description The ID of the Alibaba Cloud account to which the source instance belongs.
     *
     * >  You must specify this parameter only when you configure data migration across different Alibaba Cloud accounts.
     * @example 140692647406****
     *
     * @var string
     */
    public $ownerID;

    /**
     * @description The password of the source database account.
     *
     * @example Test123456
     *
     * @var string
     */
    public $password;

    /**
     * @description The service port number of the source database.
     *
     * >  You must specify the service port number only if the **SourceEndpoint.InstanceType** parameter is set to **ECS**, **LocalInstance**, or **Express**.
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The region ID of the source database.
     *
     * >  If the **SourceEndpoint.InstanceType** parameter is set to **LocalInstance**, you can enter **cn-hangzhou** or the ID of the region closest to the self-managed database. For more information, see [List of supported regions](~~141033~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The authorized RAM role of the source instance. You must specify the RAM role only if the source instance and the destination instance belong to different Alibaba Cloud accounts. You can use the RAM role to allow the Alibaba Cloud account that owns the destination instance to access the source instance.
     *
     * >  For information about the permissions and authorization methods of the RAM role, see [Configure RAM authorization for cross-account data migration and synchronization](~~48468~~).
     * @example ram-for-dts
     *
     * @var string
     */
    public $role;

    /**
     * @description The database account of the source database.
     *
     * >  The permissions that are required for database accounts vary with the migration scenario. For more information, see [Overview of data migration scenarios](~~26618~~).
     * @example dtstestaccount
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'databaseName' => 'DatabaseName',
        'engineName'   => 'EngineName',
        'IP'           => 'IP',
        'instanceID'   => 'InstanceID',
        'instanceType' => 'InstanceType',
        'oracleSID'    => 'OracleSID',
        'ownerID'      => 'OwnerID',
        'password'     => 'Password',
        'port'         => 'Port',
        'region'       => 'Region',
        'role'         => 'Role',
        'userName'     => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->engineName) {
            $res['EngineName'] = $this->engineName;
        }
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->instanceID) {
            $res['InstanceID'] = $this->instanceID;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->oracleSID) {
            $res['OracleSID'] = $this->oracleSID;
        }
        if (null !== $this->ownerID) {
            $res['OwnerID'] = $this->ownerID;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceEndpoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['EngineName'])) {
            $model->engineName = $map['EngineName'];
        }
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['InstanceID'])) {
            $model->instanceID = $map['InstanceID'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['OracleSID'])) {
            $model->oracleSID = $map['OracleSID'];
        }
        if (isset($map['OwnerID'])) {
            $model->ownerID = $map['OwnerID'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}

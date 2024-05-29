<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureMigrationJobRequest;

use AlibabaCloud\Tea\Model;

class destinationEndpoint extends Model
{
    /**
     * @description The name of the destination database or the authentication database.
     *
     * >
     *   You must specify the database name only if the **DestinationEndpoint.EngineName** parameter is set to **PostgreSQL**, **DRDS**, or **MongoDB**.
     *   If the **DestinationEndpoint.EngineName** parameter is set to **PostgreSQL** or **DRDS**, specify the name of the destination database. If the DestinationEndpoint.EngineName parameter is set to **MongoDB**, specify the name of the authentication database.
     *
     * @example dtstestdatabase
     *
     * @var string
     */
    public $dataBaseName;

    /**
     * @description The engine type of the destination database. Valid values: **MySQL**, **DRDS**, **SQLServer**, **PostgreSQL**, **PPAS**, **MongoDB**, **Redis**, **POLARDB**, and **polardb_pg**.
     *
     * >  You must specify the engine type only if the **DestinationEndpoint.InstanceType** parameter is set to **RDS**, **POLARDB**, **ECS**, **LocalInstance**, or **Express**.
     * @example MySQL
     *
     * @var string
     */
    public $engineName;

    /**
     * @description The endpoint of the destination database.
     *
     * >  You must specify the endpoint only if the **DestinationEndpoint.InstanceType** parameter is set to **LocalInstance** or **Express**.
     * @example 172.16.88.***
     *
     * @var string
     */
    public $IP;

    /**
     * @description The ID of the instance that hosts the destination database.
     *
     * >  You must specify the instance ID only if the **DestinationEndpoint.InstanceType** parameter is set to **RDS**, **ECS**, **MongoDB**, **Redis**, **DRDS**, **PetaData**, **OceanBase**, **POLARDB**, **PolarDB_o**, **AnalyticDB**, or **Greenplum**. For example, if the DestinationEndpoint.InstanceType parameter is set to **ECS**, you must specify the ID of the ECS instance.
     * @example rm-bp1r46452ai50****
     *
     * @var string
     */
    public $instanceID;

    /**
     * @description The instance type of the destination database. Valid values:
     *
     *   **ECS**: self-managed database that is hosted on Elastic Compute Service (ECS)
     *   **LocalInstance**: self-managed database with a public IP address
     *   **RDS**: ApsaraDB RDS instance
     *   **DRDS**: PolarDB-X instance
     *   **MongoDB**: ApsaraDB for MongoDB instance
     *   **Redis**: ApsaraDB for Redis instance
     *   **PetaData**: HybridDB for MySQL instance
     *   **POLARDB**: PolarDB for MySQL cluster or PolarDB for PostgreSQL cluster
     *   **PolarDB_o**: PolarDB O Edition cluster
     *   **AnalyticDB**: AnalyticDB for MySQL cluster V3.0 or V2.0
     *   **Greenplum**: AnalyticDB for PostgreSQL instance
     *
     * This parameter is required.
     * @example RDS
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The SID of the Oracle database.
     *
     * >  You must specify this parameter only if the **DestinationEndpoint.EngineName** parameter is set to **Oracle** and the **Oracle** database is deployed in a non-RAC architecture.
     * @example testsid
     *
     * @var string
     */
    public $oracleSID;

    /**
     * @description The password of the destination database account.
     *
     * @example Test123456
     *
     * @var string
     */
    public $password;

    /**
     * @description The service port number of the destination database.
     *
     * >  You must specify the service port number only if the **DestinationEndpoint.InstanceType** parameter is set to **ECS**, **LocalInstance**, or **Express**.
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The region ID of the destination database.
     *
     * >  If the **DestinationEndpoint.InstanceType** parameter is set to **LocalInstance**, you can enter **cn-hangzhou** or the ID of the region closest to the self-managed database. For more information, see [List of supported regions](https://help.aliyun.com/document_detail/141033.html).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The database account of the destination database.
     *
     * >  The permissions that are required for database accounts vary with the migration scenario. For more information, see [Overview of data migration scenarios](https://help.aliyun.com/document_detail/26618.html).
     * @example dtstestaccount
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'dataBaseName' => 'DataBaseName',
        'engineName'   => 'EngineName',
        'IP'           => 'IP',
        'instanceID'   => 'InstanceID',
        'instanceType' => 'InstanceType',
        'oracleSID'    => 'OracleSID',
        'password'     => 'Password',
        'port'         => 'Port',
        'region'       => 'Region',
        'userName'     => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataBaseName) {
            $res['DataBaseName'] = $this->dataBaseName;
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
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return destinationEndpoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataBaseName'])) {
            $model->dataBaseName = $map['DataBaseName'];
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
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}

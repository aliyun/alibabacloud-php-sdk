<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureMigrationJobRequest;

use AlibabaCloud\Tea\Model;

class destinationEndpoint extends Model
{
    /**
     * @description The region ID of the destination database.
     *
     * >  If the **DestinationEndpoint.InstanceType** parameter is set to **LocalInstance**, you can enter **cn-hangzhou** or the ID of the region closest to the self-managed database. For more information, see [List of supported regions](https://help.aliyun.com/document_detail/141033.html).
     * @example dtstestdatabase
     *
     * @var string
     */
    public $dataBaseName;

    /**
     * @description The authorized RAM role of the source instance. You must specify the RAM role only if the source instance and the destination instance belong to different Alibaba Cloud accounts. You can use the RAM role to allow the Alibaba Cloud account that owns the destination instance to access the source instance.
     *
     * >  For information about the permissions and authorization methods of the RAM role, see [Configure RAM authorization for cross-account data migration and synchronization](https://help.aliyun.com/document_detail/48468.html).
     * @example MySQL
     *
     * @var string
     */
    public $engineName;

    /**
     * @description The ID of the instance that hosts the destination database.
     *
     * >  You must specify the instance ID only if the **DestinationEndpoint.InstanceType** parameter is set to **RDS**, **ECS**, **MongoDB**, **Redis**, **DRDS**, **PetaData**, **OceanBase**, **POLARDB**, **PolarDB_o**, **AnalyticDB**, or **Greenplum**. For example, if the DestinationEndpoint.InstanceType parameter is set to **ECS**, you must specify the ID of the ECS instance.
     * @example 172.16.88.***
     *
     * @var string
     */
    public $IP;

    /**
     * @description The ID of the Alibaba Cloud account to which the source instance belongs.
     *
     * >  You must specify this parameter only when you configure data migration across different Alibaba Cloud accounts.
     * @example rm-bp1r46452ai50****
     *
     * @var string
     */
    public $instanceID;

    /**
     * @description The password of the source database account.
     *
     * This parameter is required.
     * @example RDS
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The reserved parameter of DTS. The value is a JSON string. You can specify this parameter to meet special requirements, for example, whether to automatically start a precheck. For more information, see [MigrationReserved](https://help.aliyun.com/document_detail/176470.html).
     *
     * @example testsid
     *
     * @var string
     */
    public $oracleSID;

    /**
     * @description The service port number of the destination database.
     *
     * >  You must specify the service port number only if the **DestinationEndpoint.InstanceType** parameter is set to **ECS**, **LocalInstance**, or **Express**.
     * @example Test123456
     *
     * @var string
     */
    public $password;

    /**
     * @description The engine type of the destination database. Valid values: **MySQL**, **DRDS**, **SQLServer**, **PostgreSQL**, **PPAS**, **MongoDB**, **Redis**, **POLARDB**, and **polardb_pg**.
     *
     * >  You must specify the engine type only if the **DestinationEndpoint.InstanceType** parameter is set to **RDS**, **POLARDB**, **ECS**, **LocalInstance**, or **Express**.
     * @example 3306
     *
     * @var string
     */
    public $port;

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
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The endpoint of the destination database.
     *
     * >  You must specify the endpoint only if the **DestinationEndpoint.InstanceType** parameter is set to **LocalInstance** or **Express**.
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

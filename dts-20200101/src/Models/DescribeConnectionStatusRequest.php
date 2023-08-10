<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeConnectionStatusRequest extends Model
{
    /**
     * @description You must specify this parameter only if the **SourceEndpointEngineName** parameter is set to **Oracle**. Valid values:
     *
     *   **SID**: non-RAC architecture
     *   **RAC**: Real Application Cluster (RAC) architecture
     *
     * >  This parameter is optional. The data type of this parameter is String.
     * @example SID
     *
     * @var string
     */
    public $destinationEndpointArchitecture;

    /**
     * @description The name of the destination database or the authentication database.
     *
     * >
     *   You must specify this parameter if the **DestinationEndpointEngineName** parameter is set to **PostgreSQL**, **DRDS**, or **MongoDB**. You must also specify this parameter if the **DestinationEndpointInstanceType** parameter is set to **PolarDB_o**.
     *   If the **DestinationEndpointEngineName** parameter is set to **PostgreSQL** or **DRDS**, specify the name of the destination database. If the DestinationEndpointEngineName parameter is set to **MongoDB**, specify the name of the authentication database.
     *   If the **DestinationEndpointInstanceType** parameter is set to **PolarDB_o**, specify the name of the destination database.
     *
     * @example dtstestdata
     *
     * @var string
     */
    public $destinationEndpointDatabaseName;

    /**
     * @description The engine type of the destination database. Valid values: **MySQL**, **DRDS**, **SQLServer**, **PostgreSQL**, **PPAS**, **MongoDB**, and **Redis**.
     *
     * >  You must specify this parameter only if the **DestinationEndpointInstanceType** parameter is set to **RDS**, **DRDS**, **ECS**, **LocalInstance**, or **Express**.
     * @example MySQL
     *
     * @var string
     */
    public $destinationEndpointEngineName;

    /**
     * @description The endpoint of the destination database.
     *
     * >  You must specify this parameter only if the **DestinationEndpointInstanceType** parameter is set to **LocalInstance** or **Express**.
     * @example 172.16.88.***
     *
     * @var string
     */
    public $destinationEndpointIP;

    /**
     * @description The ID of the destination instance.
     *
     * @example testsid
     *
     * @var string
     */
    public $destinationEndpointInstanceID;

    /**
     * @description The instance type of the destination database. Valid values:
     *
     * >
     *   **ECS**: self-managed database that is hosted on Elastic Compute Service (ECS)
     *   **LocalInstance**: self-managed database with a public IP address
     *   **RDS**: ApsaraDB RDS instance
     *   **DRDS**: PolarDB-X instance
     *   **MongoDB**: ApsaraDB for MongoDB instance
     *   **Redis**: ApsaraDB for Redis instance
     *   **PetaData**: HybridDB for MySQL instance
     *   **POLARDB**: PolarDB for MySQL cluster
     *   **PolarDB_o**: PolarDB for Oracle cluster
     *   **AnalyticDB**: AnalyticDB for MySQL cluster V3.0 or V2.0
     *   **Greenplum**: AnalyticDB for PostgreSQL instance
     *
     * @example PolarDB_o
     *
     * @var string
     */
    public $destinationEndpointInstanceType;

    /**
     * @description You must specify this parameter only if the **DestinationEndpointEngineName** parameter is set to **Oracle**. Valid values:
     *
     *   **SID**: non-RAC architecture
     *   **RAC**: RAC architecture
     *
     * >  This parameter is optional. The data type of this parameter is String.
     * @example SID
     *
     * @var string
     */
    public $destinationEndpointOracleSID;

    /**
     * @description The password of the destination database account.
     *
     * @example Test123456
     *
     * @var string
     */
    public $destinationEndpointPassword;

    /**
     * @description The service port number of the source database.
     *
     * >  You must specify this parameter only if the **SourceEndpointInstanceType** parameter is set to **ECS**, **LocalInstance**, or **Express**.
     * @example 3306
     *
     * @var string
     */
    public $destinationEndpointPort;

    /**
     * @description The ID of the region where the destination instance resides. For more information, see [List of supported regions](~~141033~~).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $destinationEndpointRegion;

    /**
     * @description The database account of the destination database.
     *
     * >  The permissions that are required for database accounts vary with the migration or synchronization scenario. For more information, see [Overview of data migration scenarios](~~26618~~) and [Overview of data synchronization scenarios](~~130744~~).
     * @example dtstest
     *
     * @var string
     */
    public $destinationEndpointUserName;

    /**
     * @description The ID of the region where the DTS instance resides. For more information, see [List of supported regions](~~141033~~).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description You must specify this parameter only if the **SourceEndpointEngineName** parameter is set to **Oracle**. Valid values:
     *
     *   **SID**: non-RAC architecture
     *   **RAC**: RAC architecture
     *
     * >  This parameter is optional.
     * @example SID
     *
     * @var string
     */
    public $sourceEndpointArchitecture;

    /**
     * @description The name of the source database or the authentication database.
     *
     * >
     *   You must specify this parameter if the **SourceEndpointEngineName** parameter is set to **PostgreSQL** or **MongoDB**. You must also specify this parameter if the **SourceEndpointInstanceType** parameter is set to **PolarDB_o**.
     *   If the **SourceEndpointEngineName** parameter is set to **PostgreSQL** or **DRDS**, specify the name of the source database. If the SourceEndpointEngineName parameter is set to **MongoDB**, specify the name of the authentication database.
     *   If the **SourceEndpointInstanceType** parameter is set to **PolarDB_o**, specify the name of the source database.
     *
     * @example dtstestdata
     *
     * @var string
     */
    public $sourceEndpointDatabaseName;

    /**
     * @description The engine type of the source database. Valid values: **MySQL**, **TiDB**, **SQLServer**, **PostgreSQL**, **Oracle**, **MongoDB**, and **Redis**.
     *
     * >  Default value: **MySQL**.
     * @example MySQL
     *
     * @var string
     */
    public $sourceEndpointEngineName;

    /**
     * @description The endpoint of the source database.
     *
     * >  You must specify this parameter only if the **SourceEndpointInstanceType** parameter is set to **LocalInstance** or **Express**.
     * @example 172.16.88.***
     *
     * @var string
     */
    public $sourceEndpointIP;

    /**
     * @description The ID of the source instance.
     *
     * @example rm-bp1imrtn6fq7h****
     *
     * @var string
     */
    public $sourceEndpointInstanceID;

    /**
     * @description The type of the source instance. Valid values:
     *
     *   **RDS**: ApsaraDB RDS instance
     *   **LocalInstance**: self-managed database with a public IP address
     *   **ECS**: self-managed database that is hosted on ECS
     *   **Express**: self-managed database that is connected over Express Connect
     *   **dg**: self-managed database that is connected over Database Gateway
     *   **MongoDB**: ApsaraDB for MongoDB instance
     *   **POLARDB**: PolarDB for MySQL cluster
     *   **PolarDB_o**: PolarDB for Oracle cluster
     *
     * @example RDS
     *
     * @var string
     */
    public $sourceEndpointInstanceType;

    /**
     * @description The SID of the Oracle database.
     *
     * >  You must specify this parameter only if the **SourceEndpointEngineName** parameter is set to **Oracle** and the Oracle database is deployed in a non-RAC architecture.
     * @example testsid
     *
     * @var string
     */
    public $sourceEndpointOracleSID;

    /**
     * @description The password of the source database account.
     *
     * @example Test123456
     *
     * @var string
     */
    public $sourceEndpointPassword;

    /**
     * @description The service port number of the source database.
     *
     * >  You must specify this parameter only if the **SourceEndpointInstanceType** parameter is set to **ECS**, **LocalInstance**, or **Express**.
     * @example 3306
     *
     * @var string
     */
    public $sourceEndpointPort;

    /**
     * @description The ID of the region where the source instance resides. For more information, see [List of supported regions](~~141033~~).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $sourceEndpointRegion;

    /**
     * @description The database account of the source database.
     *
     * >  The permissions that are required for database accounts vary with the migration or synchronization scenario. For more information, see [Overview of data migration scenarios](~~26618~~) and [Overview of data synchronization scenarios](~~130744~~).
     * @example dtstest
     *
     * @var string
     */
    public $sourceEndpointUserName;
    protected $_name = [
        'destinationEndpointArchitecture' => 'DestinationEndpointArchitecture',
        'destinationEndpointDatabaseName' => 'DestinationEndpointDatabaseName',
        'destinationEndpointEngineName'   => 'DestinationEndpointEngineName',
        'destinationEndpointIP'           => 'DestinationEndpointIP',
        'destinationEndpointInstanceID'   => 'DestinationEndpointInstanceID',
        'destinationEndpointInstanceType' => 'DestinationEndpointInstanceType',
        'destinationEndpointOracleSID'    => 'DestinationEndpointOracleSID',
        'destinationEndpointPassword'     => 'DestinationEndpointPassword',
        'destinationEndpointPort'         => 'DestinationEndpointPort',
        'destinationEndpointRegion'       => 'DestinationEndpointRegion',
        'destinationEndpointUserName'     => 'DestinationEndpointUserName',
        'regionId'                        => 'RegionId',
        'sourceEndpointArchitecture'      => 'SourceEndpointArchitecture',
        'sourceEndpointDatabaseName'      => 'SourceEndpointDatabaseName',
        'sourceEndpointEngineName'        => 'SourceEndpointEngineName',
        'sourceEndpointIP'                => 'SourceEndpointIP',
        'sourceEndpointInstanceID'        => 'SourceEndpointInstanceID',
        'sourceEndpointInstanceType'      => 'SourceEndpointInstanceType',
        'sourceEndpointOracleSID'         => 'SourceEndpointOracleSID',
        'sourceEndpointPassword'          => 'SourceEndpointPassword',
        'sourceEndpointPort'              => 'SourceEndpointPort',
        'sourceEndpointRegion'            => 'SourceEndpointRegion',
        'sourceEndpointUserName'          => 'SourceEndpointUserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationEndpointArchitecture) {
            $res['DestinationEndpointArchitecture'] = $this->destinationEndpointArchitecture;
        }
        if (null !== $this->destinationEndpointDatabaseName) {
            $res['DestinationEndpointDatabaseName'] = $this->destinationEndpointDatabaseName;
        }
        if (null !== $this->destinationEndpointEngineName) {
            $res['DestinationEndpointEngineName'] = $this->destinationEndpointEngineName;
        }
        if (null !== $this->destinationEndpointIP) {
            $res['DestinationEndpointIP'] = $this->destinationEndpointIP;
        }
        if (null !== $this->destinationEndpointInstanceID) {
            $res['DestinationEndpointInstanceID'] = $this->destinationEndpointInstanceID;
        }
        if (null !== $this->destinationEndpointInstanceType) {
            $res['DestinationEndpointInstanceType'] = $this->destinationEndpointInstanceType;
        }
        if (null !== $this->destinationEndpointOracleSID) {
            $res['DestinationEndpointOracleSID'] = $this->destinationEndpointOracleSID;
        }
        if (null !== $this->destinationEndpointPassword) {
            $res['DestinationEndpointPassword'] = $this->destinationEndpointPassword;
        }
        if (null !== $this->destinationEndpointPort) {
            $res['DestinationEndpointPort'] = $this->destinationEndpointPort;
        }
        if (null !== $this->destinationEndpointRegion) {
            $res['DestinationEndpointRegion'] = $this->destinationEndpointRegion;
        }
        if (null !== $this->destinationEndpointUserName) {
            $res['DestinationEndpointUserName'] = $this->destinationEndpointUserName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sourceEndpointArchitecture) {
            $res['SourceEndpointArchitecture'] = $this->sourceEndpointArchitecture;
        }
        if (null !== $this->sourceEndpointDatabaseName) {
            $res['SourceEndpointDatabaseName'] = $this->sourceEndpointDatabaseName;
        }
        if (null !== $this->sourceEndpointEngineName) {
            $res['SourceEndpointEngineName'] = $this->sourceEndpointEngineName;
        }
        if (null !== $this->sourceEndpointIP) {
            $res['SourceEndpointIP'] = $this->sourceEndpointIP;
        }
        if (null !== $this->sourceEndpointInstanceID) {
            $res['SourceEndpointInstanceID'] = $this->sourceEndpointInstanceID;
        }
        if (null !== $this->sourceEndpointInstanceType) {
            $res['SourceEndpointInstanceType'] = $this->sourceEndpointInstanceType;
        }
        if (null !== $this->sourceEndpointOracleSID) {
            $res['SourceEndpointOracleSID'] = $this->sourceEndpointOracleSID;
        }
        if (null !== $this->sourceEndpointPassword) {
            $res['SourceEndpointPassword'] = $this->sourceEndpointPassword;
        }
        if (null !== $this->sourceEndpointPort) {
            $res['SourceEndpointPort'] = $this->sourceEndpointPort;
        }
        if (null !== $this->sourceEndpointRegion) {
            $res['SourceEndpointRegion'] = $this->sourceEndpointRegion;
        }
        if (null !== $this->sourceEndpointUserName) {
            $res['SourceEndpointUserName'] = $this->sourceEndpointUserName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConnectionStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationEndpointArchitecture'])) {
            $model->destinationEndpointArchitecture = $map['DestinationEndpointArchitecture'];
        }
        if (isset($map['DestinationEndpointDatabaseName'])) {
            $model->destinationEndpointDatabaseName = $map['DestinationEndpointDatabaseName'];
        }
        if (isset($map['DestinationEndpointEngineName'])) {
            $model->destinationEndpointEngineName = $map['DestinationEndpointEngineName'];
        }
        if (isset($map['DestinationEndpointIP'])) {
            $model->destinationEndpointIP = $map['DestinationEndpointIP'];
        }
        if (isset($map['DestinationEndpointInstanceID'])) {
            $model->destinationEndpointInstanceID = $map['DestinationEndpointInstanceID'];
        }
        if (isset($map['DestinationEndpointInstanceType'])) {
            $model->destinationEndpointInstanceType = $map['DestinationEndpointInstanceType'];
        }
        if (isset($map['DestinationEndpointOracleSID'])) {
            $model->destinationEndpointOracleSID = $map['DestinationEndpointOracleSID'];
        }
        if (isset($map['DestinationEndpointPassword'])) {
            $model->destinationEndpointPassword = $map['DestinationEndpointPassword'];
        }
        if (isset($map['DestinationEndpointPort'])) {
            $model->destinationEndpointPort = $map['DestinationEndpointPort'];
        }
        if (isset($map['DestinationEndpointRegion'])) {
            $model->destinationEndpointRegion = $map['DestinationEndpointRegion'];
        }
        if (isset($map['DestinationEndpointUserName'])) {
            $model->destinationEndpointUserName = $map['DestinationEndpointUserName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SourceEndpointArchitecture'])) {
            $model->sourceEndpointArchitecture = $map['SourceEndpointArchitecture'];
        }
        if (isset($map['SourceEndpointDatabaseName'])) {
            $model->sourceEndpointDatabaseName = $map['SourceEndpointDatabaseName'];
        }
        if (isset($map['SourceEndpointEngineName'])) {
            $model->sourceEndpointEngineName = $map['SourceEndpointEngineName'];
        }
        if (isset($map['SourceEndpointIP'])) {
            $model->sourceEndpointIP = $map['SourceEndpointIP'];
        }
        if (isset($map['SourceEndpointInstanceID'])) {
            $model->sourceEndpointInstanceID = $map['SourceEndpointInstanceID'];
        }
        if (isset($map['SourceEndpointInstanceType'])) {
            $model->sourceEndpointInstanceType = $map['SourceEndpointInstanceType'];
        }
        if (isset($map['SourceEndpointOracleSID'])) {
            $model->sourceEndpointOracleSID = $map['SourceEndpointOracleSID'];
        }
        if (isset($map['SourceEndpointPassword'])) {
            $model->sourceEndpointPassword = $map['SourceEndpointPassword'];
        }
        if (isset($map['SourceEndpointPort'])) {
            $model->sourceEndpointPort = $map['SourceEndpointPort'];
        }
        if (isset($map['SourceEndpointRegion'])) {
            $model->sourceEndpointRegion = $map['SourceEndpointRegion'];
        }
        if (isset($map['SourceEndpointUserName'])) {
            $model->sourceEndpointUserName = $map['SourceEndpointUserName'];
        }

        return $model;
    }
}

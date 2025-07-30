<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyDtsJobEndpointRequest extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account (primary account) to which the database instance belongs.
     * >  Passing this parameter indicates that cross-Alibaba Cloud account data synchronization will be performed, and you also need to pass the **RoleName** parameter.
     *
     * @example 150780020300****
     *
     * @var string
     */
    public $aliyunUid;

    /**
     * @description When the database type is **PostgreSQL**, **PolarDB for PostgreSQL**, or **AnalyticDB PostgreSQL**, it represents the database name; when the database type is **MongoDB**, it represents the authentication database name.
     * > This parameter is only available and must be provided when the database type is **PostgreSQL**, **PolarDB for PostgreSQL**, **AnalyticDB PostgreSQL**, or **MongoDB**.
     *
     * @example admin
     *
     * @var string
     */
    public $database;

    /**
     * @description Specifies whether to perform only a precheck. Valid values:
     *
     *   **true**: Yes. After the precheck is passed, the database is not changed.
     *   **false** (default): No. After the precheck is passed, the system changes the original database of the DTS task and runs the task.
     *
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the DTS instance. If this parameter is not provided, **DtsJobId** must be specified.
     *
     * @example dtsaw012y2g15q****
     *
     * @var string
     */
    public $dtsInstanceId;

    /**
     * @description DTS job ID, which can be queried by calling [DescribeDtsJobs](https://help.aliyun.com/document_detail/209702.html).
     * > If this parameter is not provided, **DtsInstanceId** must be filled in.
     *
     * @example m4312mab158****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The database instance to be modified, with values:
     * - **src**: Source database instance. - **dest**: Target database instance.
     *
     * This parameter is required.
     *
     * @example src
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description ID of the database instance.
     *
     * @example rm-bp10k50h8374w****
     *
     * @var string
     */
    public $endpointInstanceId;

    /**
     * @description The type of the database. Valid values:
     *
     *   **rds**: ApsaraDB RDS for MySQL instance, ApsaraDB RDS for SQL Server instance, or ApsaraDB RDS for PostgreSQL instance.
     *   **polardb**: PolarDB for MySQL cluster or PolarDB for PostgreSQL cluster.
     *   **mongodb**: ApsaraDB for MongoDB replica set instance.
     *   **distributed_mongodb**: ApsaraDB for MongoDB sharded cluster instance.
     *   **greenplum**: AnalyticDB for PostgreSQL instance.
     *   **kafka**: ApsaraMQ for Kafka instance.
     *   **ecs**: self-managed database that is hosted on an Elastic Compute Service (ECS) instance. If you set this parameter to ecs, the database must be the supported one.
     *   **express**: database that is connected over Express Connect. If you set this parameter to express, the database must be the supported one.
     *   **other**: database that is connected over Internet. If you set this parameter to other, the database must be the supported one.
     *
     * >
     *
     *   The following types of databases are supported: **MySQL**, **PolarDB for MySQL**, **PostgreSQL**, **PolarDB for PostgreSQL**, **MongoDB**, **SQL Server**, **Kafka**, and **AnalyticDB for PostgreSQL**.
     *
     *   If the original database is an ApsaraDB for MongoDB sharded cluster instance, the new database must have the same number of shards as the original database.
     *   If the database that you want to change is a source **PostgreSQL** database, you must make sure that the latency of the DTS instance is less than 30 seconds and no data is written to the source database during the change. Otherwise, data inconsistency may occur.
     *   The value of this parameter is case-insensitive.
     *
     * This parameter is required.
     *
     * @example rds
     *
     * @var string
     */
    public $endpointInstanceType;

    /**
     * @description The IP of the database instance.
     *
     * @example 172.168.XX.XXX
     *
     * @var string
     */
    public $endpointIp;

    /**
     * @description port of the database instance.
     *
     * @example 3306
     *
     * @var string
     */
    public $endpointPort;

    /**
     * @description The ID of the region in which the database resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $endpointRegionId;

    /**
     * @description Specifies whether to change the password of the database account. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $modifyAccount;

    /**
     * @description The password of the database account.
     *
     * >  This parameter is valid only if **ModifyAccount** is set to **true**.
     *
     * @example DTStest****
     *
     * @var string
     */
    public $password;

    /**
     * @description The ID of the region in which the DTS instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Resource group ID.
     *
     * @example rg-acfmzawhxxc****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Cross Alibaba Cloud account role name. When performing data synchronization across Alibaba Cloud accounts, this parameter must be passed. For the required permissions and authorization methods for this role, please refer to [How to Configure RAM Authorization for Cross-Account Data Migration or Synchronization](https://help.aliyun.com/document_detail/48468.html).
     *
     * @example ram-for-dts
     *
     * @var string
     */
    public $roleName;

    /**
     * @description The account password of the shard of the ApsaraDB for MongoDB sharded cluster instance.
     *
     * >
     *
     *   This parameter is valid and required only if the source database is an ApsaraDB for MongoDB sharded cluster instance.
     *
     *   This parameter is valid only if **ModifyAccount** is set to **true**.
     *
     * @example DTStest****
     *
     * @var string
     */
    public $shardPassword;

    /**
     * @description The account username of the shard of the ApsaraDB for MongoDB sharded cluster instance.
     *
     * >
     *
     *   This parameter is valid and required only if the source database is an ApsaraDB for MongoDB sharded cluster instance.
     *
     *   This parameter is valid only if **ModifyAccount** is set to **true**.
     *
     * @example shard
     *
     * @var string
     */
    public $shardUsername;

    /**
     * @description Synchronization direction, with values:
     * - **Forward** (default): Forward. - **Reverse**: Reverse.
     *
     * @example Forward
     *
     * @var string
     */
    public $synchronizationDirection;

    /**
     * @description The database account.
     *
     * >  This parameter is valid only if **ModifyAccount** is set to **true**.
     *
     * @example dtstest
     *
     * @var string
     */
    public $username;

    /**
     * @var bool
     */
    public $zeroEtlJob;
    protected $_name = [
        'aliyunUid' => 'AliyunUid',
        'database' => 'Database',
        'dryRun' => 'DryRun',
        'dtsInstanceId' => 'DtsInstanceId',
        'dtsJobId' => 'DtsJobId',
        'endpoint' => 'Endpoint',
        'endpointInstanceId' => 'EndpointInstanceId',
        'endpointInstanceType' => 'EndpointInstanceType',
        'endpointIp' => 'EndpointIp',
        'endpointPort' => 'EndpointPort',
        'endpointRegionId' => 'EndpointRegionId',
        'modifyAccount' => 'ModifyAccount',
        'password' => 'Password',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'roleName' => 'RoleName',
        'shardPassword' => 'ShardPassword',
        'shardUsername' => 'ShardUsername',
        'synchronizationDirection' => 'SynchronizationDirection',
        'username' => 'Username',
        'zeroEtlJob' => 'ZeroEtlJob',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->dtsInstanceId) {
            $res['DtsInstanceId'] = $this->dtsInstanceId;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->endpointInstanceId) {
            $res['EndpointInstanceId'] = $this->endpointInstanceId;
        }
        if (null !== $this->endpointInstanceType) {
            $res['EndpointInstanceType'] = $this->endpointInstanceType;
        }
        if (null !== $this->endpointIp) {
            $res['EndpointIp'] = $this->endpointIp;
        }
        if (null !== $this->endpointPort) {
            $res['EndpointPort'] = $this->endpointPort;
        }
        if (null !== $this->endpointRegionId) {
            $res['EndpointRegionId'] = $this->endpointRegionId;
        }
        if (null !== $this->modifyAccount) {
            $res['ModifyAccount'] = $this->modifyAccount;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->shardPassword) {
            $res['ShardPassword'] = $this->shardPassword;
        }
        if (null !== $this->shardUsername) {
            $res['ShardUsername'] = $this->shardUsername;
        }
        if (null !== $this->synchronizationDirection) {
            $res['SynchronizationDirection'] = $this->synchronizationDirection;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->zeroEtlJob) {
            $res['ZeroEtlJob'] = $this->zeroEtlJob;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDtsJobEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['DtsInstanceId'])) {
            $model->dtsInstanceId = $map['DtsInstanceId'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['EndpointInstanceId'])) {
            $model->endpointInstanceId = $map['EndpointInstanceId'];
        }
        if (isset($map['EndpointInstanceType'])) {
            $model->endpointInstanceType = $map['EndpointInstanceType'];
        }
        if (isset($map['EndpointIp'])) {
            $model->endpointIp = $map['EndpointIp'];
        }
        if (isset($map['EndpointPort'])) {
            $model->endpointPort = $map['EndpointPort'];
        }
        if (isset($map['EndpointRegionId'])) {
            $model->endpointRegionId = $map['EndpointRegionId'];
        }
        if (isset($map['ModifyAccount'])) {
            $model->modifyAccount = $map['ModifyAccount'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['ShardPassword'])) {
            $model->shardPassword = $map['ShardPassword'];
        }
        if (isset($map['ShardUsername'])) {
            $model->shardUsername = $map['ShardUsername'];
        }
        if (isset($map['SynchronizationDirection'])) {
            $model->synchronizationDirection = $map['SynchronizationDirection'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['ZeroEtlJob'])) {
            $model->zeroEtlJob = $map['ZeroEtlJob'];
        }

        return $model;
    }
}

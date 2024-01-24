<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsShardingDbsResponseBody\shardingDbs;

use AlibabaCloud\Tea\Model;

class shardingDb extends Model
{
    /**
     * @description The timeout period for a transaction to wait for the release of the data lock.
     *
     * @example 5000
     *
     * @var int
     */
    public $blockingTimeout;

    /**
     * @description The URL that is used to access the Apsara RDS for MySQL instance.
     *
     * @example 100.100.64.100:11569
     *
     * @var string
     */
    public $connectUrl;

    /**
     * @description The properties of the connection string.
     *
     * @example connectTimeout=3000;autoReconnect=true;failOverReadOnly=false;socketTimeout=900000;rewriteBatchedStatements=true;characterEncoding=utf8
     *
     * @var string
     */
    public $connectionProperties;

    /**
     * @description The ID of the Apsara RDS for MySQL instance that is used as the storage of the database shard.
     *
     * @example rm-bp1hjzn0yv5j2****
     *
     * @var string
     */
    public $dbInstanceId;

    /**
     * @description The status of the database.
     *
     * @example running
     *
     * @var string
     */
    public $dbStatus;

    /**
     * @description The engine of the database.
     *
     * @example mysql
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The name of group on which the database shard is stored.
     *
     * @example TEMP1_1568171495522SABE_KUP4_0000
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The timeout period of an idle connection.
     *
     * @example 30
     *
     * @var int
     */
    public $idleTimeOut;

    /**
     * @description The maximum size of the connection pool.
     *
     * @example 60
     *
     * @var int
     */
    public $maxPoolSize;

    /**
     * @description The minimum size of the connection pool.
     *
     * @example 5
     *
     * @var int
     */
    public $minPoolSize;

    /**
     * @description The size of cache for the returned results.
     *
     * @example 0
     *
     * @var int
     */
    public $preparedStatementCacheSize;

    /**
     * @description The name of the database shard.
     *
     * @example temp1_zhk1_0000
     *
     * @var string
     */
    public $shardingDbName;

    /**
     * @description The username that is used to connect to the ApsaraDB RDS for MySQL instance.
     *
     * @example pg284mi8
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'blockingTimeout'            => 'BlockingTimeout',
        'connectUrl'                 => 'ConnectUrl',
        'connectionProperties'       => 'ConnectionProperties',
        'dbInstanceId'               => 'DbInstanceId',
        'dbStatus'                   => 'DbStatus',
        'dbType'                     => 'DbType',
        'groupName'                  => 'GroupName',
        'idleTimeOut'                => 'IdleTimeOut',
        'maxPoolSize'                => 'MaxPoolSize',
        'minPoolSize'                => 'MinPoolSize',
        'preparedStatementCacheSize' => 'PreparedStatementCacheSize',
        'shardingDbName'             => 'ShardingDbName',
        'userName'                   => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockingTimeout) {
            $res['BlockingTimeout'] = $this->blockingTimeout;
        }
        if (null !== $this->connectUrl) {
            $res['ConnectUrl'] = $this->connectUrl;
        }
        if (null !== $this->connectionProperties) {
            $res['ConnectionProperties'] = $this->connectionProperties;
        }
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }
        if (null !== $this->dbStatus) {
            $res['DbStatus'] = $this->dbStatus;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->idleTimeOut) {
            $res['IdleTimeOut'] = $this->idleTimeOut;
        }
        if (null !== $this->maxPoolSize) {
            $res['MaxPoolSize'] = $this->maxPoolSize;
        }
        if (null !== $this->minPoolSize) {
            $res['MinPoolSize'] = $this->minPoolSize;
        }
        if (null !== $this->preparedStatementCacheSize) {
            $res['PreparedStatementCacheSize'] = $this->preparedStatementCacheSize;
        }
        if (null !== $this->shardingDbName) {
            $res['ShardingDbName'] = $this->shardingDbName;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return shardingDb
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockingTimeout'])) {
            $model->blockingTimeout = $map['BlockingTimeout'];
        }
        if (isset($map['ConnectUrl'])) {
            $model->connectUrl = $map['ConnectUrl'];
        }
        if (isset($map['ConnectionProperties'])) {
            $model->connectionProperties = $map['ConnectionProperties'];
        }
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['DbStatus'])) {
            $model->dbStatus = $map['DbStatus'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['IdleTimeOut'])) {
            $model->idleTimeOut = $map['IdleTimeOut'];
        }
        if (isset($map['MaxPoolSize'])) {
            $model->maxPoolSize = $map['MaxPoolSize'];
        }
        if (isset($map['MinPoolSize'])) {
            $model->minPoolSize = $map['MinPoolSize'];
        }
        if (isset($map['PreparedStatementCacheSize'])) {
            $model->preparedStatementCacheSize = $map['PreparedStatementCacheSize'];
        }
        if (isset($map['ShardingDbName'])) {
            $model->shardingDbName = $map['ShardingDbName'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsShardingDbsResponseBody\shardingDbs;

use AlibabaCloud\Tea\Model;

class shardingDb extends Model
{
    /**
     * @var int
     */
    public $blockingTimeout;

    /**
     * @var string
     */
    public $connectUrl;

    /**
     * @var string
     */
    public $connectionProperties;

    /**
     * @var string
     */
    public $dbInstanceId;

    /**
     * @var string
     */
    public $dbStatus;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $idleTimeOut;

    /**
     * @var int
     */
    public $maxPoolSize;

    /**
     * @var int
     */
    public $minPoolSize;

    /**
     * @var int
     */
    public $preparedStatementCacheSize;

    /**
     * @var string
     */
    public $shardingDbName;

    /**
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

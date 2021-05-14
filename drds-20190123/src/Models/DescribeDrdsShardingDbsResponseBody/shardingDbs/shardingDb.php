<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsShardingDbsResponseBody\shardingDbs;

use AlibabaCloud\Tea\Model;

class shardingDb extends Model
{
    /**
     * @var int
     */
    public $minPoolSize;

    /**
     * @var int
     */
    public $maxPoolSize;

    /**
     * @var string
     */
    public $dbInstanceId;

    /**
     * @var string
     */
    public $connectUrl;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var int
     */
    public $idleTimeOut;

    /**
     * @var string
     */
    public $shardingDbName;

    /**
     * @var int
     */
    public $blockingTimeout;

    /**
     * @var int
     */
    public $preparedStatementCacheSize;

    /**
     * @var string
     */
    public $connectionProperties;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $dbStatus;
    protected $_name = [
        'minPoolSize'                => 'MinPoolSize',
        'maxPoolSize'                => 'MaxPoolSize',
        'dbInstanceId'               => 'DbInstanceId',
        'connectUrl'                 => 'ConnectUrl',
        'groupName'                  => 'GroupName',
        'dbType'                     => 'DbType',
        'idleTimeOut'                => 'IdleTimeOut',
        'shardingDbName'             => 'ShardingDbName',
        'blockingTimeout'            => 'BlockingTimeout',
        'preparedStatementCacheSize' => 'PreparedStatementCacheSize',
        'connectionProperties'       => 'ConnectionProperties',
        'userName'                   => 'UserName',
        'dbStatus'                   => 'DbStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->minPoolSize) {
            $res['MinPoolSize'] = $this->minPoolSize;
        }
        if (null !== $this->maxPoolSize) {
            $res['MaxPoolSize'] = $this->maxPoolSize;
        }
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }
        if (null !== $this->connectUrl) {
            $res['ConnectUrl'] = $this->connectUrl;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->idleTimeOut) {
            $res['IdleTimeOut'] = $this->idleTimeOut;
        }
        if (null !== $this->shardingDbName) {
            $res['ShardingDbName'] = $this->shardingDbName;
        }
        if (null !== $this->blockingTimeout) {
            $res['BlockingTimeout'] = $this->blockingTimeout;
        }
        if (null !== $this->preparedStatementCacheSize) {
            $res['PreparedStatementCacheSize'] = $this->preparedStatementCacheSize;
        }
        if (null !== $this->connectionProperties) {
            $res['ConnectionProperties'] = $this->connectionProperties;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->dbStatus) {
            $res['DbStatus'] = $this->dbStatus;
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
        if (isset($map['MinPoolSize'])) {
            $model->minPoolSize = $map['MinPoolSize'];
        }
        if (isset($map['MaxPoolSize'])) {
            $model->maxPoolSize = $map['MaxPoolSize'];
        }
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['ConnectUrl'])) {
            $model->connectUrl = $map['ConnectUrl'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['IdleTimeOut'])) {
            $model->idleTimeOut = $map['IdleTimeOut'];
        }
        if (isset($map['ShardingDbName'])) {
            $model->shardingDbName = $map['ShardingDbName'];
        }
        if (isset($map['BlockingTimeout'])) {
            $model->blockingTimeout = $map['BlockingTimeout'];
        }
        if (isset($map['PreparedStatementCacheSize'])) {
            $model->preparedStatementCacheSize = $map['PreparedStatementCacheSize'];
        }
        if (isset($map['ConnectionProperties'])) {
            $model->connectionProperties = $map['ConnectionProperties'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['DbStatus'])) {
            $model->dbStatus = $map['DbStatus'];
        }

        return $model;
    }
}

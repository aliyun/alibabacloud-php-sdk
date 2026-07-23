<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class SourceJDBCParameters extends Model
{
    /**
     * @var int
     */
    public $batchSize;

    /**
     * @var string
     */
    public $customQuery;

    /**
     * @var string
     */
    public $incrementingColumn;

    /**
     * @var string
     */
    public $jdbcUrl;

    /**
     * @var string
     */
    public $network;

    /**
     * @var string
     */
    public $password;

    /**
     * @var int
     */
    public $pollingInterval;

    /**
     * @var string
     */
    public $queryMode;

    /**
     * @var int
     */
    public $queryTimeout;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $timestampColumn;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $vSwitchIds;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'batchSize' => 'BatchSize',
        'customQuery' => 'CustomQuery',
        'incrementingColumn' => 'IncrementingColumn',
        'jdbcUrl' => 'JdbcUrl',
        'network' => 'Network',
        'password' => 'Password',
        'pollingInterval' => 'PollingInterval',
        'queryMode' => 'QueryMode',
        'queryTimeout' => 'QueryTimeout',
        'securityGroupId' => 'SecurityGroupId',
        'tableName' => 'TableName',
        'timestampColumn' => 'TimestampColumn',
        'username' => 'Username',
        'vSwitchIds' => 'VSwitchIds',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchSize) {
            $res['BatchSize'] = $this->batchSize;
        }

        if (null !== $this->customQuery) {
            $res['CustomQuery'] = $this->customQuery;
        }

        if (null !== $this->incrementingColumn) {
            $res['IncrementingColumn'] = $this->incrementingColumn;
        }

        if (null !== $this->jdbcUrl) {
            $res['JdbcUrl'] = $this->jdbcUrl;
        }

        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->pollingInterval) {
            $res['PollingInterval'] = $this->pollingInterval;
        }

        if (null !== $this->queryMode) {
            $res['QueryMode'] = $this->queryMode;
        }

        if (null !== $this->queryTimeout) {
            $res['QueryTimeout'] = $this->queryTimeout;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->timestampColumn) {
            $res['TimestampColumn'] = $this->timestampColumn;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchSize'])) {
            $model->batchSize = $map['BatchSize'];
        }

        if (isset($map['CustomQuery'])) {
            $model->customQuery = $map['CustomQuery'];
        }

        if (isset($map['IncrementingColumn'])) {
            $model->incrementingColumn = $map['IncrementingColumn'];
        }

        if (isset($map['JdbcUrl'])) {
            $model->jdbcUrl = $map['JdbcUrl'];
        }

        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['PollingInterval'])) {
            $model->pollingInterval = $map['PollingInterval'];
        }

        if (isset($map['QueryMode'])) {
            $model->queryMode = $map['QueryMode'];
        }

        if (isset($map['QueryTimeout'])) {
            $model->queryTimeout = $map['QueryTimeout'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['TimestampColumn'])) {
            $model->timestampColumn = $map['TimestampColumn'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = $map['VSwitchIds'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}

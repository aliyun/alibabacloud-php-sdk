<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceReplicationResponseBody;

use AlibabaCloud\Dara\Model;

class slaveStatusList extends Model
{
    /**
     * @var string
     */
    public $channelName;

    /**
     * @var string
     */
    public $executedGtidSet;

    /**
     * @var int
     */
    public $lastErrno;

    /**
     * @var int
     */
    public $lastIoErrno;

    /**
     * @var string
     */
    public $lastIoError;

    /**
     * @var int
     */
    public $lastSqlErrno;

    /**
     * @var string
     */
    public $lastSqlError;

    /**
     * @var string
     */
    public $masterHost;

    /**
     * @var string
     */
    public $masterUser;

    /**
     * @var string
     */
    public $masterUuid;

    /**
     * @var string
     */
    public $replicateDoDb;

    /**
     * @var string
     */
    public $replicateDoTable;

    /**
     * @var string
     */
    public $replicateIgnoreDb;

    /**
     * @var string
     */
    public $replicateIgnoreTable;

    /**
     * @var string
     */
    public $replicateWildDoTable;

    /**
     * @var string
     */
    public $replicateWildIgnoreTable;

    /**
     * @var int
     */
    public $secondsBehindMaster;

    /**
     * @var string
     */
    public $slaveIoRunning;

    /**
     * @var string
     */
    public $slaveIoState;

    /**
     * @var string
     */
    public $slaveSqlRunning;

    /**
     * @var string
     */
    public $slaveSqlRunningState;
    protected $_name = [
        'channelName' => 'ChannelName',
        'executedGtidSet' => 'ExecutedGtidSet',
        'lastErrno' => 'LastErrno',
        'lastIoErrno' => 'LastIoErrno',
        'lastIoError' => 'LastIoError',
        'lastSqlErrno' => 'LastSqlErrno',
        'lastSqlError' => 'LastSqlError',
        'masterHost' => 'MasterHost',
        'masterUser' => 'MasterUser',
        'masterUuid' => 'MasterUuid',
        'replicateDoDb' => 'ReplicateDoDb',
        'replicateDoTable' => 'ReplicateDoTable',
        'replicateIgnoreDb' => 'ReplicateIgnoreDb',
        'replicateIgnoreTable' => 'ReplicateIgnoreTable',
        'replicateWildDoTable' => 'ReplicateWildDoTable',
        'replicateWildIgnoreTable' => 'ReplicateWildIgnoreTable',
        'secondsBehindMaster' => 'SecondsBehindMaster',
        'slaveIoRunning' => 'SlaveIoRunning',
        'slaveIoState' => 'SlaveIoState',
        'slaveSqlRunning' => 'SlaveSqlRunning',
        'slaveSqlRunningState' => 'SlaveSqlRunningState',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }

        if (null !== $this->executedGtidSet) {
            $res['ExecutedGtidSet'] = $this->executedGtidSet;
        }

        if (null !== $this->lastErrno) {
            $res['LastErrno'] = $this->lastErrno;
        }

        if (null !== $this->lastIoErrno) {
            $res['LastIoErrno'] = $this->lastIoErrno;
        }

        if (null !== $this->lastIoError) {
            $res['LastIoError'] = $this->lastIoError;
        }

        if (null !== $this->lastSqlErrno) {
            $res['LastSqlErrno'] = $this->lastSqlErrno;
        }

        if (null !== $this->lastSqlError) {
            $res['LastSqlError'] = $this->lastSqlError;
        }

        if (null !== $this->masterHost) {
            $res['MasterHost'] = $this->masterHost;
        }

        if (null !== $this->masterUser) {
            $res['MasterUser'] = $this->masterUser;
        }

        if (null !== $this->masterUuid) {
            $res['MasterUuid'] = $this->masterUuid;
        }

        if (null !== $this->replicateDoDb) {
            $res['ReplicateDoDb'] = $this->replicateDoDb;
        }

        if (null !== $this->replicateDoTable) {
            $res['ReplicateDoTable'] = $this->replicateDoTable;
        }

        if (null !== $this->replicateIgnoreDb) {
            $res['ReplicateIgnoreDb'] = $this->replicateIgnoreDb;
        }

        if (null !== $this->replicateIgnoreTable) {
            $res['ReplicateIgnoreTable'] = $this->replicateIgnoreTable;
        }

        if (null !== $this->replicateWildDoTable) {
            $res['ReplicateWildDoTable'] = $this->replicateWildDoTable;
        }

        if (null !== $this->replicateWildIgnoreTable) {
            $res['ReplicateWildIgnoreTable'] = $this->replicateWildIgnoreTable;
        }

        if (null !== $this->secondsBehindMaster) {
            $res['SecondsBehindMaster'] = $this->secondsBehindMaster;
        }

        if (null !== $this->slaveIoRunning) {
            $res['SlaveIoRunning'] = $this->slaveIoRunning;
        }

        if (null !== $this->slaveIoState) {
            $res['SlaveIoState'] = $this->slaveIoState;
        }

        if (null !== $this->slaveSqlRunning) {
            $res['SlaveSqlRunning'] = $this->slaveSqlRunning;
        }

        if (null !== $this->slaveSqlRunningState) {
            $res['SlaveSqlRunningState'] = $this->slaveSqlRunningState;
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
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }

        if (isset($map['ExecutedGtidSet'])) {
            $model->executedGtidSet = $map['ExecutedGtidSet'];
        }

        if (isset($map['LastErrno'])) {
            $model->lastErrno = $map['LastErrno'];
        }

        if (isset($map['LastIoErrno'])) {
            $model->lastIoErrno = $map['LastIoErrno'];
        }

        if (isset($map['LastIoError'])) {
            $model->lastIoError = $map['LastIoError'];
        }

        if (isset($map['LastSqlErrno'])) {
            $model->lastSqlErrno = $map['LastSqlErrno'];
        }

        if (isset($map['LastSqlError'])) {
            $model->lastSqlError = $map['LastSqlError'];
        }

        if (isset($map['MasterHost'])) {
            $model->masterHost = $map['MasterHost'];
        }

        if (isset($map['MasterUser'])) {
            $model->masterUser = $map['MasterUser'];
        }

        if (isset($map['MasterUuid'])) {
            $model->masterUuid = $map['MasterUuid'];
        }

        if (isset($map['ReplicateDoDb'])) {
            $model->replicateDoDb = $map['ReplicateDoDb'];
        }

        if (isset($map['ReplicateDoTable'])) {
            $model->replicateDoTable = $map['ReplicateDoTable'];
        }

        if (isset($map['ReplicateIgnoreDb'])) {
            $model->replicateIgnoreDb = $map['ReplicateIgnoreDb'];
        }

        if (isset($map['ReplicateIgnoreTable'])) {
            $model->replicateIgnoreTable = $map['ReplicateIgnoreTable'];
        }

        if (isset($map['ReplicateWildDoTable'])) {
            $model->replicateWildDoTable = $map['ReplicateWildDoTable'];
        }

        if (isset($map['ReplicateWildIgnoreTable'])) {
            $model->replicateWildIgnoreTable = $map['ReplicateWildIgnoreTable'];
        }

        if (isset($map['SecondsBehindMaster'])) {
            $model->secondsBehindMaster = $map['SecondsBehindMaster'];
        }

        if (isset($map['SlaveIoRunning'])) {
            $model->slaveIoRunning = $map['SlaveIoRunning'];
        }

        if (isset($map['SlaveIoState'])) {
            $model->slaveIoState = $map['SlaveIoState'];
        }

        if (isset($map['SlaveSqlRunning'])) {
            $model->slaveSqlRunning = $map['SlaveSqlRunning'];
        }

        if (isset($map['SlaveSqlRunningState'])) {
            $model->slaveSqlRunningState = $map['SlaveSqlRunningState'];
        }

        return $model;
    }
}

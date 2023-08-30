<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeSlowLogRecordsResponseBody\items;

use AlibabaCloud\Tea\Model;

class logRecords extends Model
{
    /**
     * @description The ID of the account.
     *
     * @example 0
     *
     * @var string
     */
    public $account;

    /**
     * @description The username of the account.
     *
     * @example demo
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The slow query statement.
     *
     * @example KEYS *
     *
     * @var string
     */
    public $command;

    /**
     * @description The name of the database.
     *
     * @example -1
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The name of the database, which serves the same purpose as the **DBName** parameter. We recommend that you use the value of the **DBName** parameter.
     *
     * @example -1
     *
     * @var string
     */
    public $dataBaseName;

    /**
     * @description The amount of time consumed to execute the slow query statement. Unit: microseconds.
     *
     * @example 248
     *
     * @var int
     */
    public $elapsedTime;

    /**
     * @description The start time when the slow query statement was executed. The time is displayed in the YYYY-MM-DDTHH:mm:ssZ format.
     *
     * @example 2019-03-20T09:18:41Z
     *
     * @var string
     */
    public $executeTime;

    /**
     * @description The IP address of the client.
     *
     * @example 172.16.88.***
     *
     * @var string
     */
    public $IPAddress;

    /**
     * @description The node ID.
     *
     * @example r-bp1zxszhcgatnx****-db-0
     *
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'account'      => 'Account',
        'accountName'  => 'AccountName',
        'command'      => 'Command',
        'DBName'       => 'DBName',
        'dataBaseName' => 'DataBaseName',
        'elapsedTime'  => 'ElapsedTime',
        'executeTime'  => 'ExecuteTime',
        'IPAddress'    => 'IPAddress',
        'nodeId'       => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->dataBaseName) {
            $res['DataBaseName'] = $this->dataBaseName;
        }
        if (null !== $this->elapsedTime) {
            $res['ElapsedTime'] = $this->elapsedTime;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['DataBaseName'])) {
            $model->dataBaseName = $map['DataBaseName'];
        }
        if (isset($map['ElapsedTime'])) {
            $model->elapsedTime = $map['ElapsedTime'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}

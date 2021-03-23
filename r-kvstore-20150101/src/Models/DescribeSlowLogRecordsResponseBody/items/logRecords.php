<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeSlowLogRecordsResponseBody\items;

use AlibabaCloud\Tea\Model;

class logRecords extends Model
{
    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $IPAddress;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $dataBaseName;

    /**
     * @var string
     */
    public $command;

    /**
     * @var int
     */
    public $elapsedTime;

    /**
     * @var string
     */
    public $executeTime;

    /**
     * @var string
     */
    public $account;

    /**
     * @var string
     */
    public $accountName;
    protected $_name = [
        'nodeId'       => 'NodeId',
        'IPAddress'    => 'IPAddress',
        'DBName'       => 'DBName',
        'dataBaseName' => 'DataBaseName',
        'command'      => 'Command',
        'elapsedTime'  => 'ElapsedTime',
        'executeTime'  => 'ExecuteTime',
        'account'      => 'Account',
        'accountName'  => 'AccountName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->dataBaseName) {
            $res['DataBaseName'] = $this->dataBaseName;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->elapsedTime) {
            $res['ElapsedTime'] = $this->elapsedTime;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
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
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['DataBaseName'])) {
            $model->dataBaseName = $map['DataBaseName'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['ElapsedTime'])) {
            $model->elapsedTime = $map['ElapsedTime'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        return $model;
    }
}

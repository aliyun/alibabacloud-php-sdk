<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAuditRecordsResponseBody\items;

use AlibabaCloud\Tea\Model;

class SQL extends Model
{
    /**
     * @description The username of the account.
     *
     * @example demo
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The database name.
     *
     * @example demo
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The time when the command was run.
     *
     * @example 2019-03-25T03:22:08Z
     *
     * @var string
     */
    public $executeTime;

    /**
     * @description The IP address of the client.
     *
     * @example 127.0.0.1
     *
     * @var string
     */
    public $hostAddress;

    /**
     * @description The IP address of the instance.
     *
     * @example 192.16.100.***
     *
     * @var string
     */
    public $IPAddress;

    /**
     * @description The ID of the node.
     *
     * > A specific node ID is returned only if the instance uses the cluster or read/write splitting architecture.
     * @example r-bp1zxszhcgatnx****-db-0
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The command that was run.
     *
     * @example CONFIG GET maxmemory
     *
     * @var string
     */
    public $SQLText;

    /**
     * @description The type of the command.
     *
     * @example non_read_write
     *
     * @var string
     */
    public $SQLType;

    /**
     * @description The amount of time consumed to run the command.
     *
     * @example 0
     *
     * @var string
     */
    public $totalExecutionTimes;
    protected $_name = [
        'accountName'         => 'AccountName',
        'databaseName'        => 'DatabaseName',
        'executeTime'         => 'ExecuteTime',
        'hostAddress'         => 'HostAddress',
        'IPAddress'           => 'IPAddress',
        'nodeId'              => 'NodeId',
        'SQLText'             => 'SQLText',
        'SQLType'             => 'SQLType',
        'totalExecutionTimes' => 'TotalExecutionTimes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->hostAddress) {
            $res['HostAddress'] = $this->hostAddress;
        }
        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->SQLType) {
            $res['SQLType'] = $this->SQLType;
        }
        if (null !== $this->totalExecutionTimes) {
            $res['TotalExecutionTimes'] = $this->totalExecutionTimes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SQL
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }
        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['SQLType'])) {
            $model->SQLType = $map['SQLType'];
        }
        if (isset($map['TotalExecutionTimes'])) {
            $model->totalExecutionTimes = $map['TotalExecutionTimes'];
        }

        return $model;
    }
}

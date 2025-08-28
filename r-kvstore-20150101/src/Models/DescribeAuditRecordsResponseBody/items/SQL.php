<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAuditRecordsResponseBody\items;

use AlibabaCloud\Dara\Model;

class SQL extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $executeTime;

    /**
     * @var string
     */
    public $hostAddress;

    /**
     * @var string
     */
    public $IPAddress;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $SQLText;

    /**
     * @var string
     */
    public $SQLType;

    /**
     * @var string
     */
    public $totalExecutionTimes;
    protected $_name = [
        'accountName' => 'AccountName',
        'databaseName' => 'DatabaseName',
        'executeTime' => 'ExecuteTime',
        'hostAddress' => 'HostAddress',
        'IPAddress' => 'IPAddress',
        'nodeId' => 'NodeId',
        'SQLText' => 'SQLText',
        'SQLType' => 'SQLType',
        'totalExecutionTimes' => 'TotalExecutionTimes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

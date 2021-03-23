<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAuditRecordsResponseBody\items;

use AlibabaCloud\Tea\Model;

class SQL extends Model
{
    /**
     * @var string
     */
    public $hostAddress;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $IPAddress;

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

    /**
     * @var string
     */
    public $executeTime;

    /**
     * @var string
     */
    public $accountName;
    protected $_name = [
        'hostAddress'         => 'HostAddress',
        'databaseName'        => 'DatabaseName',
        'IPAddress'           => 'IPAddress',
        'SQLText'             => 'SQLText',
        'SQLType'             => 'SQLType',
        'totalExecutionTimes' => 'TotalExecutionTimes',
        'executeTime'         => 'ExecuteTime',
        'accountName'         => 'AccountName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostAddress) {
            $res['HostAddress'] = $this->hostAddress;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
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
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
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
        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
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
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        return $model;
    }
}

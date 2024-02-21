<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetDasSQLLogHotDataResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The account of the database.
     *
     * @example testuser
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The name of the database.
     *
     * @example testDB
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The execution time. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-05-23 T12:11:20Z
     *
     * @var string
     */
    public $executeTime;

    /**
     * @description The extended information. This parameter is a reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $ext;

    /**
     * @description The IP address of the client.
     *
     * @example 47.100.XX.XX
     *
     * @var string
     */
    public $hostAddress;

    /**
     * @description The execution duration. Unit: microseconds.
     *
     * @example 10000
     *
     * @var int
     */
    public $latancy;

    /**
     * @description The lock wait duration. Unit: microseconds.
     *
     * @example 1
     *
     * @var int
     */
    public $lockTime;

    /**
     * @description The number of logical reads.
     *
     * @example 12
     *
     * @var int
     */
    public $logicRead;

    /**
     * @description The execution time. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-05-23 T12:11:20.999Z
     *
     * @var string
     */
    public $originTime;

    /**
     * @description The number of physical asynchronous reads.
     *
     * @example 0
     *
     * @var int
     */
    public $physicAsyncRead;

    /**
     * @description The number of physical synchronous reads.
     *
     * @example 0
     *
     * @var int
     */
    public $physicSyncRead;

    /**
     * @description The number of rows returned.
     *
     * @example 1
     *
     * @var int
     */
    public $returnRows;

    /**
     * @description The content of the SQL statement.
     *
     * @example select 1
     *
     * @var string
     */
    public $SQLText;

    /**
     * @description The number of rows scanned by the SQL statement.
     *
     * @example 29
     *
     * @var int
     */
    public $scanRows;

    /**
     * @description The type of the SQL statement. Valid values:
     *
     * **SELECT**
     * **UPDATE**
     * **DELETE**
     *
     * @example SELECT
     *
     * @var string
     */
    public $sqlType;

    /**
     * @description The execution result. If a **0** is returned, the SQL statement was successfully executed. If an error code is returned, the SQL statement failed to be executed.
     *
     * @example 0
     *
     * @var string
     */
    public $state;

    /**
     * @description The thread ID.
     *
     * @example 657
     *
     * @var int
     */
    public $threadID;

    /**
     * @description The transaction ID.
     *
     * @example 0
     *
     * @var string
     */
    public $transactionId;

    /**
     * @description The number of updated rows.
     *
     * @example 30
     *
     * @var int
     */
    public $updateRows;
    protected $_name = [
        'accountName'     => 'AccountName',
        'DBName'          => 'DBName',
        'executeTime'     => 'ExecuteTime',
        'ext'             => 'Ext',
        'hostAddress'     => 'HostAddress',
        'latancy'         => 'Latancy',
        'lockTime'        => 'LockTime',
        'logicRead'       => 'LogicRead',
        'originTime'      => 'OriginTime',
        'physicAsyncRead' => 'PhysicAsyncRead',
        'physicSyncRead'  => 'PhysicSyncRead',
        'returnRows'      => 'ReturnRows',
        'SQLText'         => 'SQLText',
        'scanRows'        => 'ScanRows',
        'sqlType'         => 'SqlType',
        'state'           => 'State',
        'threadID'        => 'ThreadID',
        'transactionId'   => 'TransactionId',
        'updateRows'      => 'UpdateRows',
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
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->hostAddress) {
            $res['HostAddress'] = $this->hostAddress;
        }
        if (null !== $this->latancy) {
            $res['Latancy'] = $this->latancy;
        }
        if (null !== $this->lockTime) {
            $res['LockTime'] = $this->lockTime;
        }
        if (null !== $this->logicRead) {
            $res['LogicRead'] = $this->logicRead;
        }
        if (null !== $this->originTime) {
            $res['OriginTime'] = $this->originTime;
        }
        if (null !== $this->physicAsyncRead) {
            $res['PhysicAsyncRead'] = $this->physicAsyncRead;
        }
        if (null !== $this->physicSyncRead) {
            $res['PhysicSyncRead'] = $this->physicSyncRead;
        }
        if (null !== $this->returnRows) {
            $res['ReturnRows'] = $this->returnRows;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->scanRows) {
            $res['ScanRows'] = $this->scanRows;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->threadID) {
            $res['ThreadID'] = $this->threadID;
        }
        if (null !== $this->transactionId) {
            $res['TransactionId'] = $this->transactionId;
        }
        if (null !== $this->updateRows) {
            $res['UpdateRows'] = $this->updateRows;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }
        if (isset($map['Latancy'])) {
            $model->latancy = $map['Latancy'];
        }
        if (isset($map['LockTime'])) {
            $model->lockTime = $map['LockTime'];
        }
        if (isset($map['LogicRead'])) {
            $model->logicRead = $map['LogicRead'];
        }
        if (isset($map['OriginTime'])) {
            $model->originTime = $map['OriginTime'];
        }
        if (isset($map['PhysicAsyncRead'])) {
            $model->physicAsyncRead = $map['PhysicAsyncRead'];
        }
        if (isset($map['PhysicSyncRead'])) {
            $model->physicSyncRead = $map['PhysicSyncRead'];
        }
        if (isset($map['ReturnRows'])) {
            $model->returnRows = $map['ReturnRows'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['ScanRows'])) {
            $model->scanRows = $map['ScanRows'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ThreadID'])) {
            $model->threadID = $map['ThreadID'];
        }
        if (isset($map['TransactionId'])) {
            $model->transactionId = $map['TransactionId'];
        }
        if (isset($map['UpdateRows'])) {
            $model->updateRows = $map['UpdateRows'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetDasSQLLogHotDataResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $accountName;
    /**
     * @var string
     */
    public $DBName;
    /**
     * @var string
     */
    public $executeTime;
    /**
     * @var string
     */
    public $ext;
    /**
     * @var string
     */
    public $hostAddress;
    /**
     * @var int
     */
    public $latancy;
    /**
     * @var int
     */
    public $lockTime;
    /**
     * @var int
     */
    public $logicRead;
    /**
     * @var string
     */
    public $originTime;
    /**
     * @var int
     */
    public $physicAsyncRead;
    /**
     * @var int
     */
    public $physicSyncRead;
    /**
     * @var int
     */
    public $returnRows;
    /**
     * @var string
     */
    public $SQLText;
    /**
     * @var int
     */
    public $scanRows;
    /**
     * @var string
     */
    public $sqlType;
    /**
     * @var string
     */
    public $state;
    /**
     * @var int
     */
    public $threadID;
    /**
     * @var string
     */
    public $transactionId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

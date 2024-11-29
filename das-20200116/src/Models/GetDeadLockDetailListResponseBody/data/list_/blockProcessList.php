<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetDeadLockDetailListResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class blockProcessList extends Model
{
    /**
     * @description The name of the client that initiates the transaction in the session.
     *
     * @example Microsoft SQL Server Management Studio - Query
     *
     * @var string
     */
    public $clientApp;

    /**
     * @description The name of the database.
     *
     * @example school
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The hostname.
     *
     * @example sd74020124
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The time when the transaction was started. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1702301152000
     *
     * @var int
     */
    public $lastTranStarted;

    /**
     * @description The mode of the lock. For more information, see [Lock modes](https://help.aliyun.com/document_detail/2362804.html).
     *
     * @example U
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description The size of the logs generated in the session. Unit: bytes.
     *
     * @example 352
     *
     * @var int
     */
    public $logUsed;

    /**
     * @description The logon name of the user.
     *
     * @example sd74020124\\\\Administrator
     *
     * @var string
     */
    public $loginName;

    /**
     * @description The locked object.
     *
     * @example school.dbo.test2
     *
     * @var string
     */
    public $objectOwned;

    /**
     * @description The object that the transaction requested to lock.
     *
     * @example school.dbo.test1
     *
     * @var string
     */
    public $objectRequested;

    /**
     * @description The lock mode held by the session. For more information, see [Lock modes](https://help.aliyun.com/document_detail/2362804.html).
     *
     * @example X
     *
     * @var string
     */
    public $ownMode;

    /**
     * @description The ID of the session in which the transaction is started.
     *
     * @example 61
     *
     * @var int
     */
    public $spid;

    /**
     * @description The SQL statement.
     *
     * @example update test1 set col1 =9
     *
     * @var string
     */
    public $sqlText;

    /**
     * @description The status of the transaction.
     *
     * @example suspended
     *
     * @var string
     */
    public $status;

    /**
     * @description Indicates whether the session is the victim of the deadlock. Valid values:
     *
     *   **0**: no.
     *   **1**: yes.
     *
     * @example 0
     *
     * @var int
     */
    public $victim;

    /**
     * @description The lock mode requested by the session. For more information, see [Lock modes](https://help.aliyun.com/document_detail/2362804.html).
     *
     * @example U
     *
     * @var string
     */
    public $waitMode;

    /**
     * @description The resources requested by the transaction.
     *
     * @example RID: 5:1:312:0
     *
     * @var string
     */
    public $waitResource;

    /**
     * @description The details of the resources requested by the transaction.
     *
     * @example RID:school:school.mdf:312:0
     *
     * @var string
     */
    public $waitResourceDescription;
    protected $_name = [
        'clientApp'               => 'ClientApp',
        'databaseName'            => 'DatabaseName',
        'hostName'                => 'HostName',
        'lastTranStarted'         => 'LastTranStarted',
        'lockMode'                => 'LockMode',
        'logUsed'                 => 'LogUsed',
        'loginName'               => 'LoginName',
        'objectOwned'             => 'ObjectOwned',
        'objectRequested'         => 'ObjectRequested',
        'ownMode'                 => 'OwnMode',
        'spid'                    => 'Spid',
        'sqlText'                 => 'SqlText',
        'status'                  => 'Status',
        'victim'                  => 'Victim',
        'waitMode'                => 'WaitMode',
        'waitResource'            => 'WaitResource',
        'waitResourceDescription' => 'WaitResourceDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientApp) {
            $res['ClientApp'] = $this->clientApp;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->lastTranStarted) {
            $res['LastTranStarted'] = $this->lastTranStarted;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->logUsed) {
            $res['LogUsed'] = $this->logUsed;
        }
        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }
        if (null !== $this->objectOwned) {
            $res['ObjectOwned'] = $this->objectOwned;
        }
        if (null !== $this->objectRequested) {
            $res['ObjectRequested'] = $this->objectRequested;
        }
        if (null !== $this->ownMode) {
            $res['OwnMode'] = $this->ownMode;
        }
        if (null !== $this->spid) {
            $res['Spid'] = $this->spid;
        }
        if (null !== $this->sqlText) {
            $res['SqlText'] = $this->sqlText;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->victim) {
            $res['Victim'] = $this->victim;
        }
        if (null !== $this->waitMode) {
            $res['WaitMode'] = $this->waitMode;
        }
        if (null !== $this->waitResource) {
            $res['WaitResource'] = $this->waitResource;
        }
        if (null !== $this->waitResourceDescription) {
            $res['WaitResourceDescription'] = $this->waitResourceDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return blockProcessList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientApp'])) {
            $model->clientApp = $map['ClientApp'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['LastTranStarted'])) {
            $model->lastTranStarted = $map['LastTranStarted'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['LogUsed'])) {
            $model->logUsed = $map['LogUsed'];
        }
        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }
        if (isset($map['ObjectOwned'])) {
            $model->objectOwned = $map['ObjectOwned'];
        }
        if (isset($map['ObjectRequested'])) {
            $model->objectRequested = $map['ObjectRequested'];
        }
        if (isset($map['OwnMode'])) {
            $model->ownMode = $map['OwnMode'];
        }
        if (isset($map['Spid'])) {
            $model->spid = $map['Spid'];
        }
        if (isset($map['SqlText'])) {
            $model->sqlText = $map['SqlText'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Victim'])) {
            $model->victim = $map['Victim'];
        }
        if (isset($map['WaitMode'])) {
            $model->waitMode = $map['WaitMode'];
        }
        if (isset($map['WaitResource'])) {
            $model->waitResource = $map['WaitResource'];
        }
        if (isset($map['WaitResourceDescription'])) {
            $model->waitResourceDescription = $map['WaitResourceDescription'];
        }

        return $model;
    }
}

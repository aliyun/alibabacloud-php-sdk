<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetDeadLockDetailListResponseBody\data\list_;

use AlibabaCloud\Dara\Model;

class blockProcessList extends Model
{
    /**
     * @var string
     */
    public $clientApp;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var int
     */
    public $lastTranStarted;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var int
     */
    public $logUsed;

    /**
     * @var string
     */
    public $loginName;

    /**
     * @var string
     */
    public $objectOwned;

    /**
     * @var string
     */
    public $objectRequested;

    /**
     * @var string
     */
    public $ownMode;

    /**
     * @var int
     */
    public $spid;

    /**
     * @var string
     */
    public $sqlText;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $victim;

    /**
     * @var string
     */
    public $waitMode;

    /**
     * @var string
     */
    public $waitResource;

    /**
     * @var string
     */
    public $waitResourceDescription;
    protected $_name = [
        'clientApp' => 'ClientApp',
        'databaseName' => 'DatabaseName',
        'hostName' => 'HostName',
        'lastTranStarted' => 'LastTranStarted',
        'lockMode' => 'LockMode',
        'logUsed' => 'LogUsed',
        'loginName' => 'LoginName',
        'objectOwned' => 'ObjectOwned',
        'objectRequested' => 'ObjectRequested',
        'ownMode' => 'OwnMode',
        'spid' => 'Spid',
        'sqlText' => 'SqlText',
        'status' => 'Status',
        'victim' => 'Victim',
        'waitMode' => 'WaitMode',
        'waitResource' => 'WaitResource',
        'waitResourceDescription' => 'WaitResourceDescription',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

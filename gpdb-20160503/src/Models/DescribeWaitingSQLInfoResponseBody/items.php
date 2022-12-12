<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeWaitingSQLInfoResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example DataGrip 2022.1.5
     *
     * @var string
     */
    public $application;

    /**
     * @example DataGrip 2022.1.5
     *
     * @var string
     */
    public $blockedByApplication;

    /**
     * @example 110
     *
     * @var string
     */
    public $blockedByPID;

    /**
     * @example Select * from t1;
     *
     * @var string
     */
    public $blockedBySQLStmt;

    /**
     * @example testUser1
     *
     * @var string
     */
    public $blockedByUser;

    /**
     * @example ShareLock,AccessExclusiveLock
     *
     * @var string
     */
    public $grantLocks;

    /**
     * @example AccessShareLock
     *
     * @var string
     */
    public $notGrantLocks;

    /**
     * @example 100
     *
     * @var string
     */
    public $PID;

    /**
     * @example Select * from t1,t2 where t1.id=t2.id;
     *
     * @var string
     */
    public $SQLStmt;

    /**
     * @example testUser
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'application'          => 'Application',
        'blockedByApplication' => 'BlockedByApplication',
        'blockedByPID'         => 'BlockedByPID',
        'blockedBySQLStmt'     => 'BlockedBySQLStmt',
        'blockedByUser'        => 'BlockedByUser',
        'grantLocks'           => 'GrantLocks',
        'notGrantLocks'        => 'NotGrantLocks',
        'PID'                  => 'PID',
        'SQLStmt'              => 'SQLStmt',
        'user'                 => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->application) {
            $res['Application'] = $this->application;
        }
        if (null !== $this->blockedByApplication) {
            $res['BlockedByApplication'] = $this->blockedByApplication;
        }
        if (null !== $this->blockedByPID) {
            $res['BlockedByPID'] = $this->blockedByPID;
        }
        if (null !== $this->blockedBySQLStmt) {
            $res['BlockedBySQLStmt'] = $this->blockedBySQLStmt;
        }
        if (null !== $this->blockedByUser) {
            $res['BlockedByUser'] = $this->blockedByUser;
        }
        if (null !== $this->grantLocks) {
            $res['GrantLocks'] = $this->grantLocks;
        }
        if (null !== $this->notGrantLocks) {
            $res['NotGrantLocks'] = $this->notGrantLocks;
        }
        if (null !== $this->PID) {
            $res['PID'] = $this->PID;
        }
        if (null !== $this->SQLStmt) {
            $res['SQLStmt'] = $this->SQLStmt;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Application'])) {
            $model->application = $map['Application'];
        }
        if (isset($map['BlockedByApplication'])) {
            $model->blockedByApplication = $map['BlockedByApplication'];
        }
        if (isset($map['BlockedByPID'])) {
            $model->blockedByPID = $map['BlockedByPID'];
        }
        if (isset($map['BlockedBySQLStmt'])) {
            $model->blockedBySQLStmt = $map['BlockedBySQLStmt'];
        }
        if (isset($map['BlockedByUser'])) {
            $model->blockedByUser = $map['BlockedByUser'];
        }
        if (isset($map['GrantLocks'])) {
            $model->grantLocks = $map['GrantLocks'];
        }
        if (isset($map['NotGrantLocks'])) {
            $model->notGrantLocks = $map['NotGrantLocks'];
        }
        if (isset($map['PID'])) {
            $model->PID = $map['PID'];
        }
        if (isset($map['SQLStmt'])) {
            $model->SQLStmt = $map['SQLStmt'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}

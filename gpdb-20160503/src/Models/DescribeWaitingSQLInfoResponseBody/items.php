<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeWaitingSQLInfoResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The application that sent the query.
     *
     * @example DataGrip 2022.1.5
     *
     * @var string
     */
    public $application;

    /**
     * @description The application that sent the blocking query.
     *
     * @example DataGrip 2022.1.5
     *
     * @var string
     */
    public $blockedByApplication;

    /**
     * @description The process ID of the blocking query.
     *
     * @example 110
     *
     * @var string
     */
    public $blockedByPID;

    /**
     * @description The SQL statement of the blocking query.
     *
     * @example Select * from t1;
     *
     * @var string
     */
    public $blockedBySQLStmt;

    /**
     * @description The database account that is used to perform the blocking query.
     *
     * @example testUser1
     *
     * @var string
     */
    public $blockedByUser;

    /**
     * @description The authorized locks.
     *
     * @example ShareLock,AccessExclusiveLock
     *
     * @var string
     */
    public $grantLocks;

    /**
     * @description The unauthorized locks.
     *
     * @example AccessShareLock
     *
     * @var string
     */
    public $notGrantLocks;

    /**
     * @description The ID of the process that uniquely identifies the query.
     *
     * @example 100
     *
     * @var string
     */
    public $PID;

    /**
     * @description The SQL statement of the query.
     *
     * @example Select * from t1,t2 where t1.id=t2.id;
     *
     * @var string
     */
    public $SQLStmt;

    /**
     * @description The database account that is used to perform the query.
     *
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

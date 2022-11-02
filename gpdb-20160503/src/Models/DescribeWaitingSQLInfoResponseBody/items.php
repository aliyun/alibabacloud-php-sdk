<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeWaitingSQLInfoResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $application;

    /**
     * @var string
     */
    public $blockedByApplication;

    /**
     * @var string
     */
    public $blockedByPID;

    /**
     * @var string
     */
    public $blockedBySQLStmt;

    /**
     * @var string
     */
    public $blockedByUser;

    /**
     * @var string
     */
    public $grantLocks;

    /**
     * @var string
     */
    public $notGrantLocks;

    /**
     * @var string
     */
    public $PID;

    /**
     * @var string
     */
    public $SQLStmt;

    /**
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

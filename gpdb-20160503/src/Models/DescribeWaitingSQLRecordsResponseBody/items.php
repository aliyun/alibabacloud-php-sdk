<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeWaitingSQLRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $database;

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
    public $sessionID;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $user;

    /**
     * @var int
     */
    public $waitingTime;
    protected $_name = [
        'database'    => 'Database',
        'PID'         => 'PID',
        'SQLStmt'     => 'SQLStmt',
        'sessionID'   => 'SessionID',
        'startTime'   => 'StartTime',
        'status'      => 'Status',
        'user'        => 'User',
        'waitingTime' => 'WaitingTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->PID) {
            $res['PID'] = $this->PID;
        }
        if (null !== $this->SQLStmt) {
            $res['SQLStmt'] = $this->SQLStmt;
        }
        if (null !== $this->sessionID) {
            $res['SessionID'] = $this->sessionID;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->waitingTime) {
            $res['WaitingTime'] = $this->waitingTime;
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
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['PID'])) {
            $model->PID = $map['PID'];
        }
        if (isset($map['SQLStmt'])) {
            $model->SQLStmt = $map['SQLStmt'];
        }
        if (isset($map['SessionID'])) {
            $model->sessionID = $map['SessionID'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['WaitingTime'])) {
            $model->waitingTime = $map['WaitingTime'];
        }

        return $model;
    }
}

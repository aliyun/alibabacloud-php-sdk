<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDiagnosisRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example adbtest
     *
     * @var string
     */
    public $database;

    /**
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @example 2022042612465401000000012903151998970
     *
     * @var string
     */
    public $queryID;

    /**
     * @example SELECT * FROM t1,t2 WHERE t1.id=t2.id;
     *
     * @var string
     */
    public $SQLStmt;

    /**
     * @example false
     *
     * @var bool
     */
    public $SQLTruncated;

    /**
     * @example 5120
     *
     * @var int
     */
    public $SQLTruncatedThreshold;

    /**
     * @example 50
     *
     * @var string
     */
    public $sessionID;

    /**
     * @example 1651877940000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example finished
     *
     * @var string
     */
    public $status;

    /**
     * @example adbpguser
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'database'              => 'Database',
        'duration'              => 'Duration',
        'queryID'               => 'QueryID',
        'SQLStmt'               => 'SQLStmt',
        'SQLTruncated'          => 'SQLTruncated',
        'SQLTruncatedThreshold' => 'SQLTruncatedThreshold',
        'sessionID'             => 'SessionID',
        'startTime'             => 'StartTime',
        'status'                => 'Status',
        'user'                  => 'User',
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
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->queryID) {
            $res['QueryID'] = $this->queryID;
        }
        if (null !== $this->SQLStmt) {
            $res['SQLStmt'] = $this->SQLStmt;
        }
        if (null !== $this->SQLTruncated) {
            $res['SQLTruncated'] = $this->SQLTruncated;
        }
        if (null !== $this->SQLTruncatedThreshold) {
            $res['SQLTruncatedThreshold'] = $this->SQLTruncatedThreshold;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['QueryID'])) {
            $model->queryID = $map['QueryID'];
        }
        if (isset($map['SQLStmt'])) {
            $model->SQLStmt = $map['SQLStmt'];
        }
        if (isset($map['SQLTruncated'])) {
            $model->SQLTruncated = $map['SQLTruncated'];
        }
        if (isset($map['SQLTruncatedThreshold'])) {
            $model->SQLTruncatedThreshold = $map['SQLTruncatedThreshold'];
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

        return $model;
    }
}

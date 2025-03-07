<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDiagnosisRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The name of the database.
     *
     * @example adbtest
     *
     * @var string
     */
    public $database;

    /**
     * @description The execution duration of the query. Unit: seconds.
     *
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @description The ID of the query. It is a unique identifier of the query.
     *
     * @example 2022042612465401000000012903151998970
     *
     * @var string
     */
    public $queryID;

    /**
     * @description The SQL statement.
     *
     * @example SELECT * FROM t1,t2 WHERE t1.id=t2.id;
     *
     * @var string
     */
    public $SQLStmt;

    /**
     * @description Indicates whether the SQL statement needs to be truncated. Valid values:
     *
     *   **true**: The SQL statement needs to be truncated.
     *   **false**: The SQL statement does not need to be truncated.
     *
     * @example false
     *
     * @var bool
     */
    public $SQLTruncated;

    /**
     * @description The threshold used to determine whether an SQL statement must be truncated. The value is the number of characters.
     *
     * @example 5120
     *
     * @var int
     */
    public $SQLTruncatedThreshold;

    /**
     * @description The ID of the session that contains the query.
     *
     * @example 50
     *
     * @var string
     */
    public $sessionID;

    /**
     * @description The start time of the query. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1651877940000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The execution state of the query. Valid values:
     *
     *   **running**: The query is being executed.
     *   **finished**: The query is complete.
     *
     * @example finished
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the database account.
     *
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

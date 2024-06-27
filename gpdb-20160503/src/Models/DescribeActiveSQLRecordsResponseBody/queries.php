<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeActiveSQLRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class queries extends Model
{
    /**
     * @description The IP address of the client.
     *
     * @example 0.0.0.0
     *
     * @var string
     */
    public $clientAddr;

    /**
     * @description The name of the database.
     *
     * @example xg_analyse
     *
     * @var string
     */
    public $database;

    /**
     * @description The progress ID.
     *
     * @example 6164
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
    public $query;

    /**
     * @description The execution duration of the query. Unit: seconds.
     *
     * @example 60s
     *
     * @var string
     */
    public $queryDuration;

    /**
     * @description The start time of the query.
     *
     * @example 2022-05-07T06:59Z
     *
     * @var string
     */
    public $queryStart;

    /**
     * @description The session ID.
     *
     * @example 6612
     *
     * @var string
     */
    public $sessionID;

    /**
     * @description Indicates whether the SQL statement is truncated. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var string
     */
    public $sqlTruncated;

    /**
     * @description The threshold that is used to truncate the SQL statement.
     *
     * @example 1024
     *
     * @var string
     */
    public $sqlTruncatedThreshold;

    /**
     * @description The status of the asynchronous request. Valid values:
     *
     *   **RUNNING**
     *   **BLOCK**
     *
     * @example running
     *
     * @var string
     */
    public $state;

    /**
     * @description The name of the database account.
     *
     * @example testuser
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'clientAddr'            => 'ClientAddr',
        'database'              => 'Database',
        'PID'                   => 'PID',
        'query'                 => 'Query',
        'queryDuration'         => 'QueryDuration',
        'queryStart'            => 'QueryStart',
        'sessionID'             => 'SessionID',
        'sqlTruncated'          => 'SqlTruncated',
        'sqlTruncatedThreshold' => 'SqlTruncatedThreshold',
        'state'                 => 'State',
        'user'                  => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientAddr) {
            $res['ClientAddr'] = $this->clientAddr;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->PID) {
            $res['PID'] = $this->PID;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->queryDuration) {
            $res['QueryDuration'] = $this->queryDuration;
        }
        if (null !== $this->queryStart) {
            $res['QueryStart'] = $this->queryStart;
        }
        if (null !== $this->sessionID) {
            $res['SessionID'] = $this->sessionID;
        }
        if (null !== $this->sqlTruncated) {
            $res['SqlTruncated'] = $this->sqlTruncated;
        }
        if (null !== $this->sqlTruncatedThreshold) {
            $res['SqlTruncatedThreshold'] = $this->sqlTruncatedThreshold;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientAddr'])) {
            $model->clientAddr = $map['ClientAddr'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['PID'])) {
            $model->PID = $map['PID'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['QueryDuration'])) {
            $model->queryDuration = $map['QueryDuration'];
        }
        if (isset($map['QueryStart'])) {
            $model->queryStart = $map['QueryStart'];
        }
        if (isset($map['SessionID'])) {
            $model->sessionID = $map['SessionID'];
        }
        if (isset($map['SqlTruncated'])) {
            $model->sqlTruncated = $map['SqlTruncated'];
        }
        if (isset($map['SqlTruncatedThreshold'])) {
            $model->sqlTruncatedThreshold = $map['SqlTruncatedThreshold'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}

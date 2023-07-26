<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiagnosisSQLInfoResponseBody extends Model
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
     * @example 16
     *
     * @var int
     */
    public $duration;

    /**
     * @description The maximum number of output rows.
     *
     * @example 10
     *
     * @var string
     */
    public $maxOutputRows;

    /**
     * @description The ID of the query.
     *
     * @example 71403480878****
     *
     * @var string
     */
    public $queryID;

    /**
     * @description The information of the operator.
     *
     * @example {\"children\":********\"startTime\":1660719602199}
     *
     * @var string
     */
    public $queryPlan;

    /**
     * @description The ID of the request.
     *
     * @example 425AAA6A-63E0-1929-A1CE-3D9036CBC463
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The SQL statement.
     *
     * @example select n_live_tup, n_live_tup + n_dead_tup, pg_relation_size(table_name), last_vacuum from pg_stat_user_tables where relid = table_name::regclass
     *
     * @var string
     */
    public $SQLStmt;

    /**
     * @description The ID of the session that contains the query.
     *
     * @example 658****
     *
     * @var string
     */
    public $sessionID;

    /**
     * @description The sequence of metrics.
     *
     * @example {\"costSort\":******:\"Seq Scan-9\",\"value\":0.0}]}
     *
     * @var string
     */
    public $sortedMetrics;

    /**
     * @description The start time of the query. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1660719602199
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The execution state of the query. Valid values:
     *
     *   **running**: The query is being executed.
     *   **finished**: The query execution is complete.
     *
     * @example finished
     *
     * @var string
     */
    public $status;

    /**
     * @description The information of the execution plan.
     *
     * @example ******
     *
     * @var string
     */
    public $textPlan;

    /**
     * @description The name of the database account.
     *
     * @example adbpguser
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'database'      => 'Database',
        'duration'      => 'Duration',
        'maxOutputRows' => 'MaxOutputRows',
        'queryID'       => 'QueryID',
        'queryPlan'     => 'QueryPlan',
        'requestId'     => 'RequestId',
        'SQLStmt'       => 'SQLStmt',
        'sessionID'     => 'SessionID',
        'sortedMetrics' => 'SortedMetrics',
        'startTime'     => 'StartTime',
        'status'        => 'Status',
        'textPlan'      => 'TextPlan',
        'user'          => 'User',
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
        if (null !== $this->maxOutputRows) {
            $res['MaxOutputRows'] = $this->maxOutputRows;
        }
        if (null !== $this->queryID) {
            $res['QueryID'] = $this->queryID;
        }
        if (null !== $this->queryPlan) {
            $res['QueryPlan'] = $this->queryPlan;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->SQLStmt) {
            $res['SQLStmt'] = $this->SQLStmt;
        }
        if (null !== $this->sessionID) {
            $res['SessionID'] = $this->sessionID;
        }
        if (null !== $this->sortedMetrics) {
            $res['SortedMetrics'] = $this->sortedMetrics;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->textPlan) {
            $res['TextPlan'] = $this->textPlan;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiagnosisSQLInfoResponseBody
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
        if (isset($map['MaxOutputRows'])) {
            $model->maxOutputRows = $map['MaxOutputRows'];
        }
        if (isset($map['QueryID'])) {
            $model->queryID = $map['QueryID'];
        }
        if (isset($map['QueryPlan'])) {
            $model->queryPlan = $map['QueryPlan'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SQLStmt'])) {
            $model->SQLStmt = $map['SQLStmt'];
        }
        if (isset($map['SessionID'])) {
            $model->sessionID = $map['SessionID'];
        }
        if (isset($map['SortedMetrics'])) {
            $model->sortedMetrics = $map['SortedMetrics'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TextPlan'])) {
            $model->textPlan = $map['TextPlan'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}

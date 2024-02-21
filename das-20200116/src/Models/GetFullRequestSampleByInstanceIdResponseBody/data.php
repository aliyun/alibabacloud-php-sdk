<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetFullRequestSampleByInstanceIdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The name of the database.
     *
     * @example dbtest
     *
     * @var string
     */
    public $database;

    /**
     * @description The number of rows fetched by PolarDB-X 2.0 compute nodes.
     *
     * @example 0
     *
     * @var int
     */
    public $frows;

    /**
     * @description The lock wait duration. Unit: seconds.
     *
     * @example 0.0137
     *
     * @var float
     */
    public $lockWaitTime;

    /**
     * @description The number of logical reads.
     *
     * @example 165848
     *
     * @var float
     */
    public $logicalRead;

    /**
     * @description The source IP address.
     *
     * @example 172.17.XX.XX
     *
     * @var string
     */
    public $originHost;

    /**
     * @description The number of physical asynchronous reads.
     *
     * @example 0
     *
     * @var float
     */
    public $physicalAsyncRead;

    /**
     * @description The number of physical synchronous reads.
     *
     * @example 0
     *
     * @var float
     */
    public $physicalSyncRead;

    /**
     * @description The number of rows updated or returned on PolarDB-X 2.0 compute nodes.
     *
     * @example 0
     *
     * @var int
     */
    public $rows;

    /**
     * @description The total number of scanned rows.
     *
     * > This parameter is returned only for ApsaraDB RDS for MySQL, ApsaraDB RDS for PostgreSQL, and PolarDB for MySQL databases.
     * @example 2048576
     *
     * @var int
     */
    public $rowsExamined;

    /**
     * @description The number of rows returned by the SQL statement.
     *
     * @example 14
     *
     * @var int
     */
    public $rowsReturned;

    /**
     * @description The amount of time consumed to execute the SQL statement. Unit: seconds.
     *
     * @example 0.409789
     *
     * @var float
     */
    public $rt;

    /**
     * @description The number of scanned rows.
     *
     * @example 0
     *
     * @var int
     */
    public $scanRows;

    /**
     * @description The number of requests sent from PolarDB-X 2.0 compute nodes to data nodes.
     *
     * @example 0
     *
     * @var int
     */
    public $scnt;

    /**
     * @description The sample SQL statement.
     *
     * @example select * from testdb01 where ****
     *
     * @var string
     */
    public $sql;

    /**
     * @description The SQL statement ID.
     *
     * @example 651b56fe9418d48edb8fdf0980ec****
     *
     * @var string
     */
    public $sqlId;

    /**
     * @description The type of the SQL statement. Valid values: **SELECT**, **INSERT**, **UPDATE**, **DELETE**, **LOGIN**, **LOGOUT**, **MERGE**, **ALTER**, **CREATEINDEX**, **DROPINDEX**, **CREATE**, **DROP**, **SET**, **DESC**, **REPLACE**, **CALL**, **BEGIN**, **DESCRIBE**, **ROLLBACK**, **FLUSH**, **USE**, **SHOW**, **START**, **COMMIT**, and **RENAME**.
     *
     * @example SELECT
     *
     * @var string
     */
    public $sqlType;

    /**
     * @description The time when the SQL statement was executed. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1660100753556
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description The number of updated rows.
     *
     * @example 0
     *
     * @var int
     */
    public $updateRows;

    /**
     * @description The name of the user who executes the SQL statement.
     *
     * @example testuser
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'database'          => 'Database',
        'frows'             => 'Frows',
        'lockWaitTime'      => 'LockWaitTime',
        'logicalRead'       => 'LogicalRead',
        'originHost'        => 'OriginHost',
        'physicalAsyncRead' => 'PhysicalAsyncRead',
        'physicalSyncRead'  => 'PhysicalSyncRead',
        'rows'              => 'Rows',
        'rowsExamined'      => 'RowsExamined',
        'rowsReturned'      => 'RowsReturned',
        'rt'                => 'Rt',
        'scanRows'          => 'ScanRows',
        'scnt'              => 'Scnt',
        'sql'               => 'Sql',
        'sqlId'             => 'SqlId',
        'sqlType'           => 'SqlType',
        'timestamp'         => 'Timestamp',
        'updateRows'        => 'UpdateRows',
        'user'              => 'User',
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
        if (null !== $this->frows) {
            $res['Frows'] = $this->frows;
        }
        if (null !== $this->lockWaitTime) {
            $res['LockWaitTime'] = $this->lockWaitTime;
        }
        if (null !== $this->logicalRead) {
            $res['LogicalRead'] = $this->logicalRead;
        }
        if (null !== $this->originHost) {
            $res['OriginHost'] = $this->originHost;
        }
        if (null !== $this->physicalAsyncRead) {
            $res['PhysicalAsyncRead'] = $this->physicalAsyncRead;
        }
        if (null !== $this->physicalSyncRead) {
            $res['PhysicalSyncRead'] = $this->physicalSyncRead;
        }
        if (null !== $this->rows) {
            $res['Rows'] = $this->rows;
        }
        if (null !== $this->rowsExamined) {
            $res['RowsExamined'] = $this->rowsExamined;
        }
        if (null !== $this->rowsReturned) {
            $res['RowsReturned'] = $this->rowsReturned;
        }
        if (null !== $this->rt) {
            $res['Rt'] = $this->rt;
        }
        if (null !== $this->scanRows) {
            $res['ScanRows'] = $this->scanRows;
        }
        if (null !== $this->scnt) {
            $res['Scnt'] = $this->scnt;
        }
        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->updateRows) {
            $res['UpdateRows'] = $this->updateRows;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['Frows'])) {
            $model->frows = $map['Frows'];
        }
        if (isset($map['LockWaitTime'])) {
            $model->lockWaitTime = $map['LockWaitTime'];
        }
        if (isset($map['LogicalRead'])) {
            $model->logicalRead = $map['LogicalRead'];
        }
        if (isset($map['OriginHost'])) {
            $model->originHost = $map['OriginHost'];
        }
        if (isset($map['PhysicalAsyncRead'])) {
            $model->physicalAsyncRead = $map['PhysicalAsyncRead'];
        }
        if (isset($map['PhysicalSyncRead'])) {
            $model->physicalSyncRead = $map['PhysicalSyncRead'];
        }
        if (isset($map['Rows'])) {
            $model->rows = $map['Rows'];
        }
        if (isset($map['RowsExamined'])) {
            $model->rowsExamined = $map['RowsExamined'];
        }
        if (isset($map['RowsReturned'])) {
            $model->rowsReturned = $map['RowsReturned'];
        }
        if (isset($map['Rt'])) {
            $model->rt = $map['Rt'];
        }
        if (isset($map['ScanRows'])) {
            $model->scanRows = $map['ScanRows'];
        }
        if (isset($map['Scnt'])) {
            $model->scnt = $map['Scnt'];
        }
        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['UpdateRows'])) {
            $model->updateRows = $map['UpdateRows'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}

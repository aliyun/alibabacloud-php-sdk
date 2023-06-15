<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlowLogsResponseBody\items;

use AlibabaCloud\Tea\Model;

class SQLSlowLog extends Model
{
    /**
     * @description The average execution duration per SQL statement in the query. Unit: seconds.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @example 1
     *
     * @var int
     */
    public $avgExecutionTime;

    /**
     * @description The average number of I/O writes per SQL statement in the query.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @example 0
     *
     * @var int
     */
    public $avgIOWriteCounts;

    /**
     * @description The average number of rows that are affected by the last SQL statement in the query.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @example 0
     *
     * @var int
     */
    public $avgLastRowsAffectedCounts;

    /**
     * @description The average number of logical reads per SQL statement in the query.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @example 0
     *
     * @var int
     */
    public $avgLogicalReadCounts;

    /**
     * @description The average number of physical reads per SQL statement in the query.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @example 0
     *
     * @var int
     */
    public $avgPhysicalReadCounts;

    /**
     * @description The average number of rows that were affected per SQL statement in the query.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @example 0
     *
     * @var int
     */
    public $avgRowsAffectedCounts;

    /**
     * @description The date when the data was generated.
     *
     * @example 2011-05-30Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The name of the database that was queried.
     *
     * @example RDS_MySQL
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The longest execution duration of a specific SQL statement in the query. Unit: seconds.
     *
     * @example 60
     *
     * @var int
     */
    public $maxExecutionTime;

    /**
     * @var int
     */
    public $maxExecutionTimeMS;

    /**
     * @description The largest number of I/O writes that were performed by a specific SQL statement in the query.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @example 0
     *
     * @var int
     */
    public $maxIOWriteCounts;

    /**
     * @description The largest number of rows that were affected by the last SQL statement in the query.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @example 0
     *
     * @var int
     */
    public $maxLastRowsAffectedCounts;

    /**
     * @description The longest lock duration that was caused by a specific SQL statement in the query. Unit: seconds.
     *
     * @example 0
     *
     * @var int
     */
    public $maxLockTime;

    /**
     * @var int
     */
    public $maxLockTimeMS;

    /**
     * @description The largest number of logical reads that were performed by a specific SQL statement in the query.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @example 0
     *
     * @var int
     */
    public $maxLogicalReadCounts;

    /**
     * @description The largest number of physical reads that were performed by a specific SQL statement in the query.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @example 0
     *
     * @var int
     */
    public $maxPhysicalReadCounts;

    /**
     * @description The largest number of rows that were affected by a specific SQL statement in the query.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @example 0
     *
     * @var int
     */
    public $maxRowsAffectedCounts;

    /**
     * @description The smallest number of I/O writes that were performed by a specific SQL statement in the query.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @example 0
     *
     * @var int
     */
    public $minIOWriteCounts;

    /**
     * @description The smallest number of rows that were affected by the last SQL statement in the query.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @example 0
     *
     * @var int
     */
    public $minLastRowsAffectedCounts;

    /**
     * @description The smallest number of logical reads that were performed by a specific SQL statement in the query.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @example 0
     *
     * @var int
     */
    public $minLogicalReadCounts;

    /**
     * @description The smallest number of physical reads that were performed by a specific SQL statement in the query.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @example 0
     *
     * @var int
     */
    public $minPhysicalReadCounts;

    /**
     * @description The smallest number of rows that were affected by a specific SQL statement in the query.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @example 0
     *
     * @var int
     */
    public $minRowsAffectedCounts;

    /**
     * @description The total number of SQL statements that were executed in the query. This parameter is returned only for instances that run MySQL.
     *
     * @example 1
     *
     * @var int
     */
    public $mySQLTotalExecutionCounts;

    /**
     * @description The total execution duration of all SQL statements in the query. This parameter is returned only for instances that run MySQL. Unit: seconds.
     *
     * @example 1
     *
     * @var int
     */
    public $mySQLTotalExecutionTimes;

    /**
     * @description The largest number of rows that were parsed by a specific SQL statement in the query.
     *
     * @example 1
     *
     * @var int
     */
    public $parseMaxRowCount;

    /**
     * @description The total number of rows that were parsed by all SQL statements in the query.
     *
     * @example 1
     *
     * @var int
     */
    public $parseTotalRowCounts;

    /**
     * @description The date on which the data report was generated.
     *
     * @example 2011-05-30Z
     *
     * @var string
     */
    public $reportTime;

    /**
     * @description The largest number of rows that were returned by a specific SQL statement in the query.
     *
     * @example 1
     *
     * @var int
     */
    public $returnMaxRowCount;

    /**
     * @description The total number of rows that were returned by all SQL statements in the query.
     *
     * @example 1
     *
     * @var int
     */
    public $returnTotalRowCounts;

    /**
     * @description The unique ID of the SQL statement. The ID is used to obtain the slow query logs of the SQL statement.
     *
     * @example U2FsdGVkxxxx
     *
     * @var string
     */
    public $SQLHASH;

    /**
     * @description The ID of the SQL statement in the statistical template of slow query logs. This parameter is replaced by the **SQLHASH** parameter.
     *
     * @example 521584
     *
     * @var string
     */
    public $SQLIdStr;

    /**
     * @description The average amount of CPU time per SQL statement in the query. Unit: seconds.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @example 0
     *
     * @var int
     */
    public $SQLServerAvgCpuTime;

    /**
     * @description The average execution duration per SQL statement in the query. Unit: seconds.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @example 0
     *
     * @var int
     */
    public $SQLServerAvgExecutionTime;

    /**
     * @description The largest amount of CPU time that was used by a specific SQL statement in the query. Unit: seconds.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @example 0
     *
     * @var int
     */
    public $SQLServerMaxCpuTime;

    /**
     * @description The smallest amount of CPU time that was used by a specific SQL statement. Unit: seconds.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @example 0
     *
     * @var int
     */
    public $SQLServerMinCpuTime;

    /**
     * @description The smallest execution duration of a specific SQL statement in the query. Unit: seconds.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @example 0
     *
     * @var int
     */
    public $SQLServerMinExecutionTime;

    /**
     * @description The total amount of CPU time that was used by all SQL statements in the query. Unit: seconds.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @example 0
     *
     * @var int
     */
    public $SQLServerTotalCpuTime;

    /**
     * @description The total number of SQL statements that were executed in the query. This parameter is returned only for instances that run SQL Server.
     *
     * @example 1
     *
     * @var int
     */
    public $SQLServerTotalExecutionCounts;

    /**
     * @description The total execution duration of all SQL statements in the query. This parameter is returned only for instances that run SQL Server. Unit: milliseconds.
     *
     * @example 1000
     *
     * @var int
     */
    public $SQLServerTotalExecutionTimes;

    /**
     * @description The SQL statement that was executed in the query.
     *
     * @example select id,name from tb_table
     *
     * @var string
     */
    public $SQLText;

    /**
     * @description The ID of the slow query log summary.
     *
     * @example 26584213
     *
     * @var int
     */
    public $slowLogId;

    /**
     * @description The total number of I/O writes that were performed by all SQL statements in the query.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @example 0
     *
     * @var int
     */
    public $totalIOWriteCounts;

    /**
     * @description The total number of rows that were affected by the last SQL statement in the query.
     *
     * >  This parameter is returned only for instances that run SQL Server.
     * @example 0
     *
     * @var int
     */
    public $totalLastRowsAffectedCounts;

    /**
     * @description The total lock duration that was caused by all SQL statements in the query. Unit: seconds.
     *
     * @example 0
     *
     * @var int
     */
    public $totalLockTimes;

    /**
     * @description The total number of logical reads that were performed by all SQL statements in the query.
     *
     * @example 1
     *
     * @var int
     */
    public $totalLogicalReadCounts;

    /**
     * @description The total number of physical reads that were performed by all SQL statements in the query.
     *
     * @example 1
     *
     * @var int
     */
    public $totalPhysicalReadCounts;

    /**
     * @description The total number of rows that were affected by all SQL statements in the query.
     *
     * @example 0
     *
     * @var int
     */
    public $totalRowsAffectedCounts;
    protected $_name = [
        'avgExecutionTime'              => 'AvgExecutionTime',
        'avgIOWriteCounts'              => 'AvgIOWriteCounts',
        'avgLastRowsAffectedCounts'     => 'AvgLastRowsAffectedCounts',
        'avgLogicalReadCounts'          => 'AvgLogicalReadCounts',
        'avgPhysicalReadCounts'         => 'AvgPhysicalReadCounts',
        'avgRowsAffectedCounts'         => 'AvgRowsAffectedCounts',
        'createTime'                    => 'CreateTime',
        'DBName'                        => 'DBName',
        'maxExecutionTime'              => 'MaxExecutionTime',
        'maxExecutionTimeMS'            => 'MaxExecutionTimeMS',
        'maxIOWriteCounts'              => 'MaxIOWriteCounts',
        'maxLastRowsAffectedCounts'     => 'MaxLastRowsAffectedCounts',
        'maxLockTime'                   => 'MaxLockTime',
        'maxLockTimeMS'                 => 'MaxLockTimeMS',
        'maxLogicalReadCounts'          => 'MaxLogicalReadCounts',
        'maxPhysicalReadCounts'         => 'MaxPhysicalReadCounts',
        'maxRowsAffectedCounts'         => 'MaxRowsAffectedCounts',
        'minIOWriteCounts'              => 'MinIOWriteCounts',
        'minLastRowsAffectedCounts'     => 'MinLastRowsAffectedCounts',
        'minLogicalReadCounts'          => 'MinLogicalReadCounts',
        'minPhysicalReadCounts'         => 'MinPhysicalReadCounts',
        'minRowsAffectedCounts'         => 'MinRowsAffectedCounts',
        'mySQLTotalExecutionCounts'     => 'MySQLTotalExecutionCounts',
        'mySQLTotalExecutionTimes'      => 'MySQLTotalExecutionTimes',
        'parseMaxRowCount'              => 'ParseMaxRowCount',
        'parseTotalRowCounts'           => 'ParseTotalRowCounts',
        'reportTime'                    => 'ReportTime',
        'returnMaxRowCount'             => 'ReturnMaxRowCount',
        'returnTotalRowCounts'          => 'ReturnTotalRowCounts',
        'SQLHASH'                       => 'SQLHASH',
        'SQLIdStr'                      => 'SQLIdStr',
        'SQLServerAvgCpuTime'           => 'SQLServerAvgCpuTime',
        'SQLServerAvgExecutionTime'     => 'SQLServerAvgExecutionTime',
        'SQLServerMaxCpuTime'           => 'SQLServerMaxCpuTime',
        'SQLServerMinCpuTime'           => 'SQLServerMinCpuTime',
        'SQLServerMinExecutionTime'     => 'SQLServerMinExecutionTime',
        'SQLServerTotalCpuTime'         => 'SQLServerTotalCpuTime',
        'SQLServerTotalExecutionCounts' => 'SQLServerTotalExecutionCounts',
        'SQLServerTotalExecutionTimes'  => 'SQLServerTotalExecutionTimes',
        'SQLText'                       => 'SQLText',
        'slowLogId'                     => 'SlowLogId',
        'totalIOWriteCounts'            => 'TotalIOWriteCounts',
        'totalLastRowsAffectedCounts'   => 'TotalLastRowsAffectedCounts',
        'totalLockTimes'                => 'TotalLockTimes',
        'totalLogicalReadCounts'        => 'TotalLogicalReadCounts',
        'totalPhysicalReadCounts'       => 'TotalPhysicalReadCounts',
        'totalRowsAffectedCounts'       => 'TotalRowsAffectedCounts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgExecutionTime) {
            $res['AvgExecutionTime'] = $this->avgExecutionTime;
        }
        if (null !== $this->avgIOWriteCounts) {
            $res['AvgIOWriteCounts'] = $this->avgIOWriteCounts;
        }
        if (null !== $this->avgLastRowsAffectedCounts) {
            $res['AvgLastRowsAffectedCounts'] = $this->avgLastRowsAffectedCounts;
        }
        if (null !== $this->avgLogicalReadCounts) {
            $res['AvgLogicalReadCounts'] = $this->avgLogicalReadCounts;
        }
        if (null !== $this->avgPhysicalReadCounts) {
            $res['AvgPhysicalReadCounts'] = $this->avgPhysicalReadCounts;
        }
        if (null !== $this->avgRowsAffectedCounts) {
            $res['AvgRowsAffectedCounts'] = $this->avgRowsAffectedCounts;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->maxExecutionTime) {
            $res['MaxExecutionTime'] = $this->maxExecutionTime;
        }
        if (null !== $this->maxExecutionTimeMS) {
            $res['MaxExecutionTimeMS'] = $this->maxExecutionTimeMS;
        }
        if (null !== $this->maxIOWriteCounts) {
            $res['MaxIOWriteCounts'] = $this->maxIOWriteCounts;
        }
        if (null !== $this->maxLastRowsAffectedCounts) {
            $res['MaxLastRowsAffectedCounts'] = $this->maxLastRowsAffectedCounts;
        }
        if (null !== $this->maxLockTime) {
            $res['MaxLockTime'] = $this->maxLockTime;
        }
        if (null !== $this->maxLockTimeMS) {
            $res['MaxLockTimeMS'] = $this->maxLockTimeMS;
        }
        if (null !== $this->maxLogicalReadCounts) {
            $res['MaxLogicalReadCounts'] = $this->maxLogicalReadCounts;
        }
        if (null !== $this->maxPhysicalReadCounts) {
            $res['MaxPhysicalReadCounts'] = $this->maxPhysicalReadCounts;
        }
        if (null !== $this->maxRowsAffectedCounts) {
            $res['MaxRowsAffectedCounts'] = $this->maxRowsAffectedCounts;
        }
        if (null !== $this->minIOWriteCounts) {
            $res['MinIOWriteCounts'] = $this->minIOWriteCounts;
        }
        if (null !== $this->minLastRowsAffectedCounts) {
            $res['MinLastRowsAffectedCounts'] = $this->minLastRowsAffectedCounts;
        }
        if (null !== $this->minLogicalReadCounts) {
            $res['MinLogicalReadCounts'] = $this->minLogicalReadCounts;
        }
        if (null !== $this->minPhysicalReadCounts) {
            $res['MinPhysicalReadCounts'] = $this->minPhysicalReadCounts;
        }
        if (null !== $this->minRowsAffectedCounts) {
            $res['MinRowsAffectedCounts'] = $this->minRowsAffectedCounts;
        }
        if (null !== $this->mySQLTotalExecutionCounts) {
            $res['MySQLTotalExecutionCounts'] = $this->mySQLTotalExecutionCounts;
        }
        if (null !== $this->mySQLTotalExecutionTimes) {
            $res['MySQLTotalExecutionTimes'] = $this->mySQLTotalExecutionTimes;
        }
        if (null !== $this->parseMaxRowCount) {
            $res['ParseMaxRowCount'] = $this->parseMaxRowCount;
        }
        if (null !== $this->parseTotalRowCounts) {
            $res['ParseTotalRowCounts'] = $this->parseTotalRowCounts;
        }
        if (null !== $this->reportTime) {
            $res['ReportTime'] = $this->reportTime;
        }
        if (null !== $this->returnMaxRowCount) {
            $res['ReturnMaxRowCount'] = $this->returnMaxRowCount;
        }
        if (null !== $this->returnTotalRowCounts) {
            $res['ReturnTotalRowCounts'] = $this->returnTotalRowCounts;
        }
        if (null !== $this->SQLHASH) {
            $res['SQLHASH'] = $this->SQLHASH;
        }
        if (null !== $this->SQLIdStr) {
            $res['SQLIdStr'] = $this->SQLIdStr;
        }
        if (null !== $this->SQLServerAvgCpuTime) {
            $res['SQLServerAvgCpuTime'] = $this->SQLServerAvgCpuTime;
        }
        if (null !== $this->SQLServerAvgExecutionTime) {
            $res['SQLServerAvgExecutionTime'] = $this->SQLServerAvgExecutionTime;
        }
        if (null !== $this->SQLServerMaxCpuTime) {
            $res['SQLServerMaxCpuTime'] = $this->SQLServerMaxCpuTime;
        }
        if (null !== $this->SQLServerMinCpuTime) {
            $res['SQLServerMinCpuTime'] = $this->SQLServerMinCpuTime;
        }
        if (null !== $this->SQLServerMinExecutionTime) {
            $res['SQLServerMinExecutionTime'] = $this->SQLServerMinExecutionTime;
        }
        if (null !== $this->SQLServerTotalCpuTime) {
            $res['SQLServerTotalCpuTime'] = $this->SQLServerTotalCpuTime;
        }
        if (null !== $this->SQLServerTotalExecutionCounts) {
            $res['SQLServerTotalExecutionCounts'] = $this->SQLServerTotalExecutionCounts;
        }
        if (null !== $this->SQLServerTotalExecutionTimes) {
            $res['SQLServerTotalExecutionTimes'] = $this->SQLServerTotalExecutionTimes;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->slowLogId) {
            $res['SlowLogId'] = $this->slowLogId;
        }
        if (null !== $this->totalIOWriteCounts) {
            $res['TotalIOWriteCounts'] = $this->totalIOWriteCounts;
        }
        if (null !== $this->totalLastRowsAffectedCounts) {
            $res['TotalLastRowsAffectedCounts'] = $this->totalLastRowsAffectedCounts;
        }
        if (null !== $this->totalLockTimes) {
            $res['TotalLockTimes'] = $this->totalLockTimes;
        }
        if (null !== $this->totalLogicalReadCounts) {
            $res['TotalLogicalReadCounts'] = $this->totalLogicalReadCounts;
        }
        if (null !== $this->totalPhysicalReadCounts) {
            $res['TotalPhysicalReadCounts'] = $this->totalPhysicalReadCounts;
        }
        if (null !== $this->totalRowsAffectedCounts) {
            $res['TotalRowsAffectedCounts'] = $this->totalRowsAffectedCounts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SQLSlowLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgExecutionTime'])) {
            $model->avgExecutionTime = $map['AvgExecutionTime'];
        }
        if (isset($map['AvgIOWriteCounts'])) {
            $model->avgIOWriteCounts = $map['AvgIOWriteCounts'];
        }
        if (isset($map['AvgLastRowsAffectedCounts'])) {
            $model->avgLastRowsAffectedCounts = $map['AvgLastRowsAffectedCounts'];
        }
        if (isset($map['AvgLogicalReadCounts'])) {
            $model->avgLogicalReadCounts = $map['AvgLogicalReadCounts'];
        }
        if (isset($map['AvgPhysicalReadCounts'])) {
            $model->avgPhysicalReadCounts = $map['AvgPhysicalReadCounts'];
        }
        if (isset($map['AvgRowsAffectedCounts'])) {
            $model->avgRowsAffectedCounts = $map['AvgRowsAffectedCounts'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['MaxExecutionTime'])) {
            $model->maxExecutionTime = $map['MaxExecutionTime'];
        }
        if (isset($map['MaxExecutionTimeMS'])) {
            $model->maxExecutionTimeMS = $map['MaxExecutionTimeMS'];
        }
        if (isset($map['MaxIOWriteCounts'])) {
            $model->maxIOWriteCounts = $map['MaxIOWriteCounts'];
        }
        if (isset($map['MaxLastRowsAffectedCounts'])) {
            $model->maxLastRowsAffectedCounts = $map['MaxLastRowsAffectedCounts'];
        }
        if (isset($map['MaxLockTime'])) {
            $model->maxLockTime = $map['MaxLockTime'];
        }
        if (isset($map['MaxLockTimeMS'])) {
            $model->maxLockTimeMS = $map['MaxLockTimeMS'];
        }
        if (isset($map['MaxLogicalReadCounts'])) {
            $model->maxLogicalReadCounts = $map['MaxLogicalReadCounts'];
        }
        if (isset($map['MaxPhysicalReadCounts'])) {
            $model->maxPhysicalReadCounts = $map['MaxPhysicalReadCounts'];
        }
        if (isset($map['MaxRowsAffectedCounts'])) {
            $model->maxRowsAffectedCounts = $map['MaxRowsAffectedCounts'];
        }
        if (isset($map['MinIOWriteCounts'])) {
            $model->minIOWriteCounts = $map['MinIOWriteCounts'];
        }
        if (isset($map['MinLastRowsAffectedCounts'])) {
            $model->minLastRowsAffectedCounts = $map['MinLastRowsAffectedCounts'];
        }
        if (isset($map['MinLogicalReadCounts'])) {
            $model->minLogicalReadCounts = $map['MinLogicalReadCounts'];
        }
        if (isset($map['MinPhysicalReadCounts'])) {
            $model->minPhysicalReadCounts = $map['MinPhysicalReadCounts'];
        }
        if (isset($map['MinRowsAffectedCounts'])) {
            $model->minRowsAffectedCounts = $map['MinRowsAffectedCounts'];
        }
        if (isset($map['MySQLTotalExecutionCounts'])) {
            $model->mySQLTotalExecutionCounts = $map['MySQLTotalExecutionCounts'];
        }
        if (isset($map['MySQLTotalExecutionTimes'])) {
            $model->mySQLTotalExecutionTimes = $map['MySQLTotalExecutionTimes'];
        }
        if (isset($map['ParseMaxRowCount'])) {
            $model->parseMaxRowCount = $map['ParseMaxRowCount'];
        }
        if (isset($map['ParseTotalRowCounts'])) {
            $model->parseTotalRowCounts = $map['ParseTotalRowCounts'];
        }
        if (isset($map['ReportTime'])) {
            $model->reportTime = $map['ReportTime'];
        }
        if (isset($map['ReturnMaxRowCount'])) {
            $model->returnMaxRowCount = $map['ReturnMaxRowCount'];
        }
        if (isset($map['ReturnTotalRowCounts'])) {
            $model->returnTotalRowCounts = $map['ReturnTotalRowCounts'];
        }
        if (isset($map['SQLHASH'])) {
            $model->SQLHASH = $map['SQLHASH'];
        }
        if (isset($map['SQLIdStr'])) {
            $model->SQLIdStr = $map['SQLIdStr'];
        }
        if (isset($map['SQLServerAvgCpuTime'])) {
            $model->SQLServerAvgCpuTime = $map['SQLServerAvgCpuTime'];
        }
        if (isset($map['SQLServerAvgExecutionTime'])) {
            $model->SQLServerAvgExecutionTime = $map['SQLServerAvgExecutionTime'];
        }
        if (isset($map['SQLServerMaxCpuTime'])) {
            $model->SQLServerMaxCpuTime = $map['SQLServerMaxCpuTime'];
        }
        if (isset($map['SQLServerMinCpuTime'])) {
            $model->SQLServerMinCpuTime = $map['SQLServerMinCpuTime'];
        }
        if (isset($map['SQLServerMinExecutionTime'])) {
            $model->SQLServerMinExecutionTime = $map['SQLServerMinExecutionTime'];
        }
        if (isset($map['SQLServerTotalCpuTime'])) {
            $model->SQLServerTotalCpuTime = $map['SQLServerTotalCpuTime'];
        }
        if (isset($map['SQLServerTotalExecutionCounts'])) {
            $model->SQLServerTotalExecutionCounts = $map['SQLServerTotalExecutionCounts'];
        }
        if (isset($map['SQLServerTotalExecutionTimes'])) {
            $model->SQLServerTotalExecutionTimes = $map['SQLServerTotalExecutionTimes'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['SlowLogId'])) {
            $model->slowLogId = $map['SlowLogId'];
        }
        if (isset($map['TotalIOWriteCounts'])) {
            $model->totalIOWriteCounts = $map['TotalIOWriteCounts'];
        }
        if (isset($map['TotalLastRowsAffectedCounts'])) {
            $model->totalLastRowsAffectedCounts = $map['TotalLastRowsAffectedCounts'];
        }
        if (isset($map['TotalLockTimes'])) {
            $model->totalLockTimes = $map['TotalLockTimes'];
        }
        if (isset($map['TotalLogicalReadCounts'])) {
            $model->totalLogicalReadCounts = $map['TotalLogicalReadCounts'];
        }
        if (isset($map['TotalPhysicalReadCounts'])) {
            $model->totalPhysicalReadCounts = $map['TotalPhysicalReadCounts'];
        }
        if (isset($map['TotalRowsAffectedCounts'])) {
            $model->totalRowsAffectedCounts = $map['TotalRowsAffectedCounts'];
        }

        return $model;
    }
}

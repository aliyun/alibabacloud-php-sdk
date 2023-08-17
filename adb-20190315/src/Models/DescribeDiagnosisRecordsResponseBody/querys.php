<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDiagnosisRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class querys extends Model
{
    /**
     * @description The source IP address.
     *
     * @example 59.82.xx.xx
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description The total execution duration. Unit: milliseconds.
     *
     * >  This value is the cumulative value of the `QueuedTime`, `TotalPlanningTime`, and `ExecutionTime` parameters.
     * @example 10
     *
     * @var int
     */
    public $cost;

    /**
     * @description The name of the database on which the SQL statement is executed.
     *
     * @example adb_demo
     *
     * @var string
     */
    public $database;

    /**
     * @description The number of rows written to the table by an extract, transform, and load (ETL) task.
     *
     * @example 0
     *
     * @var int
     */
    public $etlWriteRows;

    /**
     * @description The execution duration. Unit: milliseconds.
     *
     * @example 6
     *
     * @var int
     */
    public $executionTime;

    /**
     * @description The amount of returned data. Unit: bytes.
     *
     * @example 9
     *
     * @var int
     */
    public $outputDataSize;

    /**
     * @description The number of rows returned.
     *
     * @example 1
     *
     * @var int
     */
    public $outputRows;

    /**
     * @description The peak memory. Unit: bytes.
     *
     * @example 16648
     *
     * @var int
     */
    public $peakMemory;

    /**
     * @description The query ID.
     *
     * @example 2021093000414401000000023503151******
     *
     * @var string
     */
    public $processId;

    /**
     * @description The amount of time that is consumed for queuing. Unit: milliseconds.
     *
     * @example 0
     *
     * @var int
     */
    public $queueTime;

    /**
     * @description The IP address and port number of the AnalyticDB for MySQL frontend node on which the SQL statement is executed.
     *
     * @example 10.0.xx.xx:3004
     *
     * @var string
     */
    public $rcHost;

    /**
     * @description The execution duration rank of operators that are used in the SQL statement.
     *
     * > This field is returned only for SQL statements that have the `Status` parameter set to `running`.
     * @example 1
     *
     * @var int
     */
    public $resourceCostRank;

    /**
     * @description The resource group to which the SQL statement belongs.
     *
     * @example user_default
     *
     * @var string
     */
    public $resourceGroup;

    /**
     * @description The SQL statement.
     *
     * > For performance considerations, an SQL statement cannot exceed 5,120 characters in length. Otherwise, the SQL statement is truncated. You can call the [DownloadDiagnosisRecords](~~308212~~) operation to download the diagnostic information about SQL statements that meet a condition in an AnalyticDB for MySQL cluster, including the complete SQL statements.
     * @example SELECT count(*)\nFROM nation
     *
     * @var string
     */
    public $SQL;

    /**
     * @description Indicates whether the SQL statement is truncated. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $SQLTruncated;

    /**
     * @description The maximum length of the SQL statement. 5120 is returned. Unit: character. SQL statements that exceed this limit are truncated.
     *
     * @example 5120
     *
     * @var int
     */
    public $SQLTruncatedThreshold;

    /**
     * @description The number of entries scanned.
     *
     * @example 1
     *
     * @var int
     */
    public $scanRows;

    /**
     * @description The amount of scanned data. Unit: bytes.
     *
     * @example 9
     *
     * @var int
     */
    public $scanSize;

    /**
     * @description The beginning of the time range in which the SQL statement is executed. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1632933704000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The state of the SQL statement. Valid values:
     *
     *   **running**
     *   **finished**
     *   **failed**
     *
     * @example finished
     *
     * @var string
     */
    public $status;

    /**
     * @description The amount of time that is consumed to generate an execution plan. Unit: milliseconds.
     *
     * @example 4
     *
     * @var int
     */
    public $totalPlanningTime;

    /**
     * @description The total number of stages generated.
     *
     * @example 2
     *
     * @var int
     */
    public $totalStages;

    /**
     * @description The username that is used to execute the SQL statement.
     *
     * @example test_user
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'clientIp'              => 'ClientIp',
        'cost'                  => 'Cost',
        'database'              => 'Database',
        'etlWriteRows'          => 'EtlWriteRows',
        'executionTime'         => 'ExecutionTime',
        'outputDataSize'        => 'OutputDataSize',
        'outputRows'            => 'OutputRows',
        'peakMemory'            => 'PeakMemory',
        'processId'             => 'ProcessId',
        'queueTime'             => 'QueueTime',
        'rcHost'                => 'RcHost',
        'resourceCostRank'      => 'ResourceCostRank',
        'resourceGroup'         => 'ResourceGroup',
        'SQL'                   => 'SQL',
        'SQLTruncated'          => 'SQLTruncated',
        'SQLTruncatedThreshold' => 'SQLTruncatedThreshold',
        'scanRows'              => 'ScanRows',
        'scanSize'              => 'ScanSize',
        'startTime'             => 'StartTime',
        'status'                => 'Status',
        'totalPlanningTime'     => 'TotalPlanningTime',
        'totalStages'           => 'TotalStages',
        'userName'              => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->cost) {
            $res['Cost'] = $this->cost;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->etlWriteRows) {
            $res['EtlWriteRows'] = $this->etlWriteRows;
        }
        if (null !== $this->executionTime) {
            $res['ExecutionTime'] = $this->executionTime;
        }
        if (null !== $this->outputDataSize) {
            $res['OutputDataSize'] = $this->outputDataSize;
        }
        if (null !== $this->outputRows) {
            $res['OutputRows'] = $this->outputRows;
        }
        if (null !== $this->peakMemory) {
            $res['PeakMemory'] = $this->peakMemory;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->queueTime) {
            $res['QueueTime'] = $this->queueTime;
        }
        if (null !== $this->rcHost) {
            $res['RcHost'] = $this->rcHost;
        }
        if (null !== $this->resourceCostRank) {
            $res['ResourceCostRank'] = $this->resourceCostRank;
        }
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }
        if (null !== $this->SQL) {
            $res['SQL'] = $this->SQL;
        }
        if (null !== $this->SQLTruncated) {
            $res['SQLTruncated'] = $this->SQLTruncated;
        }
        if (null !== $this->SQLTruncatedThreshold) {
            $res['SQLTruncatedThreshold'] = $this->SQLTruncatedThreshold;
        }
        if (null !== $this->scanRows) {
            $res['ScanRows'] = $this->scanRows;
        }
        if (null !== $this->scanSize) {
            $res['ScanSize'] = $this->scanSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalPlanningTime) {
            $res['TotalPlanningTime'] = $this->totalPlanningTime;
        }
        if (null !== $this->totalStages) {
            $res['TotalStages'] = $this->totalStages;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return querys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['Cost'])) {
            $model->cost = $map['Cost'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['EtlWriteRows'])) {
            $model->etlWriteRows = $map['EtlWriteRows'];
        }
        if (isset($map['ExecutionTime'])) {
            $model->executionTime = $map['ExecutionTime'];
        }
        if (isset($map['OutputDataSize'])) {
            $model->outputDataSize = $map['OutputDataSize'];
        }
        if (isset($map['OutputRows'])) {
            $model->outputRows = $map['OutputRows'];
        }
        if (isset($map['PeakMemory'])) {
            $model->peakMemory = $map['PeakMemory'];
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['QueueTime'])) {
            $model->queueTime = $map['QueueTime'];
        }
        if (isset($map['RcHost'])) {
            $model->rcHost = $map['RcHost'];
        }
        if (isset($map['ResourceCostRank'])) {
            $model->resourceCostRank = $map['ResourceCostRank'];
        }
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if (isset($map['SQL'])) {
            $model->SQL = $map['SQL'];
        }
        if (isset($map['SQLTruncated'])) {
            $model->SQLTruncated = $map['SQLTruncated'];
        }
        if (isset($map['SQLTruncatedThreshold'])) {
            $model->SQLTruncatedThreshold = $map['SQLTruncatedThreshold'];
        }
        if (isset($map['ScanRows'])) {
            $model->scanRows = $map['ScanRows'];
        }
        if (isset($map['ScanSize'])) {
            $model->scanSize = $map['ScanSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalPlanningTime'])) {
            $model->totalPlanningTime = $map['TotalPlanningTime'];
        }
        if (isset($map['TotalStages'])) {
            $model->totalStages = $map['TotalStages'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}

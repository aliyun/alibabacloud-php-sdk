<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ListResultExportJobHistoryResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The RAM user ID.
     *
     * @example 120010511678****
     *
     * @var string
     */
    public $aliUid;

    /**
     * @description The time when the result set export job was created. The time follows the ISO 8601 standard in the *yyyy-mm-ddThh:mm:ssZ* format. The time is displayed in UTC.
     *
     * @example 2022-04-01T09:50:18Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @example amv-7xv5ty5m9o4v****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The name of the database account that is associated with the RAM user.
     *
     * @example ram_user
     *
     * @var string
     */
    public $databaseUser;

    /**
     * @description The end time of the result set export job. The time follows the ISO 8601 standard in the *yyyy-MM-ddTHH:mm:ssZ* format. The time is displayed in UTC.
     *
     * >  The end time must be later than the start time.
     * @example 2023-06-15T02:13:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The engine that is used to execute the result set export job. Only XIHE is returned.
     *
     * @example XIHE
     *
     * @var string
     */
    public $engine;

    /**
     * @description The unique identifier of the result set export job.
     *
     * @example export_2024051319271219802100800401300****
     *
     * @var string
     */
    public $exportJobId;

    /**
     * @description The complete URL of the path to store the exported result set.
     *
     * @var string
     */
    public $exportPath;

    /**
     * @description The number of exported rows. This parameter is returned only when the request was successful.
     *
     * @example 10000
     *
     * @var string
     */
    public $exportRows;

    /**
     * @var string
     */
    public $exportType;

    /**
     * @var bool
     */
    public $isExpired;

    /**
     * @description The returned message. This parameter is returned only when the request failed.
     *
     * @example Failed to execute SQL
     *
     * @var string
     */
    public $message;

    /**
     * @description The query ID that can be used for diagnostics.
     *
     * >  You can call the [DescribeDiagnosisSQLInfo](https://help.aliyun.com/document_detail/612495.html) operation to query the execution information about a query.
     * @example 202306121421111720161451770345339****
     *
     * @var string
     */
    public $processId;

    /**
     * @description The progress of the result set export job. Unit: %. Valid values: 0 to 100.
     *
     * @example 30
     *
     * @var string
     */
    public $progress;

    /**
     * @description The name of the resource group that runs the result set export job.
     *
     * @example test
     *
     * @var string
     */
    public $resourceGroup;

    /**
     * @description The name of the database.
     *
     * @example lake_db
     *
     * @var string
     */
    public $schema;

    /**
     * @description The SQL statement that is used in the result set export job.
     *
     * @example SELECT * FROM `ADB_SampleData_TPCH`.`supplier` LIMIT 20
     *
     * @var string
     */
    public $sql;

    /**
     * @description The start time of the result set export job. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2021-07-03T04:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The execution status of the result set export job. Valid values:
     *
     * 1.  **SUBMITTED**
     * 2.  **RUNNING**
     * 3.  **SUCCEEDED**
     * 4.  **FAILED**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @description The amount of time consumed to export execution records. Unit: milliseconds.
     *
     * >  The value is the duration between the time when the result set export job starts and the time when the result set export job ends.
     * @example 560
     *
     * @var int
     */
    public $timeCost;
    protected $_name = [
        'aliUid'        => 'AliUid',
        'createTime'    => 'CreateTime',
        'DBClusterId'   => 'DBClusterId',
        'databaseUser'  => 'DatabaseUser',
        'endTime'       => 'EndTime',
        'engine'        => 'Engine',
        'exportJobId'   => 'ExportJobId',
        'exportPath'    => 'ExportPath',
        'exportRows'    => 'ExportRows',
        'exportType'    => 'ExportType',
        'isExpired'     => 'IsExpired',
        'message'       => 'Message',
        'processId'     => 'ProcessId',
        'progress'      => 'Progress',
        'resourceGroup' => 'ResourceGroup',
        'schema'        => 'Schema',
        'sql'           => 'Sql',
        'startTime'     => 'StartTime',
        'status'        => 'Status',
        'timeCost'      => 'TimeCost',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->databaseUser) {
            $res['DatabaseUser'] = $this->databaseUser;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->exportJobId) {
            $res['ExportJobId'] = $this->exportJobId;
        }
        if (null !== $this->exportPath) {
            $res['ExportPath'] = $this->exportPath;
        }
        if (null !== $this->exportRows) {
            $res['ExportRows'] = $this->exportRows;
        }
        if (null !== $this->exportType) {
            $res['ExportType'] = $this->exportType;
        }
        if (null !== $this->isExpired) {
            $res['IsExpired'] = $this->isExpired;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }
        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timeCost) {
            $res['TimeCost'] = $this->timeCost;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DatabaseUser'])) {
            $model->databaseUser = $map['DatabaseUser'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['ExportJobId'])) {
            $model->exportJobId = $map['ExportJobId'];
        }
        if (isset($map['ExportPath'])) {
            $model->exportPath = $map['ExportPath'];
        }
        if (isset($map['ExportRows'])) {
            $model->exportRows = $map['ExportRows'];
        }
        if (isset($map['ExportType'])) {
            $model->exportType = $map['ExportType'];
        }
        if (isset($map['IsExpired'])) {
            $model->isExpired = $map['IsExpired'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }
        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TimeCost'])) {
            $model->timeCost = $map['TimeCost'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListStreamingJobsResponseBody;

use AlibabaCloud\Tea\Model;

class jobItems extends Model
{
    /**
     * @description The name of the database account.
     *
     * @example test-account
     *
     * @var string
     */
    public $account;

    /**
     * @description The delivery guarantee setting.
     *
     * @example ATLEAST / EXACTLY
     *
     * @var string
     */
    public $consistency;

    /**
     * @description The time when the job was created.
     *
     * @example 2019-09-08T16:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The data source ID.
     *
     * @example 58
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @description The name of the data source.
     *
     * @example test-kafka
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @description The mapped fields in the destination table.
     *
     * @var string[]
     */
    public $destColumns;

    /**
     * @description The name of the destination database.
     *
     * @example dest-db
     *
     * @var string
     */
    public $destDatabase;

    /**
     * @description The name of the destination namespace.
     *
     * @example dest-schema
     *
     * @var string
     */
    public $destSchema;

    /**
     * @description The name of the destination table.
     *
     * @example dest-table
     *
     * @var string
     */
    public $destTable;

    /**
     * @description The error message returned.
     *
     * This parameter is returned only when the return value of **Status** is **false**.
     * @example ""
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The fallback offset for data consumption.
     *
     *   This parameter indicates the starting offset from which data consumption resumes when a consumer does not request a consumption offset or requests a consumption offset that is beyond the range of the offset information recorded in the current Kafka cluster. Valid values: EARLIEST and LATEST.
     *
     * @example EARLIEST /  LATEST
     *
     * @var string
     */
    public $fallbackOffset;

    /**
     * @description The description of the job.
     *
     * @example test job
     *
     * @var string
     */
    public $jobDescription;

    /**
     * @description The job ID.
     *
     * @example 1
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The name of the job.
     *
     * @example test-job
     *
     * @var string
     */
    public $jobName;

    /**
     * @description The update condition columns that are used to join the source data and the destination table. Typically, the columns are all the primary key columns of the destination table. If the values of all columns specified by this parameter in different rows are the same, the rows are considered duplicates.
     *
     * @var string[]
     */
    public $matchColumns;

    /**
     * @description The configuration mode. Valid values:
     *
     * 2.  professional: In professional mode, you can submit a YAML configuration file.
     * @example Basic / Professional
     *
     * @var string
     */
    public $mode;

    /**
     * @description The time when the job was last modified.
     *
     * @example 2019-09-08T17:00:00Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The password of the database account.
     *
     * @example pwd123
     *
     * @var string
     */
    public $password;

    /**
     * @description The source fields.
     *
     * @var string[]
     */
    public $srcColumns;

    /**
     * @description The status of the job. Valid values:
     *
     *   Init
     *   Running
     *   Exception
     *   Paused
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The columns to be updated if a row of data meets the update condition. Typically, the columns are all non-primary key columns of the destination table. When the columns specified by the MatchColumns parameter are used as conditions to join the source data and the destination table, data in columns of the UpdateColumns type is updated if data is matched.
     *
     * @var string[]
     */
    public $updateColumns;

    /**
     * @description The write mode.
     *
     * @example INSERT/UPDATE/MERGE
     *
     * @var string
     */
    public $writeMode;
    protected $_name = [
        'account'        => 'Account',
        'consistency'    => 'Consistency',
        'createTime'     => 'CreateTime',
        'dataSourceId'   => 'DataSourceId',
        'dataSourceName' => 'DataSourceName',
        'destColumns'    => 'DestColumns',
        'destDatabase'   => 'DestDatabase',
        'destSchema'     => 'DestSchema',
        'destTable'      => 'DestTable',
        'errorMessage'   => 'ErrorMessage',
        'fallbackOffset' => 'FallbackOffset',
        'jobDescription' => 'JobDescription',
        'jobId'          => 'JobId',
        'jobName'        => 'JobName',
        'matchColumns'   => 'MatchColumns',
        'mode'           => 'Mode',
        'modifyTime'     => 'ModifyTime',
        'password'       => 'Password',
        'srcColumns'     => 'SrcColumns',
        'status'         => 'Status',
        'updateColumns'  => 'UpdateColumns',
        'writeMode'      => 'WriteMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->consistency) {
            $res['Consistency'] = $this->consistency;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->destColumns) {
            $res['DestColumns'] = $this->destColumns;
        }
        if (null !== $this->destDatabase) {
            $res['DestDatabase'] = $this->destDatabase;
        }
        if (null !== $this->destSchema) {
            $res['DestSchema'] = $this->destSchema;
        }
        if (null !== $this->destTable) {
            $res['DestTable'] = $this->destTable;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->fallbackOffset) {
            $res['FallbackOffset'] = $this->fallbackOffset;
        }
        if (null !== $this->jobDescription) {
            $res['JobDescription'] = $this->jobDescription;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->matchColumns) {
            $res['MatchColumns'] = $this->matchColumns;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->srcColumns) {
            $res['SrcColumns'] = $this->srcColumns;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateColumns) {
            $res['UpdateColumns'] = $this->updateColumns;
        }
        if (null !== $this->writeMode) {
            $res['WriteMode'] = $this->writeMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['Consistency'])) {
            $model->consistency = $map['Consistency'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }
        if (isset($map['DestColumns'])) {
            if (!empty($map['DestColumns'])) {
                $model->destColumns = $map['DestColumns'];
            }
        }
        if (isset($map['DestDatabase'])) {
            $model->destDatabase = $map['DestDatabase'];
        }
        if (isset($map['DestSchema'])) {
            $model->destSchema = $map['DestSchema'];
        }
        if (isset($map['DestTable'])) {
            $model->destTable = $map['DestTable'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['FallbackOffset'])) {
            $model->fallbackOffset = $map['FallbackOffset'];
        }
        if (isset($map['JobDescription'])) {
            $model->jobDescription = $map['JobDescription'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['MatchColumns'])) {
            if (!empty($map['MatchColumns'])) {
                $model->matchColumns = $map['MatchColumns'];
            }
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['SrcColumns'])) {
            if (!empty($map['SrcColumns'])) {
                $model->srcColumns = $map['SrcColumns'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateColumns'])) {
            if (!empty($map['UpdateColumns'])) {
                $model->updateColumns = $map['UpdateColumns'];
            }
        }
        if (isset($map['WriteMode'])) {
            $model->writeMode = $map['WriteMode'];
        }

        return $model;
    }
}

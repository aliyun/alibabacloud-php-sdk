<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeStreamingJobResponseBody extends Model
{
    /**
     * @description The username of the account.
     *
     * @example test-account
     *
     * @var string
     */
    public $account;

    /**
     * @example ATLEAST / EXACTLY
     *
     * @var string
     */
    public $consistency;

    /**
     * @description The time when the job was created.
     *
     * Use the UTC time format: yyyy-MM-ddTHH:mm:ssZ
     * @example 2019-09-08T16:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The name of the data source.
     *
     * @example test-kafka
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @example test_kafka
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @description The destination fields.
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
     * @example 5
     *
     * @var int
     */
    public $errorLimitCount;

    /**
     * @description The information about the job status. For example, if the job is in the Exception state, the cause of the exception is displayed. If the job is in the Running state, this parameter is left empty.
     *
     * @example ""
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example EARLIEST /  LATEST
     *
     * @var string
     */
    public $fallbackOffset;

    /**
     * @example test_group
     *
     * @var string
     */
    public $groupName;

    /**
     * @example DATABASE: adbpgss_test
     * group.id: testgroup
     * @var string
     */
    public $jobConfig;

    /**
     * @description The description of the job.
     *
     * @example test_job
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
     * @var string[]
     */
    public $matchColumns;

    /**
     * @example basic/professional
     *
     * @var string
     */
    public $mode;

    /**
     * @description The time when the job was last modified.
     *
     * Use the UTC time format: yyyy-MM-ddTHH:mm:ssZ
     * @example 2019-09-08T17:00:00Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The password of the account.
     *
     * @example pwd123
     *
     * @var string
     */
    public $password;

    /**
     * @description The request ID.
     *
     * @example B4CAF581-2AC7-41AD-8940-D56DF7AADF5B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The source fields.
     *
     * @var string[]
     */
    public $srcColumns;

    /**
     * @description The status of the job. Valid values:
     *
     *   Init: The job is being initialized.
     *   Running: The job is running.
     *   Exception: The job encounters an exception.
     *   Paused: The job is paused.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
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
        'account'         => 'Account',
        'consistency'     => 'Consistency',
        'createTime'      => 'CreateTime',
        'dataSourceId'    => 'DataSourceId',
        'dataSourceName'  => 'DataSourceName',
        'destColumns'     => 'DestColumns',
        'destDatabase'    => 'DestDatabase',
        'destSchema'      => 'DestSchema',
        'destTable'       => 'DestTable',
        'errorLimitCount' => 'ErrorLimitCount',
        'errorMessage'    => 'ErrorMessage',
        'fallbackOffset'  => 'FallbackOffset',
        'groupName'       => 'GroupName',
        'jobConfig'       => 'JobConfig',
        'jobDescription'  => 'JobDescription',
        'jobId'           => 'JobId',
        'jobName'         => 'JobName',
        'matchColumns'    => 'MatchColumns',
        'mode'            => 'Mode',
        'modifyTime'      => 'ModifyTime',
        'password'        => 'Password',
        'requestId'       => 'RequestId',
        'srcColumns'      => 'SrcColumns',
        'status'          => 'Status',
        'updateColumns'   => 'UpdateColumns',
        'writeMode'       => 'WriteMode',
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
        if (null !== $this->errorLimitCount) {
            $res['ErrorLimitCount'] = $this->errorLimitCount;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->fallbackOffset) {
            $res['FallbackOffset'] = $this->fallbackOffset;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->jobConfig) {
            $res['JobConfig'] = $this->jobConfig;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return DescribeStreamingJobResponseBody
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
        if (isset($map['ErrorLimitCount'])) {
            $model->errorLimitCount = $map['ErrorLimitCount'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['FallbackOffset'])) {
            $model->fallbackOffset = $map['FallbackOffset'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['JobConfig'])) {
            $model->jobConfig = $map['JobConfig'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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

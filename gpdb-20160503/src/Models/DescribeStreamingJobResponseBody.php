<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeStreamingJobResponseBody extends Model
{
    /**
     * @description Target database account.
     *
     * @example test-account
     *
     * @var string
     */
    public $account;

    /**
     * @description Delivery guarantee.
     *
     * @example ATLEAST / EXACTLY
     *
     * @var string
     */
    public $consistency;

    /**
     * @description Creation time.
     *
     * Use the UTC time format: yyyy-MM-ddTHH:mm:ssZ
     * @example 2019-09-08T16:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Data source ID.
     *
     * @example 2
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @description Data source name.
     *
     * @example test_kafka
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @description Target data table mapping field list.
     *
     * @var string[]
     */
    public $destColumns;

    /**
     * @description Target database name.
     *
     * @example dest-db
     *
     * @var string
     */
    public $destDatabase;

    /**
     * @description Target namespace.
     *
     * @example dest-schema
     *
     * @var string
     */
    public $destSchema;

    /**
     * @description Target table name.
     *
     * @example dest-table
     *
     * @var string
     */
    public $destTable;

    /**
     * @description When data in Kafka does not match the ADBPG target table, it can cause write failures. This value represents the number of error rows allowed; if exceeded, the task will fail.
     *
     * @example 5
     *
     * @var int
     */
    public $errorLimitCount;

    /**
     * @description Service status information, such as the reason for an exception. It is empty in the normal Running state.
     *
     * @example ""
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description Fallback offset, which is the fallback position
     *
     * - The FallbackOffset parameter defines the behavior when the consumer has not requested a specific offset to consume or the requested offset exceeds the current record\\"s offset information in the Kafka cluster. You can choose to start consuming from the earliest (newest) or latest (oldest) offset.
     * @example EARLIEST /  LATEST
     *
     * @var string
     */
    public $fallbackOffset;

    /**
     * @description Kafka group name
     *
     * @example test_group
     *
     * @var string
     */
    public $groupName;

    /**
     * @description Job configuration file.
     *
     * @example DATABASE: adbpgss_test
     * group.id: testgroup
     * @var string
     */
    public $jobConfig;

    /**
     * @description Job description.
     *
     * @example test_job
     *
     * @var string
     */
    public $jobDescription;

    /**
     * @description Job ID.
     *
     * @example 1
     *
     * @var string
     */
    public $jobId;

    /**
     * @description Job name.
     *
     * @example test-job
     *
     * @var string
     */
    public $jobName;

    /**
     * @description Match columns, usually all primary key columns of the target table. If all column values in this configuration are the same, the two rows of data are considered duplicates.
     *
     * @var string[]
     */
    public $matchColumns;

    /**
     * @description Configuration mode
     * 1. Professional mode supports submitting YAML files
     * @example basic/professional
     *
     * @var string
     */
    public $mode;

    /**
     * @description Last modified time.
     *
     * Use the UTC time format: yyyy-MM-ddTHH:mm:ssZ
     * @example 2019-09-08T17:00:00Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description Target database password.
     *
     * @example pwd123
     *
     * @var string
     */
    public $password;

    /**
     * @description Request ID.
     *
     * @example B4CAF581-2AC7-41AD-8940-D56DF7AADF5B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Source field list.
     *
     * @var string[]
     */
    public $srcColumns;

    /**
     * @description Service status, with possible values:
     *
     * - Paused: Paused
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description Update columns, usually all non-primary key columns of the target table. When data duplication is determined through MatchColumns, updating the UpdateColumns column values will result in new data overwriting old data.
     *
     * @var string[]
     */
    public $updateColumns;

    /**
     * @description Write mode.
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

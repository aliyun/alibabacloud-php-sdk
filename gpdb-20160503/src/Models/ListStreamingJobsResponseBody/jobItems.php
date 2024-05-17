<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListStreamingJobsResponseBody;

use AlibabaCloud\Tea\Model;

class jobItems extends Model
{
    /**
     * @example test-account
     *
     * @var string
     */
    public $account;

    /**
     * @var string
     */
    public $consistency;

    /**
     * @example 2019-09-08T16:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @var string[]
     */
    public $destColumns;

    /**
     * @var string
     */
    public $destDatabase;

    /**
     * @var string
     */
    public $destSchema;

    /**
     * @example dest-table
     *
     * @var string
     */
    public $destTable;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $fallbackOffset;

    /**
     * @var string
     */
    public $jobDescription;

    /**
     * @example 1
     *
     * @var string
     */
    public $jobId;

    /**
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
     * @example Basic / Professional
     *
     * @var string
     */
    public $mode;

    /**
     * @example 2019-09-08T17:00:00Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example pwd123
     *
     * @var string
     */
    public $password;

    /**
     * @var string[]
     */
    public $srcColumns;

    /**
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

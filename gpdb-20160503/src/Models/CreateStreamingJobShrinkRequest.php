<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CreateStreamingJobShrinkRequest extends Model
{
    /**
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
     * @description This parameter is required.
     *
     * @example gp-bp10g78o9807yv9h3
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $destColumnsShrink;

    /**
     * @example dest-db
     *
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
     * @var int
     */
    public $errorLimitCount;

    /**
     * @example earliest /  latest
     *
     * @var string
     */
    public $fallbackOffset;

    /**
     * @example group_name。
     *
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $jobConfig;

    /**
     * @example test-job
     *
     * @var string
     */
    public $jobDescription;

    /**
     * @description This parameter is required.
     *
     * @example test-job
     *
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $matchColumnsShrink;

    /**
     * @example basic / professional
     *
     * @var string
     */
    public $mode;

    /**
     * @example pwd123
     *
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $srcColumnsShrink;

    /**
     * @example true
     *
     * @var bool
     */
    public $tryRun;

    /**
     * @var string
     */
    public $updateColumnsShrink;

    /**
     * @example insert/update/merge
     *
     * @var string
     */
    public $writeMode;
    protected $_name = [
        'account'             => 'Account',
        'consistency'         => 'Consistency',
        'DBInstanceId'        => 'DBInstanceId',
        'dataSourceId'        => 'DataSourceId',
        'destColumnsShrink'   => 'DestColumns',
        'destDatabase'        => 'DestDatabase',
        'destSchema'          => 'DestSchema',
        'destTable'           => 'DestTable',
        'errorLimitCount'     => 'ErrorLimitCount',
        'fallbackOffset'      => 'FallbackOffset',
        'groupName'           => 'GroupName',
        'jobConfig'           => 'JobConfig',
        'jobDescription'      => 'JobDescription',
        'jobName'             => 'JobName',
        'matchColumnsShrink'  => 'MatchColumns',
        'mode'                => 'Mode',
        'password'            => 'Password',
        'regionId'            => 'RegionId',
        'srcColumnsShrink'    => 'SrcColumns',
        'tryRun'              => 'TryRun',
        'updateColumnsShrink' => 'UpdateColumns',
        'writeMode'           => 'WriteMode',
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
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->destColumnsShrink) {
            $res['DestColumns'] = $this->destColumnsShrink;
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
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->matchColumnsShrink) {
            $res['MatchColumns'] = $this->matchColumnsShrink;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->srcColumnsShrink) {
            $res['SrcColumns'] = $this->srcColumnsShrink;
        }
        if (null !== $this->tryRun) {
            $res['TryRun'] = $this->tryRun;
        }
        if (null !== $this->updateColumnsShrink) {
            $res['UpdateColumns'] = $this->updateColumnsShrink;
        }
        if (null !== $this->writeMode) {
            $res['WriteMode'] = $this->writeMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStreamingJobShrinkRequest
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['DestColumns'])) {
            $model->destColumnsShrink = $map['DestColumns'];
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
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['MatchColumns'])) {
            $model->matchColumnsShrink = $map['MatchColumns'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SrcColumns'])) {
            $model->srcColumnsShrink = $map['SrcColumns'];
        }
        if (isset($map['TryRun'])) {
            $model->tryRun = $map['TryRun'];
        }
        if (isset($map['UpdateColumns'])) {
            $model->updateColumnsShrink = $map['UpdateColumns'];
        }
        if (isset($map['WriteMode'])) {
            $model->writeMode = $map['WriteMode'];
        }

        return $model;
    }
}

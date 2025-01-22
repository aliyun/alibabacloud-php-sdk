<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class ModifyStreamingJobShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $account;
    /**
     * @var string
     */
    public $consistency;
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var string
     */
    public $destColumnsShrink;
    /**
     * @var string
     */
    public $destDatabase;
    /**
     * @var string
     */
    public $destSchema;
    /**
     * @var string
     */
    public $destTable;
    /**
     * @var int
     */
    public $errorLimitCount;
    /**
     * @var string
     */
    public $fallbackOffset;
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var string
     */
    public $jobConfig;
    /**
     * @var string
     */
    public $jobDescription;
    /**
     * @var int
     */
    public $jobId;
    /**
     * @var string
     */
    public $matchColumnsShrink;
    /**
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
     * @var bool
     */
    public $tryRun;
    /**
     * @var string
     */
    public $updateColumnsShrink;
    /**
     * @var string
     */
    public $writeMode;
    protected $_name = [
        'account'             => 'Account',
        'consistency'         => 'Consistency',
        'DBInstanceId'        => 'DBInstanceId',
        'destColumnsShrink'   => 'DestColumns',
        'destDatabase'        => 'DestDatabase',
        'destSchema'          => 'DestSchema',
        'destTable'           => 'DestTable',
        'errorLimitCount'     => 'ErrorLimitCount',
        'fallbackOffset'      => 'FallbackOffset',
        'groupName'           => 'GroupName',
        'jobConfig'           => 'JobConfig',
        'jobDescription'      => 'JobDescription',
        'jobId'               => 'JobId',
        'matchColumnsShrink'  => 'MatchColumns',
        'password'            => 'Password',
        'regionId'            => 'RegionId',
        'srcColumnsShrink'    => 'SrcColumns',
        'tryRun'              => 'TryRun',
        'updateColumnsShrink' => 'UpdateColumns',
        'writeMode'           => 'WriteMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->matchColumnsShrink) {
            $res['MatchColumns'] = $this->matchColumnsShrink;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['MatchColumns'])) {
            $model->matchColumnsShrink = $map['MatchColumns'];
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

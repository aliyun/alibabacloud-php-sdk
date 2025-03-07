<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartJobsResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartJobsResponseBody\smartJobList\inputConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartJobsResponseBody\smartJobList\outputConfig;
use AlibabaCloud\Tea\Model;

class smartJobList extends Model
{
    /**
     * @description The time when the job was created.
     *
     * @example 2020-12-26T04:11:10Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The job description.
     *
     * @example 测试描述
     *
     * @var string
     */
    public $description;

    /**
     * @description The editing configurations.
     *
     * @example {"AudioConfig":{},"InputConfig":""}
     *
     * @var string
     */
    public $editingConfig;

    /**
     * @description The input configurations.
     *
     * @var inputConfig
     */
    public $inputConfig;

    /**
     * @description The job ID.
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The job state.
     *
     * Valid values:
     *
     *   Finished: The job is complete.
     *   Failed: The job failed.
     *   Executing: The job is in progress.
     *   Created: The job is created.
     *
     * @example Finished
     *
     * @var string
     */
    public $jobState;

    /**
     * @description The job type.
     *
     * Valid values:
     *
     *   ASR: ASR job.
     *   DynamicChart: dynamic chart job.
     *   TextToSpeech: intelligent audio production job.
     *
     * @example ASR
     *
     * @var string
     */
    public $jobType;

    /**
     * @description The time when the job was last modified.
     *
     * @example 2020-12-26T04:11:10Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The output configurations.
     *
     * @var outputConfig
     */
    public $outputConfig;

    /**
     * @description The job title.
     *
     * @example 测试标题
     *
     * @var string
     */
    public $title;

    /**
     * @description The user-defined data.
     *
     * @example {"user":"data"}
     *
     * @var string
     */
    public $userData;

    /**
     * @description The user ID.
     *
     * @example 1084506228******
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'description'   => 'Description',
        'editingConfig' => 'EditingConfig',
        'inputConfig'   => 'InputConfig',
        'jobId'         => 'JobId',
        'jobState'      => 'JobState',
        'jobType'       => 'JobType',
        'modifiedTime'  => 'ModifiedTime',
        'outputConfig'  => 'OutputConfig',
        'title'         => 'Title',
        'userData'      => 'UserData',
        'userId'        => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->editingConfig) {
            $res['EditingConfig'] = $this->editingConfig;
        }
        if (null !== $this->inputConfig) {
            $res['InputConfig'] = null !== $this->inputConfig ? $this->inputConfig->toMap() : null;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobState) {
            $res['JobState'] = $this->jobState;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = null !== $this->outputConfig ? $this->outputConfig->toMap() : null;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return smartJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EditingConfig'])) {
            $model->editingConfig = $map['EditingConfig'];
        }
        if (isset($map['InputConfig'])) {
            $model->inputConfig = inputConfig::fromMap($map['InputConfig']);
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobState'])) {
            $model->jobState = $map['JobState'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['OutputConfig'])) {
            $model->outputConfig = outputConfig::fromMap($map['OutputConfig']);
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetRunResponseBody\executeOptions;
use AlibabaCloud\Tea\Model;

class GetRunResponseBody extends Model
{
    /**
     * @description 应用名称
     *
     * @var string
     */
    public $appName;

    /**
     * @description 应用版本
     *
     * @var string
     */
    public $appRevision;

    /**
     * @description 作业信息
     *
     * @var string
     */
    public $calls;

    /**
     * @description 提交时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 默认runtime值
     *
     * @var string
     */
    public $defaultRuntime;

    /**
     * @description 任务描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 结束时间
     *
     * @var string
     */
    public $endTime;

    /**
     * @description 实体对象名称
     *
     * @var string
     */
    public $entityName;

    /**
     * @description 实体类型
     *
     * @var string
     */
    public $entityType;

    /**
     * @description 任务执行目录
     *
     * @var string
     */
    public $executeDirectory;

    /**
     * @description 任务配置
     *
     * @var executeOptions
     */
    public $executeOptions;

    /**
     * @description 错误信息
     *
     * @var string
     */
    public $failures;

    /**
     * @description 主机ID
     *
     * @var string
     */
    public $hostId;

    /**
     * @description 任务输入
     *
     * @var string
     */
    public $inputs;

    /**
     * @description 任务标签
     *
     * @var string[]
     */
    public $labels;

    /**
     * @description 输出拷贝目录
     *
     * @var string
     */
    public $outputFolder;

    /**
     * @description 任务输出
     *
     * @var string
     */
    public $outputs;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 任务ID
     *
     * @var string
     */
    public $runId;

    /**
     * @description 任务名称
     *
     * @var string
     */
    public $runName;

    /**
     * @description 应用来源
     *
     * @var string
     */
    public $source;

    /**
     * @description 开始时间
     *
     * @var string
     */
    public $startTime;

    /**
     * @description 任务状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 提交ID
     *
     * @var string
     */
    public $submissionId;

    /**
     * @description 时序信息
     *
     * @var string
     */
    public $timing;

    /**
     * @description 用户ID
     *
     * @var string
     */
    public $user;

    /**
     * @description 工作空间名字
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'appName'          => 'AppName',
        'appRevision'      => 'AppRevision',
        'calls'            => 'Calls',
        'createTime'       => 'CreateTime',
        'defaultRuntime'   => 'DefaultRuntime',
        'description'      => 'Description',
        'endTime'          => 'EndTime',
        'entityName'       => 'EntityName',
        'entityType'       => 'EntityType',
        'executeDirectory' => 'ExecuteDirectory',
        'executeOptions'   => 'ExecuteOptions',
        'failures'         => 'Failures',
        'hostId'           => 'HostId',
        'inputs'           => 'Inputs',
        'labels'           => 'Labels',
        'outputFolder'     => 'OutputFolder',
        'outputs'          => 'Outputs',
        'requestId'        => 'RequestId',
        'runId'            => 'RunId',
        'runName'          => 'RunName',
        'source'           => 'Source',
        'startTime'        => 'StartTime',
        'status'           => 'Status',
        'submissionId'     => 'SubmissionId',
        'timing'           => 'Timing',
        'user'             => 'User',
        'workspace'        => 'Workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appRevision) {
            $res['AppRevision'] = $this->appRevision;
        }
        if (null !== $this->calls) {
            $res['Calls'] = $this->calls;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->defaultRuntime) {
            $res['DefaultRuntime'] = $this->defaultRuntime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->executeDirectory) {
            $res['ExecuteDirectory'] = $this->executeDirectory;
        }
        if (null !== $this->executeOptions) {
            $res['ExecuteOptions'] = null !== $this->executeOptions ? $this->executeOptions->toMap() : null;
        }
        if (null !== $this->failures) {
            $res['Failures'] = $this->failures;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->inputs) {
            $res['Inputs'] = $this->inputs;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->outputFolder) {
            $res['OutputFolder'] = $this->outputFolder;
        }
        if (null !== $this->outputs) {
            $res['Outputs'] = $this->outputs;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->runId) {
            $res['RunId'] = $this->runId;
        }
        if (null !== $this->runName) {
            $res['RunName'] = $this->runName;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->submissionId) {
            $res['SubmissionId'] = $this->submissionId;
        }
        if (null !== $this->timing) {
            $res['Timing'] = $this->timing;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRunResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppRevision'])) {
            $model->appRevision = $map['AppRevision'];
        }
        if (isset($map['Calls'])) {
            $model->calls = $map['Calls'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DefaultRuntime'])) {
            $model->defaultRuntime = $map['DefaultRuntime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['ExecuteDirectory'])) {
            $model->executeDirectory = $map['ExecuteDirectory'];
        }
        if (isset($map['ExecuteOptions'])) {
            $model->executeOptions = executeOptions::fromMap($map['ExecuteOptions']);
        }
        if (isset($map['Failures'])) {
            $model->failures = $map['Failures'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['Inputs'])) {
            $model->inputs = $map['Inputs'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['OutputFolder'])) {
            $model->outputFolder = $map['OutputFolder'];
        }
        if (isset($map['Outputs'])) {
            $model->outputs = $map['Outputs'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RunId'])) {
            $model->runId = $map['RunId'];
        }
        if (isset($map['RunName'])) {
            $model->runName = $map['RunName'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubmissionId'])) {
            $model->submissionId = $map['SubmissionId'];
        }
        if (isset($map['Timing'])) {
            $model->timing = $map['Timing'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}

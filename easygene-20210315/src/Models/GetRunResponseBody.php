<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetRunResponseBody\executeOptions;
use AlibabaCloud\Tea\Model;

class GetRunResponseBody extends Model
{
    /**
     * @example Sentieon
     *
     * @var string
     */
    public $appName;

    /**
     * @example 1
     *
     * @var string
     */
    public $appRevision;

    /**
     * @var string[]
     */
    public $billingInstanceIds;

    /**
     * @example {}
     *
     * @var string
     */
    public $calls;

    /**
     * @example 2021-06-10T13:30:20.414557061Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example {}
     *
     * @var string
     */
    public $defaultRuntime;

    /**
     * @example test run
     *
     * @var string
     */
    public $description;

    /**
     * @example 2021-06-10T13:36:20.405878292Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example s1
     *
     * @var string
     */
    public $entityName;

    /**
     * @example sample
     *
     * @var string
     */
    public $entityType;

    /**
     * @example oss://my-bucket/exec/
     *
     * @var string
     */
    public $executeDirectory;

    /**
     * @var executeOptions
     */
    public $executeOptions;

    /**
     * @example {}
     *
     * @var string
     */
    public $failures;

    /**
     * @example easygene.cn-beijing.aliyuncs.com
     *
     * @var string
     */
    public $hostId;

    /**
     * @example {     "workflow1.task1.param1": "helloooo.txt",     "workflow1.task1.param2": "abc",     "workflow1.task2.param1": "new_helloooo.txt",     "workflow1.task2.param2": "def" }
     *
     * @var string
     */
    public $inputs;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @example oss://my-bucket/output/
     *
     * @var string
     */
    public $outputFolder;

    /**
     * @example {         "workflow1.bam": "oss://my-bucket/test.bam",         "workflow1.vcf": "oss://my-bucket/test.vcf"     }
     *
     * @var string
     */
    public $outputs;

    /**
     * @example DA980AD0-158F-44F3-847D-5EAB96C0EB6B
     *
     * @var string
     */
    public $requestId;

    /**
     * @example run-13BeYuxc0fxO24uA75UppTiMRoQ
     *
     * @var string
     */
    public $runId;

    /**
     * @example test-run
     *
     * @var string
     */
    public $runName;

    /**
     * @example EasyGene
     *
     * @var string
     */
    public $source;

    /**
     * @example 2021-06-10T13:30:24.414557061Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example sub-13BeXWnGvrOl3MC124tazcJVKaV
     *
     * @var string
     */
    public $submissionId;

    /**
     * @example {}
     *
     * @var string
     */
    public $timing;

    /**
     * @example 13579222
     *
     * @var string
     */
    public $user;

    /**
     * @example test-workspace
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'appName'            => 'AppName',
        'appRevision'        => 'AppRevision',
        'billingInstanceIds' => 'BillingInstanceIds',
        'calls'              => 'Calls',
        'createTime'         => 'CreateTime',
        'defaultRuntime'     => 'DefaultRuntime',
        'description'        => 'Description',
        'endTime'            => 'EndTime',
        'entityName'         => 'EntityName',
        'entityType'         => 'EntityType',
        'executeDirectory'   => 'ExecuteDirectory',
        'executeOptions'     => 'ExecuteOptions',
        'failures'           => 'Failures',
        'hostId'             => 'HostId',
        'inputs'             => 'Inputs',
        'labels'             => 'Labels',
        'outputFolder'       => 'OutputFolder',
        'outputs'            => 'Outputs',
        'requestId'          => 'RequestId',
        'runId'              => 'RunId',
        'runName'            => 'RunName',
        'source'             => 'Source',
        'startTime'          => 'StartTime',
        'status'             => 'Status',
        'submissionId'       => 'SubmissionId',
        'timing'             => 'Timing',
        'user'               => 'User',
        'workspace'          => 'Workspace',
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
        if (null !== $this->billingInstanceIds) {
            $res['BillingInstanceIds'] = $this->billingInstanceIds;
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
        if (isset($map['BillingInstanceIds'])) {
            if (!empty($map['BillingInstanceIds'])) {
                $model->billingInstanceIds = $map['BillingInstanceIds'];
            }
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models\ListUserActiveRunsResponseBody;

use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListUserActiveRunsResponseBody\runs\executeOptions;
use AlibabaCloud\Tea\Model;

class runs extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appRevision;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $defaultRuntime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $entityName;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $executeDirectory;

    /**
     * @var executeOptions
     */
    public $executeOptions;

    /**
     * @var string
     */
    public $inputs;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var string
     */
    public $runName;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $submissionId;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'appName'          => 'AppName',
        'appRevision'      => 'AppRevision',
        'createTime'       => 'CreateTime',
        'defaultRuntime'   => 'DefaultRuntime',
        'endTime'          => 'EndTime',
        'entityName'       => 'EntityName',
        'entityType'       => 'EntityType',
        'executeDirectory' => 'ExecuteDirectory',
        'executeOptions'   => 'ExecuteOptions',
        'inputs'           => 'Inputs',
        'labels'           => 'Labels',
        'regionId'         => 'RegionId',
        'runId'            => 'RunId',
        'runName'          => 'RunName',
        'source'           => 'Source',
        'startTime'        => 'StartTime',
        'status'           => 'Status',
        'submissionId'     => 'SubmissionId',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->defaultRuntime) {
            $res['DefaultRuntime'] = $this->defaultRuntime;
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
        if (null !== $this->inputs) {
            $res['Inputs'] = $this->inputs;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runs
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DefaultRuntime'])) {
            $model->defaultRuntime = $map['DefaultRuntime'];
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
        if (isset($map['Inputs'])) {
            $model->inputs = $map['Inputs'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}

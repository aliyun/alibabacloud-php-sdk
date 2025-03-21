<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListSnapshotJobsResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListSnapshotJobsResponseBody\jobs\input;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSnapshotJobsResponseBody\jobs\output;
use AlibabaCloud\Tea\Model;

class jobs extends Model
{
    /**
     * @description Indicates whether the snapshots were captured in asynchronous mode.
     *
     * @example true
     *
     * @var bool
     */
    public $async;

    /**
     * @description The number of snapshots.
     *
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @description The time when the job was created.
     *
     * @example 2022-07-12T16:17:54Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the job was complete.
     *
     * @example 2022-07-12T16:30:54Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The input of the job.
     *
     * @var input
     */
    public $input;

    /**
     * @description The job ID.
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The time when the job was last modified.
     *
     * @example 2022-07-12T16:30:54Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The name of the job.
     *
     * @example SampleJob
     *
     * @var string
     */
    public $name;

    /**
     * @description The output of the job.
     *
     * @var output
     */
    public $output;

    /**
     * @description The ID of the MPS queue to which the job was submitted.
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @description The state of the job.
     *
     *   **Success**: The job is successful.
     *   **Fail**: The job failed.
     *   **Init**: The job is submitted.
     *
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the job was submitted.
     *
     * @example 2022-07-12T16:17:54Z
     *
     * @var string
     */
    public $submitTime;

    /**
     * @description The template ID.
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The request trigger source.
     *
     * Valid values:
     *
     *   Console
     *   Workflow
     *   API
     *
     * @example API
     *
     * @var string
     */
    public $triggerSource;

    /**
     * @description The type of the job.
     *
     * Valid values:
     *
     *   WebVtt
     *   Sprite
     *   Normal
     *
     * @example Sprite
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'async' => 'Async',
        'count' => 'Count',
        'createTime' => 'CreateTime',
        'finishTime' => 'FinishTime',
        'input' => 'Input',
        'jobId' => 'JobId',
        'modifiedTime' => 'ModifiedTime',
        'name' => 'Name',
        'output' => 'Output',
        'pipelineId' => 'PipelineId',
        'status' => 'Status',
        'submitTime' => 'SubmitTime',
        'templateId' => 'TemplateId',
        'triggerSource' => 'TriggerSource',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->output) {
            $res['Output'] = null !== $this->output ? $this->output->toMap() : null;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->triggerSource) {
            $res['TriggerSource'] = $this->triggerSource;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Output'])) {
            $model->output = output::fromMap($map['Output']);
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TriggerSource'])) {
            $model->triggerSource = $map['TriggerSource'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

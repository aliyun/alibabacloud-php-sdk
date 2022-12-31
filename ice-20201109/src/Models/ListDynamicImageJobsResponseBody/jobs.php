<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListDynamicImageJobsResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListDynamicImageJobsResponseBody\jobs\input;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListDynamicImageJobsResponseBody\jobs\output;
use AlibabaCloud\Tea\Model;

class jobs extends Model
{
    /**
     * @example 2022-07-12T16:17:54Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2022-07-12T16:30:54Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @var input
     */
    public $input;

    /**
     * @example ****cdb3e74639973036bc84****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 2022-07-12T16:30:54Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example SampleJob
     *
     * @var string
     */
    public $name;

    /**
     * @var output
     */
    public $output;

    /**
     * @example ****cdb3e74639973036bc84****
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @example 2022-07-12T16:17:54Z
     *
     * @var string
     */
    public $submitTime;

    /**
     * @example ****cdb3e74639973036bc84****
     *
     * @var string
     */
    public $templateId;

    /**
     * @example API
     *
     * @var string
     */
    public $triggerSource;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'finishTime'    => 'FinishTime',
        'input'         => 'Input',
        'jobId'         => 'JobId',
        'modifiedTime'  => 'ModifiedTime',
        'name'          => 'Name',
        'output'        => 'Output',
        'pipelineId'    => 'PipelineId',
        'status'        => 'Status',
        'submitTime'    => 'SubmitTime',
        'templateId'    => 'TemplateId',
        'triggerSource' => 'TriggerSource',
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

        return $model;
    }
}

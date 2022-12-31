<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetDynamicImageJobResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetDynamicImageJobResponseBody\dynamicImageJob\input;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetDynamicImageJobResponseBody\dynamicImageJob\output;
use AlibabaCloud\Tea\Model;

class dynamicImageJob extends Model
{
    /**
     * @example ResourceNotFound
     *
     * @var string
     */
    public $code;

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
     * @example ****d80e4e4044975745c14b****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example The specified resource for "CustomTemplate" could not be found.
     *
     * @var string
     */
    public $message;

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
     * @example http://test-bucket.oss-cn-shanghai.aliyuncs.com/output.gif
     *
     * @var string
     */
    public $outputUrl;

    /**
     * @example ****d80e4e4044975745c14b****
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
     * @example {"Format":"gif","Fps":5,"Height":1080,"Width":1920}
     *
     * @var string
     */
    public $templateConfig;

    /**
     * @example ****d80e4e4044975745c14b****
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

    /**
     * @example {"sampleParam": "sampleValue"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'code'           => 'Code',
        'createTime'     => 'CreateTime',
        'finishTime'     => 'FinishTime',
        'input'          => 'Input',
        'jobId'          => 'JobId',
        'message'        => 'Message',
        'modifiedTime'   => 'ModifiedTime',
        'name'           => 'Name',
        'output'         => 'Output',
        'outputUrl'      => 'OutputUrl',
        'pipelineId'     => 'PipelineId',
        'status'         => 'Status',
        'submitTime'     => 'SubmitTime',
        'templateConfig' => 'TemplateConfig',
        'templateId'     => 'TemplateId',
        'triggerSource'  => 'TriggerSource',
        'userData'       => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
        if (null !== $this->outputUrl) {
            $res['OutputUrl'] = $this->outputUrl;
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
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = $this->templateConfig;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->triggerSource) {
            $res['TriggerSource'] = $this->triggerSource;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dynamicImageJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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
        if (isset($map['OutputUrl'])) {
            $model->outputUrl = $map['OutputUrl'];
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
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = $map['TemplateConfig'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TriggerSource'])) {
            $model->triggerSource = $map['TriggerSource'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}

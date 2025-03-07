<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\QueryIProductionJobResponseBody\input;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryIProductionJobResponseBody\output;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryIProductionJobResponseBody\scheduleConfig;
use AlibabaCloud\Tea\Model;

class QueryIProductionJobResponseBody extends Model
{
    /**
     * @description The time when the job was created.
     *
     * @example 2022-07-07T07:16:11Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the job was complete.
     *
     * @example 2021-11-26T14:50:25Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The name of the algorithm that you want to use for the job. Valid values:
     *
     *   **Cover**: This algorithm intelligently generates a thumbnail image for a video.
     *   **VideoClip**: This algorithm intelligently generates a summary for a video.
     *   **VideoDelogo**: This algorithm removes logos from a video.
     *   **VideoDetext**: This algorithm removes captions from a video.
     *
     * @example Cover
     *
     * @var string
     */
    public $functionName;

    /**
     * @description The input file.
     *
     * @var input
     */
    public $input;

    /**
     * @description The ID of the intelligent production job.
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The algorithm-specific parameters. The parameters are specified as JSON objects and vary based on the algorithm.
     *
     * @example {"Model":"gif"}
     *
     * @var string
     */
    public $jobParams;

    /**
     * @description The name of the intelligent production job.
     *
     * @var string
     */
    public $name;

    /**
     * @description The output file.
     *
     * @var output
     */
    public $output;

    /**
     * @description The output files.
     *
     * @var string[]
     */
    public $outputFiles;

    /**
     * @description The URLs of the output files.
     *
     * @var string[]
     */
    public $outputUrls;

    /**
     * @description The ID of the request.
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The output of the algorithm. The output is in JSON format and varies based on the algorithm. For more information, see the "Parameters of Result" section of this topic.
     *
     * @example {}
     *
     * @var string
     */
    public $result;

    /**
     * @description The scheduling configuration.
     *
     * @var scheduleConfig
     */
    public $scheduleConfig;

    /**
     * @description The status of the job. Valid values:
     *
     *   Queuing: The job is waiting in the queue.
     *   Analysing: The job is in progress.
     *   Fail: The job failed.
     *   Success: The job was successful.
     *
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @description The template ID.
     *
     * @example ****96e8864746a0b6f3****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The user-defined data that is returned in the response.
     *
     * @example {"test":1}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'finishTime'     => 'FinishTime',
        'functionName'   => 'FunctionName',
        'input'          => 'Input',
        'jobId'          => 'JobId',
        'jobParams'      => 'JobParams',
        'name'           => 'Name',
        'output'         => 'Output',
        'outputFiles'    => 'OutputFiles',
        'outputUrls'     => 'OutputUrls',
        'requestId'      => 'RequestId',
        'result'         => 'Result',
        'scheduleConfig' => 'ScheduleConfig',
        'status'         => 'Status',
        'templateId'     => 'TemplateId',
        'userData'       => 'UserData',
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
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobParams) {
            $res['JobParams'] = $this->jobParams;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->output) {
            $res['Output'] = null !== $this->output ? $this->output->toMap() : null;
        }
        if (null !== $this->outputFiles) {
            $res['OutputFiles'] = $this->outputFiles;
        }
        if (null !== $this->outputUrls) {
            $res['OutputUrls'] = $this->outputUrls;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->scheduleConfig) {
            $res['ScheduleConfig'] = null !== $this->scheduleConfig ? $this->scheduleConfig->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryIProductionJobResponseBody
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
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobParams'])) {
            $model->jobParams = $map['JobParams'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Output'])) {
            $model->output = output::fromMap($map['Output']);
        }
        if (isset($map['OutputFiles'])) {
            if (!empty($map['OutputFiles'])) {
                $model->outputFiles = $map['OutputFiles'];
            }
        }
        if (isset($map['OutputUrls'])) {
            if (!empty($map['OutputUrls'])) {
                $model->outputUrls = $map['OutputUrls'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['ScheduleConfig'])) {
            $model->scheduleConfig = scheduleConfig::fromMap($map['ScheduleConfig']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}

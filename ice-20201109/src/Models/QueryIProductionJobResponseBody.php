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
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var input
     */
    public $input;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobParams;

    /**
     * @var string
     */
    public $name;

    /**
     * @var output
     */
    public $output;

    /**
     * @var string[]
     */
    public $outputFiles;

    /**
     * @var string[]
     */
    public $outputUrls;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $result;

    /**
     * @var scheduleConfig
     */
    public $scheduleConfig;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $templateId;

    /**
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

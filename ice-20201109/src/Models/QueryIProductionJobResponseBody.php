<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryIProductionJobResponseBody\input;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryIProductionJobResponseBody\output;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryIProductionJobResponseBody\scheduleConfig;

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
        if (null !== $this->input) {
            $this->input->validate();
        }
        if (null !== $this->output) {
            $this->output->validate();
        }
        if (\is_array($this->outputFiles)) {
            Model::validateArray($this->outputFiles);
        }
        if (\is_array($this->outputUrls)) {
            Model::validateArray($this->outputUrls);
        }
        if (null !== $this->scheduleConfig) {
            $this->scheduleConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Input'] = null !== $this->input ? $this->input->toArray($noStream) : $this->input;
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
            $res['Output'] = null !== $this->output ? $this->output->toArray($noStream) : $this->output;
        }

        if (null !== $this->outputFiles) {
            if (\is_array($this->outputFiles)) {
                $res['OutputFiles'] = [];
                $n1                 = 0;
                foreach ($this->outputFiles as $item1) {
                    $res['OutputFiles'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->outputUrls) {
            if (\is_array($this->outputUrls)) {
                $res['OutputUrls'] = [];
                $n1                = 0;
                foreach ($this->outputUrls as $item1) {
                    $res['OutputUrls'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->scheduleConfig) {
            $res['ScheduleConfig'] = null !== $this->scheduleConfig ? $this->scheduleConfig->toArray($noStream) : $this->scheduleConfig;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->outputFiles = [];
                $n1                 = 0;
                foreach ($map['OutputFiles'] as $item1) {
                    $model->outputFiles[$n1++] = $item1;
                }
            }
        }

        if (isset($map['OutputUrls'])) {
            if (!empty($map['OutputUrls'])) {
                $model->outputUrls = [];
                $n1                = 0;
                foreach ($map['OutputUrls'] as $item1) {
                    $model->outputUrls[$n1++] = $item1;
                }
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

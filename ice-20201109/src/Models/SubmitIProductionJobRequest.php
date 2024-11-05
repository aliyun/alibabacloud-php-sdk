<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitIProductionJobRequest\input;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitIProductionJobRequest\output;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitIProductionJobRequest\scheduleConfig;
use AlibabaCloud\Tea\Model;

class SubmitIProductionJobRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example Cover
     *
     * @var string
     */
    public $functionName;

    /**
     * @description This parameter is required.
     *
     * @var input
     */
    public $input;

    /**
     * @example {"Model":"gif"}
     *
     * @var string
     */
    public $jobParams;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @var output
     */
    public $output;

    /**
     * @var scheduleConfig
     */
    public $scheduleConfig;

    /**
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $templateId;

    /**
     * @example {"test":1}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'functionName'   => 'FunctionName',
        'input'          => 'Input',
        'jobParams'      => 'JobParams',
        'modelId'        => 'ModelId',
        'name'           => 'Name',
        'output'         => 'Output',
        'scheduleConfig' => 'ScheduleConfig',
        'templateId'     => 'TemplateId',
        'userData'       => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->jobParams) {
            $res['JobParams'] = $this->jobParams;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->output) {
            $res['Output'] = null !== $this->output ? $this->output->toMap() : null;
        }
        if (null !== $this->scheduleConfig) {
            $res['ScheduleConfig'] = null !== $this->scheduleConfig ? $this->scheduleConfig->toMap() : null;
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
     * @return SubmitIProductionJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['JobParams'])) {
            $model->jobParams = $map['JobParams'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Output'])) {
            $model->output = output::fromMap($map['Output']);
        }
        if (isset($map['ScheduleConfig'])) {
            $model->scheduleConfig = scheduleConfig::fromMap($map['ScheduleConfig']);
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

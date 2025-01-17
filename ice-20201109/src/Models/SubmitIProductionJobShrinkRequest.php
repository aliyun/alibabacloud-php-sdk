<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SubmitIProductionJobShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $functionName;
    /**
     * @var string
     */
    public $inputShrink;
    /**
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
     * @var string
     */
    public $outputShrink;
    /**
     * @var string
     */
    public $scheduleConfigShrink;
    /**
     * @var string
     */
    public $templateId;
    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'functionName'         => 'FunctionName',
        'inputShrink'          => 'Input',
        'jobParams'            => 'JobParams',
        'modelId'              => 'ModelId',
        'name'                 => 'Name',
        'outputShrink'         => 'Output',
        'scheduleConfigShrink' => 'ScheduleConfig',
        'templateId'           => 'TemplateId',
        'userData'             => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }

        if (null !== $this->inputShrink) {
            $res['Input'] = $this->inputShrink;
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

        if (null !== $this->outputShrink) {
            $res['Output'] = $this->outputShrink;
        }

        if (null !== $this->scheduleConfigShrink) {
            $res['ScheduleConfig'] = $this->scheduleConfigShrink;
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
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }

        if (isset($map['Input'])) {
            $model->inputShrink = $map['Input'];
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
            $model->outputShrink = $map['Output'];
        }

        if (isset($map['ScheduleConfig'])) {
            $model->scheduleConfigShrink = $map['ScheduleConfig'];
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

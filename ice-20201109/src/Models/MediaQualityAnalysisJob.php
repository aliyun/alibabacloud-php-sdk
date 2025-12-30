<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\MediaQualityAnalysisJob\input;
use AlibabaCloud\SDK\ICE\V20201109\Models\MediaQualityAnalysisJob\scheduleConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\MediaQualityAnalysisJob\templateConfig;

class MediaQualityAnalysisJob extends Model
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
    public $name;

    /**
     * @var scheduleConfig
     */
    public $scheduleConfig;

    /**
     * @var string
     */
    public $state;

    /**
     * @var templateConfig
     */
    public $templateConfig;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var MediaQualityAnalysisJobVqaResult
     */
    public $vqaResult;
    protected $_name = [
        'createTime' => 'CreateTime',
        'finishTime' => 'FinishTime',
        'input' => 'Input',
        'jobId' => 'JobId',
        'name' => 'Name',
        'scheduleConfig' => 'ScheduleConfig',
        'state' => 'State',
        'templateConfig' => 'TemplateConfig',
        'userData' => 'UserData',
        'vqaResult' => 'VqaResult',
    ];

    public function validate()
    {
        if (null !== $this->input) {
            $this->input->validate();
        }
        if (null !== $this->scheduleConfig) {
            $this->scheduleConfig->validate();
        }
        if (null !== $this->templateConfig) {
            $this->templateConfig->validate();
        }
        if (null !== $this->vqaResult) {
            $this->vqaResult->validate();
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

        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toArray($noStream) : $this->input;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->scheduleConfig) {
            $res['ScheduleConfig'] = null !== $this->scheduleConfig ? $this->scheduleConfig->toArray($noStream) : $this->scheduleConfig;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = null !== $this->templateConfig ? $this->templateConfig->toArray($noStream) : $this->templateConfig;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        if (null !== $this->vqaResult) {
            $res['VqaResult'] = null !== $this->vqaResult ? $this->vqaResult->toArray($noStream) : $this->vqaResult;
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

        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ScheduleConfig'])) {
            $model->scheduleConfig = scheduleConfig::fromMap($map['ScheduleConfig']);
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = templateConfig::fromMap($map['TemplateConfig']);
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        if (isset($map['VqaResult'])) {
            $model->vqaResult = MediaQualityAnalysisJobVqaResult::fromMap($map['VqaResult']);
        }

        return $model;
    }
}

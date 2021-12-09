<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class SubmitVideoQualityJobRequest extends Model
{
    /**
     * @var string
     */
    public $input;

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
    public $notifyUrl;

    /**
     * @var string
     */
    public $output;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $scheduleParams;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'input'          => 'Input',
        'jobParams'      => 'JobParams',
        'modelId'        => 'ModelId',
        'notifyUrl'      => 'NotifyUrl',
        'output'         => 'Output',
        'pipelineId'     => 'PipelineId',
        'scheduleParams' => 'ScheduleParams',
        'sourceType'     => 'SourceType',
        'userData'       => 'UserData',
        'userId'         => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }
        if (null !== $this->jobParams) {
            $res['JobParams'] = $this->jobParams;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->scheduleParams) {
            $res['ScheduleParams'] = $this->scheduleParams;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitVideoQualityJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }
        if (isset($map['JobParams'])) {
            $model->jobParams = $map['JobParams'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['ScheduleParams'])) {
            $model->scheduleParams = $map['ScheduleParams'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}

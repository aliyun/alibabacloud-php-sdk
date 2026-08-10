<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707\Models\GetVideoTranslationJobResponseBody;

use AlibabaCloud\Dara\Model;

class job extends Model
{
    /**
     * @var float
     */
    public $duration;

    /**
     * @var string
     */
    public $editingProjectId;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $input;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobParameters;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $output;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'duration' => 'Duration',
        'editingProjectId' => 'EditingProjectId',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'input' => 'Input',
        'jobId' => 'JobId',
        'jobParameters' => 'JobParameters',
        'jobType' => 'JobType',
        'output' => 'Output',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->editingProjectId) {
            $res['EditingProjectId'] = $this->editingProjectId;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobParameters) {
            $res['JobParameters'] = $this->jobParameters;
        }

        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['EditingProjectId'])) {
            $model->editingProjectId = $map['EditingProjectId'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobParameters'])) {
            $model->jobParameters = $map['JobParameters'];
        }

        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

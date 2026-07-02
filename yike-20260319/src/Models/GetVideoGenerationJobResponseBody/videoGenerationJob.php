<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260319\Models\GetVideoGenerationJobResponseBody;

use AlibabaCloud\Dara\Model;

class videoGenerationJob extends Model
{
    /**
     * @var string
     */
    public $aspectRatio;

    /**
     * @var string
     */
    public $duration;

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
    public $model;

    /**
     * @var int
     */
    public $n;

    /**
     * @var string
     */
    public $output;

    /**
     * @var string
     */
    public $resolution;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'aspectRatio' => 'AspectRatio',
        'duration' => 'Duration',
        'errorMessage' => 'ErrorMessage',
        'input' => 'Input',
        'jobId' => 'JobId',
        'jobParameters' => 'JobParameters',
        'jobType' => 'JobType',
        'model' => 'Model',
        'n' => 'N',
        'output' => 'Output',
        'resolution' => 'Resolution',
        'scene' => 'Scene',
        'status' => 'Status',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aspectRatio) {
            $res['AspectRatio'] = $this->aspectRatio;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
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

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->n) {
            $res['N'] = $this->n;
        }

        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }

        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }

        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AspectRatio'])) {
            $model->aspectRatio = $map['AspectRatio'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
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

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['N'])) {
            $model->n = $map['N'];
        }

        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }

        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}

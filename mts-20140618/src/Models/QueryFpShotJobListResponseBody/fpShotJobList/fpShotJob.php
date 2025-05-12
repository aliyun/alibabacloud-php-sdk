<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob\fpShotConfig;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob\fpShotResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob\inputFile;

class fpShotJob extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var fpShotConfig
     */
    public $fpShotConfig;

    /**
     * @var fpShotResult
     */
    public $fpShotResult;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $input;

    /**
     * @var inputFile
     */
    public $inputFile;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'code' => 'Code',
        'creationTime' => 'CreationTime',
        'duration' => 'Duration',
        'fileId' => 'FileId',
        'finishTime' => 'FinishTime',
        'fpShotConfig' => 'FpShotConfig',
        'fpShotResult' => 'FpShotResult',
        'id' => 'Id',
        'input' => 'Input',
        'inputFile' => 'InputFile',
        'message' => 'Message',
        'pipelineId' => 'PipelineId',
        'state' => 'State',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        if (null !== $this->fpShotConfig) {
            $this->fpShotConfig->validate();
        }
        if (null !== $this->fpShotResult) {
            $this->fpShotResult->validate();
        }
        if (null !== $this->inputFile) {
            $this->inputFile->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->fpShotConfig) {
            $res['FpShotConfig'] = null !== $this->fpShotConfig ? $this->fpShotConfig->toArray($noStream) : $this->fpShotConfig;
        }

        if (null !== $this->fpShotResult) {
            $res['FpShotResult'] = null !== $this->fpShotResult ? $this->fpShotResult->toArray($noStream) : $this->fpShotResult;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }

        if (null !== $this->inputFile) {
            $res['InputFile'] = null !== $this->inputFile ? $this->inputFile->toArray($noStream) : $this->inputFile;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        if (isset($map['FpShotConfig'])) {
            $model->fpShotConfig = fpShotConfig::fromMap($map['FpShotConfig']);
        }

        if (isset($map['FpShotResult'])) {
            $model->fpShotResult = fpShotResult::fromMap($map['FpShotResult']);
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }

        if (isset($map['InputFile'])) {
            $model->inputFile = inputFile::fromMap($map['InputFile']);
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}

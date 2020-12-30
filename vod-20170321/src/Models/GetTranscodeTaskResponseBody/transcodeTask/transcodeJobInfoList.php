<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponseBody\transcodeTask;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponseBody\transcodeTask\transcodeJobInfoList\outputFile;
use AlibabaCloud\Tea\Model;

class transcodeJobInfoList extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var outputFile
     */
    public $outputFile;

    /**
     * @var int
     */
    public $transcodeProgress;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $transcodeTemplateId;

    /**
     * @var string
     */
    public $transcodeJobId;

    /**
     * @var string
     */
    public $definition;

    /**
     * @var string
     */
    public $inputFileUrl;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $completeTime;

    /**
     * @var string
     */
    public $transcodeJobStatus;
    protected $_name = [
        'creationTime'        => 'CreationTime',
        'errorMessage'        => 'ErrorMessage',
        'outputFile'          => 'OutputFile',
        'transcodeProgress'   => 'TranscodeProgress',
        'priority'            => 'Priority',
        'transcodeTemplateId' => 'TranscodeTemplateId',
        'transcodeJobId'      => 'TranscodeJobId',
        'definition'          => 'Definition',
        'inputFileUrl'        => 'InputFileUrl',
        'errorCode'           => 'ErrorCode',
        'completeTime'        => 'CompleteTime',
        'transcodeJobStatus'  => 'TranscodeJobStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->outputFile) {
            $res['OutputFile'] = null !== $this->outputFile ? $this->outputFile->toMap() : null;
        }
        if (null !== $this->transcodeProgress) {
            $res['TranscodeProgress'] = $this->transcodeProgress;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->transcodeTemplateId) {
            $res['TranscodeTemplateId'] = $this->transcodeTemplateId;
        }
        if (null !== $this->transcodeJobId) {
            $res['TranscodeJobId'] = $this->transcodeJobId;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->inputFileUrl) {
            $res['InputFileUrl'] = $this->inputFileUrl;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->transcodeJobStatus) {
            $res['TranscodeJobStatus'] = $this->transcodeJobStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeJobInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['OutputFile'])) {
            $model->outputFile = outputFile::fromMap($map['OutputFile']);
        }
        if (isset($map['TranscodeProgress'])) {
            $model->transcodeProgress = $map['TranscodeProgress'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['TranscodeTemplateId'])) {
            $model->transcodeTemplateId = $map['TranscodeTemplateId'];
        }
        if (isset($map['TranscodeJobId'])) {
            $model->transcodeJobId = $map['TranscodeJobId'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['InputFileUrl'])) {
            $model->inputFileUrl = $map['InputFileUrl'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }
        if (isset($map['TranscodeJobStatus'])) {
            $model->transcodeJobStatus = $map['TranscodeJobStatus'];
        }

        return $model;
    }
}

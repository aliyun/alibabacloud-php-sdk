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
    public $definition;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $inputFileUrl;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $completeTime;

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
    public $transcodeJobStatus;

    /**
     * @var string
     */
    public $transcodeTemplateId;

    /**
     * @var string
     */
    public $transcodeJobId;

    /**
     * @var outputFile
     */
    public $outputFile;
    protected $_name = [
        'definition'          => 'Definition',
        'creationTime'        => 'CreationTime',
        'inputFileUrl'        => 'InputFileUrl',
        'errorMessage'        => 'ErrorMessage',
        'errorCode'           => 'ErrorCode',
        'completeTime'        => 'CompleteTime',
        'transcodeProgress'   => 'TranscodeProgress',
        'priority'            => 'Priority',
        'transcodeJobStatus'  => 'TranscodeJobStatus',
        'transcodeTemplateId' => 'TranscodeTemplateId',
        'transcodeJobId'      => 'TranscodeJobId',
        'outputFile'          => 'OutputFile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->inputFileUrl) {
            $res['InputFileUrl'] = $this->inputFileUrl;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->transcodeProgress) {
            $res['TranscodeProgress'] = $this->transcodeProgress;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->transcodeJobStatus) {
            $res['TranscodeJobStatus'] = $this->transcodeJobStatus;
        }
        if (null !== $this->transcodeTemplateId) {
            $res['TranscodeTemplateId'] = $this->transcodeTemplateId;
        }
        if (null !== $this->transcodeJobId) {
            $res['TranscodeJobId'] = $this->transcodeJobId;
        }
        if (null !== $this->outputFile) {
            $res['OutputFile'] = null !== $this->outputFile ? $this->outputFile->toMap() : null;
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
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['InputFileUrl'])) {
            $model->inputFileUrl = $map['InputFileUrl'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }
        if (isset($map['TranscodeProgress'])) {
            $model->transcodeProgress = $map['TranscodeProgress'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['TranscodeJobStatus'])) {
            $model->transcodeJobStatus = $map['TranscodeJobStatus'];
        }
        if (isset($map['TranscodeTemplateId'])) {
            $model->transcodeTemplateId = $map['TranscodeTemplateId'];
        }
        if (isset($map['TranscodeJobId'])) {
            $model->transcodeJobId = $map['TranscodeJobId'];
        }
        if (isset($map['OutputFile'])) {
            $model->outputFile = outputFile::fromMap($map['OutputFile']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponseBody\transcodeTask;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponseBody\transcodeTask\transcodeJobInfoList\outputFile;
use AlibabaCloud\Tea\Model;

class transcodeJobInfoList extends Model
{
    /**
     * @description The progress of the transcoding job. Valid values: `[0,100]`.
     *
     * @example 2019-02-26T08:30:16Z
     *
     * @var string
     */
    public $completeTime;

    /**
     * @description The status of the transcoding job.
     *
     *   **Transcoding**
     *   **TranscodeSuccess**
     *   **TranscodeFail**
     *
     * @example 2019-02-26T08:27:16Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The encryption method of the output file. Valid values:
     *
     *   **AliyunVoDEncryption**: Alibaba Cloud proprietary cryptography
     *   **HLSEncryption**: HTTP Live Streaming (HLS) encryption
     *
     * @example LD
     *
     * @var string
     */
    public $definition;

    /**
     * @description Details about transcoding jobs.
     *
     * @example 200
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The height of the output video. Unit: pixels.
     *
     * @example ErrorMessage
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The IDs of the watermarks used by the output file.
     *
     * @example http://outin-40564*****e1403e7.oss-cn-shanghai.aliyuncs.com/customerTrans/5b95e568f8e*****47f38e/31f1184c-*****b2a2-f94-c213f.wmv
     *
     * @var string
     */
    public $inputFileUrl;

    /**
     * @description The ID of the transcoding template group.
     *
     * @var outputFile
     */
    public $outputFile;

    /**
     * @description The subtitle streams.
     *
     * @example 6
     *
     * @var string
     */
    public $priority;

    /**
     * @description The ID of the audio or video file.
     *
     * @example 38f0e513c88*****85515f9d50be188
     *
     * @var string
     */
    public $transcodeJobId;

    /**
     * @description The priority of the transcoding job.
     *
     * @example Transcoding
     *
     * @var string
     */
    public $transcodeJobStatus;

    /**
     * @description The average bitrate of the output file. Unit: Kbit/s.
     *
     * @example 100
     *
     * @var int
     */
    public $transcodeProgress;

    /**
     * @description The status of the transcoding task. Valid values:
     *
     *   **Processing**: In progress.
     *   **Partial**: Some transcoding jobs were complete.
     *   **CompleteAllSucc**: All transcoding jobs were successful.
     *   **CompleteAllFail**: All transcoding jobs failed. If an exception occurs in the source file, no transcoding job is initiated and the transcoding task fails.
     *   **CompletePartialSucc**: All transcoding jobs were complete but only some were successful.
     *
     * @example 174b0534fea3*****b51c8f0ad1374
     *
     * @var string
     */
    public $transcodeTemplateId;
    protected $_name = [
        'completeTime'        => 'CompleteTime',
        'creationTime'        => 'CreationTime',
        'definition'          => 'Definition',
        'errorCode'           => 'ErrorCode',
        'errorMessage'        => 'ErrorMessage',
        'inputFileUrl'        => 'InputFileUrl',
        'outputFile'          => 'OutputFile',
        'priority'            => 'Priority',
        'transcodeJobId'      => 'TranscodeJobId',
        'transcodeJobStatus'  => 'TranscodeJobStatus',
        'transcodeProgress'   => 'TranscodeProgress',
        'transcodeTemplateId' => 'TranscodeTemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->inputFileUrl) {
            $res['InputFileUrl'] = $this->inputFileUrl;
        }
        if (null !== $this->outputFile) {
            $res['OutputFile'] = null !== $this->outputFile ? $this->outputFile->toMap() : null;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->transcodeJobId) {
            $res['TranscodeJobId'] = $this->transcodeJobId;
        }
        if (null !== $this->transcodeJobStatus) {
            $res['TranscodeJobStatus'] = $this->transcodeJobStatus;
        }
        if (null !== $this->transcodeProgress) {
            $res['TranscodeProgress'] = $this->transcodeProgress;
        }
        if (null !== $this->transcodeTemplateId) {
            $res['TranscodeTemplateId'] = $this->transcodeTemplateId;
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
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['InputFileUrl'])) {
            $model->inputFileUrl = $map['InputFileUrl'];
        }
        if (isset($map['OutputFile'])) {
            $model->outputFile = outputFile::fromMap($map['OutputFile']);
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['TranscodeJobId'])) {
            $model->transcodeJobId = $map['TranscodeJobId'];
        }
        if (isset($map['TranscodeJobStatus'])) {
            $model->transcodeJobStatus = $map['TranscodeJobStatus'];
        }
        if (isset($map['TranscodeProgress'])) {
            $model->transcodeProgress = $map['TranscodeProgress'];
        }
        if (isset($map['TranscodeTemplateId'])) {
            $model->transcodeTemplateId = $map['TranscodeTemplateId'];
        }

        return $model;
    }
}

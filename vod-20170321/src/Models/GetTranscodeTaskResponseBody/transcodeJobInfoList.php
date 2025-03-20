<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponseBody\transcodeJobInfoList\outputFile;
use AlibabaCloud\Tea\Model;

class transcodeJobInfoList extends Model
{
    /**
     * @description The complete time of the transcoding job. The format is yyyy-MM-dd\\"T\\"HH:mm:ssZ (UTC time).
     *
     * @example 2019-02-26T08:30:16Z
     *
     * @var string
     */
    public $completeTime;

    /**
     * @description The creation time of the transcoding job. The format is yyyy-MM-dd\\"T\\"HH:mm:ssZ (UTC time).
     *
     * @example 2019-02-26T08:27:16Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The clarity and audio quality types are defined as follows:
     *
     * - SD: Standard Definition.
     * - HD: High Definition.
     * - FHD: Full High Definition.
     * - OD: Original Definition.
     * - 2K: 2K.
     * - 4K: 4K.
     * - SQ: Standard Audio Quality.
     * - HQ: High Audio Quality.
     * - AUTO: Adaptive Bitrate.  This is only available when the transcoding template is configured with packaging settings. Please refer to [the Transcoding Template Configuration - Package Setting](https://api.aliyun-inc.com/~~52839~~?spm=openapi-amp.newDocPublishment.0.0.65b0281fNUFIXC) for more details.
     *
     * > This value represents the clarity label configured in the transcoding template and does not indicate the actual resolution range of the transcoded output file.
     *
     * @example LD
     *
     * @var string
     */
    public $definition;

    /**
     * @description The error code.
     *
     * @example 200
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned.
     *
     * @example ErrorMessage
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The OSS address of the source file for transcoding.
     *
     * @example http://outin-40564*****e1403e7.oss-cn-shanghai.aliyuncs.com/customerTrans/5b95e568f8e*****47f38e/31f1184c-*****b2a2-f94-c213f.wmv
     *
     * @var string
     */
    public $inputFileUrl;

    /**
     * @description Information about the transcoded output files.
     *
     * @var outputFile
     */
    public $outputFile;

    /**
     * @description The priority of the transcoding task.
     *
     * @example 6
     *
     * @var string
     */
    public $priority;

    /**
     * @description The ID of the transcode job.
     *
     * @example 38f0e513c88*****85515f9d50be188
     *
     * @var string
     */
    public $transcodeJobId;

    /**
     * @description The status of the transcoding job:
     *
     * Transcoding: Transcoding in progress.
     * TranscodeSuccess: Transcoding successful.
     * TranscodeFail: Transcoding failed.
     *
     * @example Transcoding
     *
     * @var string
     */
    public $transcodeJobStatus;

    /**
     * @description The processing progress of the transcoding job. The value range is [0, 100].
     *
     * @example 80
     *
     * @var int
     */
    public $transcodeProgress;

    /**
     * @description The ID of the template used for the transcode job.
     *
     * @example 174b0534fea3*****b51c8f0ad1374
     *
     * @var string
     */
    public $transcodeTemplateId;
    protected $_name = [
        'completeTime' => 'CompleteTime',
        'creationTime' => 'CreationTime',
        'definition' => 'Definition',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'inputFileUrl' => 'InputFileUrl',
        'outputFile' => 'OutputFile',
        'priority' => 'Priority',
        'transcodeJobId' => 'TranscodeJobId',
        'transcodeJobStatus' => 'TranscodeJobStatus',
        'transcodeProgress' => 'TranscodeProgress',
        'transcodeTemplateId' => 'TranscodeTemplateId',
    ];

    public function validate() {}

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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponseBody\transcodeTask;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponseBody\transcodeTask\transcodeJobInfoList\outputFile;
use AlibabaCloud\Tea\Model;

class transcodeJobInfoList extends Model
{
    /**
     * @description The time when the transcoding job was complete. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-02-26T08:30:16Z
     *
     * @var string
     */
    public $completeTime;

    /**
     * @description The time when the transcoding job was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-02-26T08:27:16Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The video resolution. Valid values:
     *
     *   **LD**: low definition
     *   **SD**: standard definition
     *   **HD**: high definition
     *   **FHD**: ultra high definition
     *   **OD**: original definition
     *   **2K**: 2K
     *   **4K**: 4K
     *   **SQ**: standard sound quality
     *   **HQ**: high sound quality
     *   **AUTO**: adaptive bitrate Adaptive bitrate streams are returned only if PackageSetting is set in the transcoding template. For more information, see [Basic structures](~~52839~~).
     *
     * > This parameter indicates the definition that is configured in the transcoding template and does not indicate the actual resolution of the output video.
     * @example LD
     *
     * @var string
     */
    public $definition;

    /**
     * @description The error code returned when the transcoding job failed.
     *
     * @example 200
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned when the transcoding job failed.
     *
     * @example ErrorMessage
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The Object Storage Service (OSS) URL of the input file.
     *
     * @example http://outin-40564*****e1403e7.oss-cn-shanghai.aliyuncs.com/customerTrans/5b95e568f8e*****47f38e/31f1184c-*****b2a2-f94-c213f.wmv
     *
     * @var string
     */
    public $inputFileUrl;

    /**
     * @description The information about the output file.
     *
     * @var outputFile
     */
    public $outputFile;

    /**
     * @description The priority of the transcoding job.
     *
     * @example 6
     *
     * @var string
     */
    public $priority;

    /**
     * @description The ID of the transcoding job.
     *
     * @example 38f0e513c88*****85515f9d50be188
     *
     * @var string
     */
    public $transcodeJobId;

    /**
     * @description The status of the transcoding job.
     *
     *   **Transcoding**
     *   **TranscodeSuccess**
     *   **TranscodeFail**
     *
     * @example Transcoding
     *
     * @var string
     */
    public $transcodeJobStatus;

    /**
     * @description The progress of the transcoding job. Valid values: `[0,100]`.
     *
     * @example 100
     *
     * @var int
     */
    public $transcodeProgress;

    /**
     * @description The ID of the transcoding template.
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

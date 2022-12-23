<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeSummaryResponseBody\transcodeSummaryList;

use AlibabaCloud\Tea\Model;

class transcodeJobInfoSummaryList extends Model
{
    /**
     * @description The average bitrate of the output video. Unit: Kbit/s.
     *
     * @example 749
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description The time when the transcoding job was complete. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-02-27T03:40:51Z
     *
     * @var string
     */
    public $completeTime;

    /**
     * @description The time when the transcoding job was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-02-27T03:34:46Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The duration of the output video. Unit: seconds.
     *
     * @example 12
     *
     * @var string
     */
    public $duration;

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
     * @description The size of the output video. Unit: bytes.
     *
     * @example 1144259
     *
     * @var int
     */
    public $filesize;

    /**
     * @description The container format of the output video.
     *
     * @example mp4
     *
     * @var string
     */
    public $format;

    /**
     * @description The frame rate of the output video. Unit: frames per second.
     *
     * @example 30
     *
     * @var string
     */
    public $fps;

    /**
     * @description The height of the output video. Unit: pixels.
     *
     * @example 960
     *
     * @var string
     */
    public $height;

    /**
     * @description The status of the transcoding job. Valid values:
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
     * @description The transcoding progress. Valid values: `[0,100]`.
     *
     * @example 100
     *
     * @var int
     */
    public $transcodeProgress;

    /**
     * @description The ID of the transcoding template.
     *
     * @example 57496724ae2*****0968d6e08acc8f6
     *
     * @var string
     */
    public $transcodeTemplateId;

    /**
     * @description The IDs of the watermarks that are applied to the output video.
     *
     * @var string[]
     */
    public $watermarkIdList;

    /**
     * @description The width of the output video. Unit: pixels.
     *
     * @example 544
     *
     * @var string
     */
    public $width;
    protected $_name = [
        'bitrate'             => 'Bitrate',
        'completeTime'        => 'CompleteTime',
        'creationTime'        => 'CreationTime',
        'duration'            => 'Duration',
        'errorCode'           => 'ErrorCode',
        'errorMessage'        => 'ErrorMessage',
        'filesize'            => 'Filesize',
        'format'              => 'Format',
        'fps'                 => 'Fps',
        'height'              => 'Height',
        'transcodeJobStatus'  => 'TranscodeJobStatus',
        'transcodeProgress'   => 'TranscodeProgress',
        'transcodeTemplateId' => 'TranscodeTemplateId',
        'watermarkIdList'     => 'WatermarkIdList',
        'width'               => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->filesize) {
            $res['Filesize'] = $this->filesize;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
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
        if (null !== $this->watermarkIdList) {
            $res['WatermarkIdList'] = $this->watermarkIdList;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeJobInfoSummaryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Filesize'])) {
            $model->filesize = $map['Filesize'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
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
        if (isset($map['WatermarkIdList'])) {
            if (!empty($map['WatermarkIdList'])) {
                $model->watermarkIdList = $map['WatermarkIdList'];
            }
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}

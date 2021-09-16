<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeSummaryResponseBody\transcodeSummaryList;

use AlibabaCloud\Tea\Model;

class transcodeJobInfoSummaryList extends Model
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
     * @var string
     */
    public $height;

    /**
     * @var int
     */
    public $transcodeProgress;

    /**
     * @var string
     */
    public $transcodeTemplateId;

    /**
     * @var string
     */
    public $bitrate;

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
    public $width;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $fps;

    /**
     * @var string
     */
    public $transcodeJobStatus;

    /**
     * @var int
     */
    public $filesize;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string[]
     */
    public $watermarkIdList;
    protected $_name = [
        'creationTime'        => 'CreationTime',
        'errorMessage'        => 'ErrorMessage',
        'height'              => 'Height',
        'transcodeProgress'   => 'TranscodeProgress',
        'transcodeTemplateId' => 'TranscodeTemplateId',
        'bitrate'             => 'Bitrate',
        'errorCode'           => 'ErrorCode',
        'completeTime'        => 'CompleteTime',
        'width'               => 'Width',
        'duration'            => 'Duration',
        'fps'                 => 'Fps',
        'transcodeJobStatus'  => 'TranscodeJobStatus',
        'filesize'            => 'Filesize',
        'format'              => 'Format',
        'watermarkIdList'     => 'WatermarkIdList',
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
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->transcodeProgress) {
            $res['TranscodeProgress'] = $this->transcodeProgress;
        }
        if (null !== $this->transcodeTemplateId) {
            $res['TranscodeTemplateId'] = $this->transcodeTemplateId;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->transcodeJobStatus) {
            $res['TranscodeJobStatus'] = $this->transcodeJobStatus;
        }
        if (null !== $this->filesize) {
            $res['Filesize'] = $this->filesize;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->watermarkIdList) {
            $res['WatermarkIdList'] = $this->watermarkIdList;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['TranscodeProgress'])) {
            $model->transcodeProgress = $map['TranscodeProgress'];
        }
        if (isset($map['TranscodeTemplateId'])) {
            $model->transcodeTemplateId = $map['TranscodeTemplateId'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['TranscodeJobStatus'])) {
            $model->transcodeJobStatus = $map['TranscodeJobStatus'];
        }
        if (isset($map['Filesize'])) {
            $model->filesize = $map['Filesize'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['WatermarkIdList'])) {
            if (!empty($map['WatermarkIdList'])) {
                $model->watermarkIdList = $map['WatermarkIdList'];
            }
        }

        return $model;
    }
}

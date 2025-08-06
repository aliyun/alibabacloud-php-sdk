<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeSummaryResponseBody\transcodeSummaryList;

use AlibabaCloud\Dara\Model;

class transcodeJobInfoSummaryList extends Model
{
    /**
     * @var string
     */
    public $bitrate;

    /**
     * @var string
     */
    public $completeTime;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $filesize;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $fps;

    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $transcodeJobStatus;

    /**
     * @var int
     */
    public $transcodeProgress;

    /**
     * @var string
     */
    public $transcodeTemplateId;

    /**
     * @var string[]
     */
    public $watermarkIdList;

    /**
     * @var string
     */
    public $width;
    protected $_name = [
        'bitrate' => 'Bitrate',
        'completeTime' => 'CompleteTime',
        'creationTime' => 'CreationTime',
        'duration' => 'Duration',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'filesize' => 'Filesize',
        'format' => 'Format',
        'fps' => 'Fps',
        'height' => 'Height',
        'transcodeJobStatus' => 'TranscodeJobStatus',
        'transcodeProgress' => 'TranscodeProgress',
        'transcodeTemplateId' => 'TranscodeTemplateId',
        'watermarkIdList' => 'WatermarkIdList',
        'width' => 'Width',
    ];

    public function validate()
    {
        if (\is_array($this->watermarkIdList)) {
            Model::validateArray($this->watermarkIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->watermarkIdList)) {
                $res['WatermarkIdList'] = [];
                $n1 = 0;
                foreach ($this->watermarkIdList as $item1) {
                    $res['WatermarkIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
                $model->watermarkIdList = [];
                $n1 = 0;
                foreach ($map['WatermarkIdList'] as $item1) {
                    $model->watermarkIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListAIImageInfoResponseBody;

use AlibabaCloud\Tea\Model;

class AIImageInfoList extends Model
{
    /**
     * @description The ID of the image information.
     *
     * @example b89a6aabf1b6197ebd6fe6cf29****
     *
     * @var string
     */
    public $AIImageInfoId;

    /**
     * @description The time when the file was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2020-10-15T03:30:03Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The URL of the image file.
     *
     * @var string
     */
    public $fileURL;

    /**
     * @description The format of the image. Valid values: **gif** and **png**.
     *
     * @example gif
     *
     * @var string
     */
    public $format;

    /**
     * @description The ID of the image AI processing job.
     *
     * @example cf08a2c6e11ee1711b738b9067****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The score of the image.
     *
     * @example 5.035636554444242
     *
     * @var string
     */
    public $score;

    /**
     * @description The data version ID.
     *
     * @example b547f3f0e199c3b457369f3cf****
     *
     * @var string
     */
    public $version;

    /**
     * @description The ID of the video.
     *
     * @example 357a8748c5789d2726e6436aa****
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'AIImageInfoId' => 'AIImageInfoId',
        'creationTime'  => 'CreationTime',
        'fileURL'       => 'FileURL',
        'format'        => 'Format',
        'jobId'         => 'JobId',
        'score'         => 'Score',
        'version'       => 'Version',
        'videoId'       => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AIImageInfoId) {
            $res['AIImageInfoId'] = $this->AIImageInfoId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AIImageInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AIImageInfoId'])) {
            $model->AIImageInfoId = $map['AIImageInfoId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}

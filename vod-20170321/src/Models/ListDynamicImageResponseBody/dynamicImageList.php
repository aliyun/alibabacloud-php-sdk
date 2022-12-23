<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListDynamicImageResponseBody;

use AlibabaCloud\Tea\Model;

class dynamicImageList extends Model
{
    /**
     * @description The time when the animated sticker was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2020-07-28T02:01:06Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The duration of the animated sticker. Unit: seconds.
     *
     * @example 2
     *
     * @var string
     */
    public $duration;

    /**
     * @description The ID of the animated sticker.
     *
     * @example 2b4e51df60323ef43d6e336ecf****
     *
     * @var string
     */
    public $dynamicImageId;

    /**
     * @description The size of the animated sticker file. Unit: byte.
     *
     * @example 119866
     *
     * @var string
     */
    public $fileSize;

    /**
     * @description The URL of the animated sticker file.
     *
     * @example https://example.aliyundoc.com/2e114f110059*****0c3193918fd449a/image/dynamic/2b4e51df60*****323ef43d6e336ecf.webp?auth_key=1597296785-0-0-4a48e85*****bd2bb358e0b3cade
     *
     * @var string
     */
    public $fileURL;

    /**
     * @description The format of the animated sticker. Valid values: gif and webp.
     *
     * @example webp
     *
     * @var string
     */
    public $format;

    /**
     * @description The frame rate of the animated sticker. Unit: frames per second.
     *
     * @example 10
     *
     * @var string
     */
    public $fps;

    /**
     * @description The height of the animated sticker. Unit: pixel.
     *
     * @example 360
     *
     * @var string
     */
    public $height;

    /**
     * @description The job ID for creating the animated sticker.
     *
     * @example 2bf4390af9e5491c09cc720ad****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The ID of the video.
     *
     * @example 2e114f1100590c3193918fd449a****
     *
     * @var string
     */
    public $videoId;

    /**
     * @description The width of the animated sticker. Unit: pixel.
     *
     * @example 640
     *
     * @var string
     */
    public $width;
    protected $_name = [
        'creationTime'   => 'CreationTime',
        'duration'       => 'Duration',
        'dynamicImageId' => 'DynamicImageId',
        'fileSize'       => 'FileSize',
        'fileURL'        => 'FileURL',
        'format'         => 'Format',
        'fps'            => 'Fps',
        'height'         => 'Height',
        'jobId'          => 'JobId',
        'videoId'        => 'VideoId',
        'width'          => 'Width',
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
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->dynamicImageId) {
            $res['DynamicImageId'] = $this->dynamicImageId;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
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
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dynamicImageList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['DynamicImageId'])) {
            $model->dynamicImageId = $map['DynamicImageId'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}

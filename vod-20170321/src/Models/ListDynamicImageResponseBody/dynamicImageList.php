<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListDynamicImageResponseBody;

use AlibabaCloud\Tea\Model;

class dynamicImageList extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $fileURL;

    /**
     * @var string
     */
    public $videoId;

    /**
     * @var string
     */
    public $width;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $fps;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $dynamicImageId;

    /**
     * @var string
     */
    public $fileSize;
    protected $_name = [
        'creationTime'   => 'CreationTime',
        'fileURL'        => 'FileURL',
        'videoId'        => 'VideoId',
        'width'          => 'Width',
        'jobId'          => 'JobId',
        'height'         => 'Height',
        'fps'            => 'Fps',
        'duration'       => 'Duration',
        'format'         => 'Format',
        'dynamicImageId' => 'DynamicImageId',
        'fileSize'       => 'FileSize',
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
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->dynamicImageId) {
            $res['DynamicImageId'] = $this->dynamicImageId;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
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
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['DynamicImageId'])) {
            $model->dynamicImageId = $map['DynamicImageId'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        return $model;
    }
}

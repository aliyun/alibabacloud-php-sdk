<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class GetStoryRequest extends Model
{
    /**
     * @var string
     */
    public $coverImageThumbnailProcess;

    /**
     * @var string
     */
    public $coverVideoThumbnailProcess;

    /**
     * @var string
     */
    public $driveId;

    /**
     * @var string
     */
    public $imageThumbnailProcess;

    /**
     * @var string
     */
    public $imageUrlProcess;

    /**
     * @var string
     */
    public $storyId;

    /**
     * @var int
     */
    public $urlExpireSec;

    /**
     * @var string
     */
    public $videoThumbnailProcess;
    protected $_name = [
        'coverImageThumbnailProcess' => 'cover_image_thumbnail_process',
        'coverVideoThumbnailProcess' => 'cover_video_thumbnail_process',
        'driveId' => 'drive_id',
        'imageThumbnailProcess' => 'image_thumbnail_process',
        'imageUrlProcess' => 'image_url_process',
        'storyId' => 'story_id',
        'urlExpireSec' => 'url_expire_sec',
        'videoThumbnailProcess' => 'video_thumbnail_process',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coverImageThumbnailProcess) {
            $res['cover_image_thumbnail_process'] = $this->coverImageThumbnailProcess;
        }

        if (null !== $this->coverVideoThumbnailProcess) {
            $res['cover_video_thumbnail_process'] = $this->coverVideoThumbnailProcess;
        }

        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }

        if (null !== $this->imageThumbnailProcess) {
            $res['image_thumbnail_process'] = $this->imageThumbnailProcess;
        }

        if (null !== $this->imageUrlProcess) {
            $res['image_url_process'] = $this->imageUrlProcess;
        }

        if (null !== $this->storyId) {
            $res['story_id'] = $this->storyId;
        }

        if (null !== $this->urlExpireSec) {
            $res['url_expire_sec'] = $this->urlExpireSec;
        }

        if (null !== $this->videoThumbnailProcess) {
            $res['video_thumbnail_process'] = $this->videoThumbnailProcess;
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
        if (isset($map['cover_image_thumbnail_process'])) {
            $model->coverImageThumbnailProcess = $map['cover_image_thumbnail_process'];
        }

        if (isset($map['cover_video_thumbnail_process'])) {
            $model->coverVideoThumbnailProcess = $map['cover_video_thumbnail_process'];
        }

        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }

        if (isset($map['image_thumbnail_process'])) {
            $model->imageThumbnailProcess = $map['image_thumbnail_process'];
        }

        if (isset($map['image_url_process'])) {
            $model->imageUrlProcess = $map['image_url_process'];
        }

        if (isset($map['story_id'])) {
            $model->storyId = $map['story_id'];
        }

        if (isset($map['url_expire_sec'])) {
            $model->urlExpireSec = $map['url_expire_sec'];
        }

        if (isset($map['video_thumbnail_process'])) {
            $model->videoThumbnailProcess = $map['video_thumbnail_process'];
        }

        return $model;
    }
}

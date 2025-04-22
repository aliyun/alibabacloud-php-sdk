<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class DownloadFileRequest extends Model
{
    /**
     * @var string
     */
    public $driveId;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $imageThumbnailProcess;

    /**
     * @var string
     */
    public $officeThumbnailProcess;

    /**
     * @var string
     */
    public $shareId;

    /**
     * @var string
     */
    public $videoThumbnailProcess;
    protected $_name = [
        'driveId' => 'drive_id',
        'fileId' => 'file_id',
        'imageThumbnailProcess' => 'image_thumbnail_process',
        'officeThumbnailProcess' => 'office_thumbnail_process',
        'shareId' => 'share_id',
        'videoThumbnailProcess' => 'video_thumbnail_process',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }

        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }

        if (null !== $this->imageThumbnailProcess) {
            $res['image_thumbnail_process'] = $this->imageThumbnailProcess;
        }

        if (null !== $this->officeThumbnailProcess) {
            $res['office_thumbnail_process'] = $this->officeThumbnailProcess;
        }

        if (null !== $this->shareId) {
            $res['share_id'] = $this->shareId;
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
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }

        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }

        if (isset($map['image_thumbnail_process'])) {
            $model->imageThumbnailProcess = $map['image_thumbnail_process'];
        }

        if (isset($map['office_thumbnail_process'])) {
            $model->officeThumbnailProcess = $map['office_thumbnail_process'];
        }

        if (isset($map['share_id'])) {
            $model->shareId = $map['share_id'];
        }

        if (isset($map['video_thumbnail_process'])) {
            $model->videoThumbnailProcess = $map['video_thumbnail_process'];
        }

        return $model;
    }
}

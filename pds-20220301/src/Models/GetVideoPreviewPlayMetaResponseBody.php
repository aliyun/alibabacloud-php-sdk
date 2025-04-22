<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class GetVideoPreviewPlayMetaResponseBody extends Model
{
    /**
     * @var string
     */
    public $domainId;

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
    public $shareId;

    /**
     * @var VideoPreviewPlayMeta
     */
    public $videoPreviewPlayMeta;
    protected $_name = [
        'domainId' => 'domain_id',
        'driveId' => 'drive_id',
        'fileId' => 'file_id',
        'shareId' => 'share_id',
        'videoPreviewPlayMeta' => 'video_preview_play_meta',
    ];

    public function validate()
    {
        if (null !== $this->videoPreviewPlayMeta) {
            $this->videoPreviewPlayMeta->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainId) {
            $res['domain_id'] = $this->domainId;
        }

        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }

        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }

        if (null !== $this->shareId) {
            $res['share_id'] = $this->shareId;
        }

        if (null !== $this->videoPreviewPlayMeta) {
            $res['video_preview_play_meta'] = null !== $this->videoPreviewPlayMeta ? $this->videoPreviewPlayMeta->toArray($noStream) : $this->videoPreviewPlayMeta;
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
        if (isset($map['domain_id'])) {
            $model->domainId = $map['domain_id'];
        }

        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }

        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }

        if (isset($map['share_id'])) {
            $model->shareId = $map['share_id'];
        }

        if (isset($map['video_preview_play_meta'])) {
            $model->videoPreviewPlayMeta = VideoPreviewPlayMeta::fromMap($map['video_preview_play_meta']);
        }

        return $model;
    }
}

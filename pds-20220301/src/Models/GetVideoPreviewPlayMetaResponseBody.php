<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class GetVideoPreviewPlayMetaResponseBody extends Model
{
    /**
     * @example bj1
     *
     * @var string
     */
    public $domainId;

    /**
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @example fileid1
     *
     * @var string
     */
    public $fileId;

    /**
     * @example 7JQX1FswpQ8
     *
     * @var string
     */
    public $shareId;

    /**
     * @var VideoPreviewPlayMeta
     */
    public $videoPreviewPlayMeta;
    protected $_name = [
        'domainId'             => 'domain_id',
        'driveId'              => 'drive_id',
        'fileId'               => 'file_id',
        'shareId'              => 'share_id',
        'videoPreviewPlayMeta' => 'video_preview_play_meta',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['video_preview_play_meta'] = null !== $this->videoPreviewPlayMeta ? $this->videoPreviewPlayMeta->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVideoPreviewPlayMetaResponseBody
     */
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

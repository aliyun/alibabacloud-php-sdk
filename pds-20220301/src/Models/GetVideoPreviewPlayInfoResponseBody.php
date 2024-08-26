<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class GetVideoPreviewPlayInfoResponseBody extends Model
{
    /**
     * @description The domain ID.
     *
     * @example bj1
     *
     * @var string
     */
    public $domainId;

    /**
     * @description The drive ID.
     *
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @description The file ID.
     *
     * @example fileid1
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The share ID.
     *
     * @example 7JQX1FswpQ8
     *
     * @var string
     */
    public $shareId;

    /**
     * @description The information about video playback.
     *
     * @var VideoPreviewPlayInfo
     */
    public $videoPreviewPlayInfo;
    protected $_name = [
        'domainId'             => 'domain_id',
        'driveId'              => 'drive_id',
        'fileId'               => 'file_id',
        'shareId'              => 'share_id',
        'videoPreviewPlayInfo' => 'video_preview_play_info',
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
        if (null !== $this->videoPreviewPlayInfo) {
            $res['video_preview_play_info'] = null !== $this->videoPreviewPlayInfo ? $this->videoPreviewPlayInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVideoPreviewPlayInfoResponseBody
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
        if (isset($map['video_preview_play_info'])) {
            $model->videoPreviewPlayInfo = VideoPreviewPlayInfo::fromMap($map['video_preview_play_info']);
        }

        return $model;
    }
}

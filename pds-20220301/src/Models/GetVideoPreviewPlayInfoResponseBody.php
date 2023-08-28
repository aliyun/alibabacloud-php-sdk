<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class GetVideoPreviewPlayInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

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
     * @var string
     */
    public $message;

    /**
     * @example 7JQX1FswpQ8
     *
     * @var string
     */
    public $shareId;

    /**
     * @var VideoPreviewPlayInfo
     */
    public $videoPreviewPlayInfo;
    protected $_name = [
        'code'                 => 'code',
        'domainId'             => 'domain_id',
        'driveId'              => 'drive_id',
        'fileId'               => 'file_id',
        'message'              => 'message',
        'shareId'              => 'share_id',
        'videoPreviewPlayInfo' => 'video_preview_play_info',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->domainId) {
            $res['domain_id'] = $this->domainId;
        }
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['domain_id'])) {
            $model->domainId = $map['domain_id'];
        }
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
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

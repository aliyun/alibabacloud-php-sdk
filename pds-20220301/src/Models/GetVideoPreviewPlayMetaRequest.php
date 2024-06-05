<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class GetVideoPreviewPlayMetaRequest extends Model
{
    /**
     * @description The preview type. You must enable the corresponding video transcoding feature. Valid values:
     *
     *   live_transcoding: previews a live stream while transcoding is in progress.
     *   quick_video: previews a video while transcoding is in progress.
     *   offline_audio: previews a piece of audio after the audio is transcoded offline.
     *   offline_video: previews a video after the video is transcoded offline.
     *
     * This parameter is required.
     * @example live_transcoding
     *
     * @var string
     */
    public $category;

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
     * This parameter is required.
     * @example 9520943DC264
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The share ID. If you want to manage a file by using a sharing link, carry the `x-share-token` header in the request and specify share_id. In this case, `drive_id` is invalid. Otherwise, use an `AccessKey pair` or `access token` for authentication and specify `drive_id`. You must specify at least either `share_id` or `drive_id`.
     *
     * @example 7JQX1FswpQ8
     *
     * @var string
     */
    public $shareId;
    protected $_name = [
        'category' => 'category',
        'driveId'  => 'drive_id',
        'fileId'   => 'file_id',
        'shareId'  => 'share_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVideoPreviewPlayMetaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
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

        return $model;
    }
}

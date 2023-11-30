<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class DownloadFileRequest extends Model
{
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
     * @example 9520943DC264
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The method used to generate the thumbnail of an image. If this parameter is specified, you are redirected to the URL of the generated thumbnail.
     *
     * @example image/resize,m_fill,h_128,w_128,limit_0
     *
     * @var string
     */
    public $imageThumbnailProcess;

    /**
     * @description The method used to generate the thumbnail of a document. If this parameter is specified, you are redirected to the URL of the generated thumbnail.
     *
     * @example image/resize,w_200
     *
     * @var string
     */
    public $officeThumbnailProcess;

    /**
     * @description The share ID. If you want to manage a file by using a share link, carry the `x-share-token` header for authentication in the request and specify share_id. In this case, `drive_id` is invalid. Otherwise, use an `AccessKey pair` or `access token` for authentication and specify `drive_id`. You must specify one of `share_id` and `drive_id`.
     *
     * @example 7JQX1FswpQ8
     *
     * @var string
     */
    public $shareId;

    /**
     * @description The method used to generate the thumbnail of a video. If this parameter is specified, you are redirected to the URL of the generated thumbnail.
     *
     * @example video/snapshot,t_7000,f_jpg,w_800,h_600,m_fast
     *
     * @var string
     */
    public $videoThumbnailProcess;
    protected $_name = [
        'driveId'                => 'drive_id',
        'fileId'                 => 'file_id',
        'imageThumbnailProcess'  => 'image_thumbnail_process',
        'officeThumbnailProcess' => 'office_thumbnail_process',
        'shareId'                => 'share_id',
        'videoThumbnailProcess'  => 'video_thumbnail_process',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DownloadFileRequest
     */
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

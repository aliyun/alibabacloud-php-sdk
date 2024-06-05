<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class GetVideoPreviewPlayInfoRequest extends Model
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
     * @var bool
     */
    public $getMasterUrl;

    /**
     * @description Specifies whether not to query the playback URL. If you set this parameter to true, only transcoding metadata is returned. The video is not transcoded in the TS format, and the playback URL is not returned. If you set this parameter to false, the playback URL is returned. If the video has not been transcoded by using the template specified by template_id, the transcoding process is triggered. You are charged for the value-added service fees generated for transcoding.
     *
     * @example true
     *
     * @var bool
     */
    public $getWithoutUrl;

    /**
     * @description The share ID. If you want to manage a file by using a sharing link, carry the `x-share-token` header in the request and specify share_id. In this case, `drive_id` is invalid. Otherwise, use an `AccessKey pair` or `access token` for authentication and specify `drive_id`. You must specify at least either `share_id` or `drive_id`.
     *
     * @example 7JQX1FswpQ8
     *
     * @var string
     */
    public $shareId;

    /**
     * @description The ID of the definition template. If you leave this parameter empty, all definition templates are available.
     *
     * @example 264_480p
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The validity period of the video preview. Unit: seconds. Default value: 900. Maximum value: 14400.
     *
     * @example 3600
     *
     * @var int
     */
    public $urlExpireSec;
    protected $_name = [
        'category'      => 'category',
        'driveId'       => 'drive_id',
        'fileId'        => 'file_id',
        'getMasterUrl'  => 'get_master_url',
        'getWithoutUrl' => 'get_without_url',
        'shareId'       => 'share_id',
        'templateId'    => 'template_id',
        'urlExpireSec'  => 'url_expire_sec',
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
        if (null !== $this->getMasterUrl) {
            $res['get_master_url'] = $this->getMasterUrl;
        }
        if (null !== $this->getWithoutUrl) {
            $res['get_without_url'] = $this->getWithoutUrl;
        }
        if (null !== $this->shareId) {
            $res['share_id'] = $this->shareId;
        }
        if (null !== $this->templateId) {
            $res['template_id'] = $this->templateId;
        }
        if (null !== $this->urlExpireSec) {
            $res['url_expire_sec'] = $this->urlExpireSec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVideoPreviewPlayInfoRequest
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
        if (isset($map['get_master_url'])) {
            $model->getMasterUrl = $map['get_master_url'];
        }
        if (isset($map['get_without_url'])) {
            $model->getWithoutUrl = $map['get_without_url'];
        }
        if (isset($map['share_id'])) {
            $model->shareId = $map['share_id'];
        }
        if (isset($map['template_id'])) {
            $model->templateId = $map['template_id'];
        }
        if (isset($map['url_expire_sec'])) {
            $model->urlExpireSec = $map['url_expire_sec'];
        }

        return $model;
    }
}

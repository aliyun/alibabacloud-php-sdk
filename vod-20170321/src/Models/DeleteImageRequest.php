<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteImageRequest extends Model
{
    /**
     * @description The method that is used to delete images. Valid values:
     *
     *   **ImageURL**: deletes images based on URLs.
     *   **ImageId**: deletes images based on image IDs.
     *   **VideoId**: deletes images associated with a video based on the video ID.
     *
     * This parameter is required.
     * @example VideoId
     *
     * @var string
     */
    public $deleteImageType;

    /**
     * @description The ID of the image. You can specify up to 20 image IDs and separate them with commas (,). You can use one of the following methods to obtain the image ID:
     *
     *   Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Media Files** > **Image** to view the image ID.
     *   Obtain the image ID from the response to the [CreateUploadImage](~~CreateUploadImage~~) operation that you call to obtain the upload credential and URL.
     *   Obtain the image ID from the response to the [SearchMedia](~~SearchMedia~~) operation that you call to query images.
     *
     * >  This parameter takes effect and is required only if you set **DeleteImageType** to **ImageId**.
     * @example bbc65bba53fed90de118a7849****,594228cdd14b4d069fc17a8c4a****
     *
     * @var string
     */
    public $imageIds;

    /**
     * @description The type of images that you want to delete. The images are associated with the video. Valid values:
     *
     *   **CoverSnapshot**: thumbnail snapshot.
     *   **NormalSnapshot**: regular snapshot.
     *   **SpriteSnapshot**: sprite snapshot.
     *   **SpriteOriginSnapshot**: sprite source snapshot.
     *   **All**: images of all the preceding types. You can specify multiple types other than `All` for this parameter. Separate multiple types with commas (,).
     *
     * >  This parameter takes effect and is required only if you set **DeleteImageType** to **VideoId**.
     * @example All
     *
     * @var string
     */
    public $imageType;

    /**
     * @description The URL of the image. You can obtain the value of `ImageURL` from the response to the [CreateUploadImage](~~CreateUploadImage~~) operation. You can specify up to 20 URLs and separate them with commas (,).
     *
     * >  This parameter takes effect and is required only if you set **DeleteImageType** to **ImageURL**.
     * @example https://example.aliyundoc.com/image/default/41AE7ADABBE*****.png
     *
     * @var string
     */
    public $imageURLs;

    /**
     * @description The ID of the video. You can specify only one ID. You can use one of the following methods to obtain the ID:
     *
     *   Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Media Files** > **Audio/Video**. On the Video and Audio page, view the ID of the media file.
     *   Obtain the video ID from the response to the [CreateUploadVideo](~~CreateUploadVideo~~) operation that you call to obtain the upload credential and URL.
     *   Obtain the video ID from the response to the [SearchMedia](~~SearchMedia~~) operation that you call to query videos.
     *
     * >  This parameter takes effect and is required only if you set **DeleteImageType** to **VideoId**.
     * @example eb1861d2c9a8842340e989dd56****
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'deleteImageType' => 'DeleteImageType',
        'imageIds'        => 'ImageIds',
        'imageType'       => 'ImageType',
        'imageURLs'       => 'ImageURLs',
        'videoId'         => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteImageType) {
            $res['DeleteImageType'] = $this->deleteImageType;
        }
        if (null !== $this->imageIds) {
            $res['ImageIds'] = $this->imageIds;
        }
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->imageURLs) {
            $res['ImageURLs'] = $this->imageURLs;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteImageType'])) {
            $model->deleteImageType = $map['DeleteImageType'];
        }
        if (isset($map['ImageIds'])) {
            $model->imageIds = $map['ImageIds'];
        }
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['ImageURLs'])) {
            $model->imageURLs = $map['ImageURLs'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}

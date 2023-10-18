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
     * @example VideoId
     *
     * @var string
     */
    public $deleteImageType;

    /**
     * @description The ID of the image file. You can specify multiple image IDs. Separate multiple IDs with commas (,). You can use one of the following methods to obtain the image ID:
     *
     *   Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Media Files** > **Image** to view the image ID. This method is applicable to images that are uploaded by using the ApsaraVideo VOD console.
     *   Obtain the value of the ImageId parameter from the response to the [CreateUploadImage](~~55619~~) operation.
     *   Obtain the value of the ImageId parameter from the response to the [SearchMedia](~~86044~~) operation after you upload images.
     *
     * > This parameter is required only if you set **DeleteImageType** to **ImageId**.
     * @example bbc65bba53fed90de118a7849****,594228cdd14b4d069fc17a8c4a****
     *
     * @var string
     */
    public $imageIds;

    /**
     * @description The type of images that you want to delete. The images are associated with the video. This parameter is required only if you set **DeleteImageType** to **VideoId**. Valid values:
     *
     *   **CoverSnapshot**: thumbnail snapshot.
     *   **NormalSnapshot**: normal snapshot.
     *   **SpriteSnapshot**: sprite snapshot.
     *   **SpriteOriginSnapshot**: sprite source snapshot.
     *   **All**: images of all the preceding types. If this parameter is not set to All, you can specify multiple types and separate the types with commas (,).
     *
     * @example All
     *
     * @var string
     */
    public $imageType;

    /**
     * @description The URL of the image. You can obtain the value of ImageURL from the response to the [CreateUploadImage](~~55619~~) operation. You can specify multiple URLs. Separate multiple URLs with commas (,).
     *
     * > This parameter is required only if you set **DeleteImageType** to **ImageURL**.
     * @example https://example.aliyundoc.com/image/default/41AE7ADABBE*****.png
     *
     * @var string
     */
    public $imageURLs;

    /**
     * @description The ID of the video file. You can use one of the following methods to obtain the video ID:
     *
     *   Log on to the [ApsaraVideo VOD](https://vod.console.aliyun.com) console. In the left-side navigation pane, choose **Media Files** > **Audio/Video**. On the Video and Audio page, view the ID of the media file. This method is applicable to files that are uploaded by using the ApsaraVideo VOD console.
     *   Obtain the value of the VideoId parameter from the response to the [CreateUploadVideo](~~55407~~) operation.
     *   Obtain the value of the VideoId parameter from the response to the [SearchMedia](~~86044~~) operation after you upload media files.
     *
     * > This parameter is required only if you set **DeleteImageType** to **VideoId**.
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteImageRequest extends Model
{
    /**
     * @description The method that is used to delete images. Valid values:
     *
     *   **ImageURL**: Delete the specified image based on the image URL.
     *   **ImageId**: Delete the specified image based on the image ID.
     *   **VideoId**: Delete the image that is associated with a video ID.
     *
     * @example VideoId
     *
     * @var string
     */
    public $deleteImageType;

    /**
     * @description The ID of the image.
     *
     *   This parameter only takes effect when the **DeleteImageType** parameter is set to **ImageId**. In this case, you must set this parameter.
     *   Separate multiple IDs with commas (,).
     *
     * @example bbc65bba53fed90de118a7849****,594228cdd14b4d069fc17a8c4a****
     *
     * @var string
     */
    public $imageIds;

    /**
     * @description The type of the image. This parameter only takes effect when the **DeleteImageType** parameter is set to **VideoId**. In this case, you must set this parameter. Valid values:
     *
     *   **CoverSnapshot**: thumbnail snapshot.
     *   **NormalSnapshot**: normal snapshot.
     *   **SpriteSnapshot**: sprite snapshot.
     *   **SpriteOriginSnapshot**: sprite source snapshot.
     *   **All**: images of all the preceding types. If this parameter is not set to All, you can specify multiple types and separate them with commas (,).
     *
     * @example All
     *
     * @var string
     */
    public $imageType;

    /**
     * @description The URL of the image.
     *
     *   This parameter only takes effect when the **DeleteImageType** parameter is set to **ImageURL**. In this case, you must set this parameter.
     *   Encode multiple image URLs and separate them with commas (,).
     *   The use of special characters in image URLs may lead to the failure to delete the images. To prevent such failure, you must encode the image URLs before you concatenate them into a string with commas (,).
     *
     * @example https://example.aliyundoc.com/image/default/41AE7ADABBE*****.png
     *
     * @var string
     */
    public $imageURLs;

    /**
     * @description The ID of the video. This parameter only takes effect when the **DeleteImageType** parameter is set to **VideoId**. In this case, you must set this parameter.
     *
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteImageRequest extends Model
{
    /**
     * @var string
     */
    public $deleteImageType;

    /**
     * @var string
     */
    public $imageIds;

    /**
     * @var string
     */
    public $imageType;

    /**
     * @var string
     */
    public $imageURLs;

    /**
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

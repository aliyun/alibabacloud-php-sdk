<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class V1MediaSecurityStorageResponse extends Model
{
    /**
     * @var string
     */
    public $assetId;

    /**
     * @var CommonMediaResource
     */
    public $image;

    /**
     * @var CommonStorage
     */
    public $imageStorage;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var CommonMediaResource
     */
    public $video;

    /**
     * @var CommonStorage
     */
    public $videoStorage;
    protected $_name = [
        'assetId'      => 'AssetId',
        'image'        => 'Image',
        'imageStorage' => 'ImageStorage',
        'mediaId'      => 'MediaId',
        'video'        => 'Video',
        'videoStorage' => 'VideoStorage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetId) {
            $res['AssetId'] = $this->assetId;
        }
        if (null !== $this->image) {
            $res['Image'] = null !== $this->image ? $this->image->toMap() : null;
        }
        if (null !== $this->imageStorage) {
            $res['ImageStorage'] = null !== $this->imageStorage ? $this->imageStorage->toMap() : null;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->video) {
            $res['Video'] = null !== $this->video ? $this->video->toMap() : null;
        }
        if (null !== $this->videoStorage) {
            $res['VideoStorage'] = null !== $this->videoStorage ? $this->videoStorage->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return V1MediaSecurityStorageResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetId'])) {
            $model->assetId = $map['AssetId'];
        }
        if (isset($map['Image'])) {
            $model->image = CommonMediaResource::fromMap($map['Image']);
        }
        if (isset($map['ImageStorage'])) {
            $model->imageStorage = CommonStorage::fromMap($map['ImageStorage']);
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['Video'])) {
            $model->video = CommonMediaResource::fromMap($map['Video']);
        }
        if (isset($map['VideoStorage'])) {
            $model->videoStorage = CommonStorage::fromMap($map['VideoStorage']);
        }

        return $model;
    }
}

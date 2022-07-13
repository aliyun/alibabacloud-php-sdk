<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class V1MediaSecurityStorageRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var AppsSettings
     */
    public $appSettings;

    /**
     * @var string
     */
    public $assetId;

    /**
     * @var CommonCustomer
     */
    public $customer;

    /**
     * @var CommonMediaResource
     */
    public $image;

    /**
     * @var CommonStorage
     */
    public $imageStorage;

    /**
     * @var CommonMediaResource
     */
    public $video;

    /**
     * @var CommonStorage
     */
    public $videoStorage;
    protected $_name = [
        'appId'        => 'AppId',
        'appSettings'  => 'AppSettings',
        'assetId'      => 'AssetId',
        'customer'     => 'Customer',
        'image'        => 'Image',
        'imageStorage' => 'ImageStorage',
        'video'        => 'Video',
        'videoStorage' => 'VideoStorage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appSettings) {
            $res['AppSettings'] = null !== $this->appSettings ? $this->appSettings->toMap() : null;
        }
        if (null !== $this->assetId) {
            $res['AssetId'] = $this->assetId;
        }
        if (null !== $this->customer) {
            $res['Customer'] = null !== $this->customer ? $this->customer->toMap() : null;
        }
        if (null !== $this->image) {
            $res['Image'] = null !== $this->image ? $this->image->toMap() : null;
        }
        if (null !== $this->imageStorage) {
            $res['ImageStorage'] = null !== $this->imageStorage ? $this->imageStorage->toMap() : null;
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
     * @return V1MediaSecurityStorageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppSettings'])) {
            $model->appSettings = AppsSettings::fromMap($map['AppSettings']);
        }
        if (isset($map['AssetId'])) {
            $model->assetId = $map['AssetId'];
        }
        if (isset($map['Customer'])) {
            $model->customer = CommonCustomer::fromMap($map['Customer']);
        }
        if (isset($map['Image'])) {
            $model->image = CommonMediaResource::fromMap($map['Image']);
        }
        if (isset($map['ImageStorage'])) {
            $model->imageStorage = CommonStorage::fromMap($map['ImageStorage']);
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

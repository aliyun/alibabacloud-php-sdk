<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadImageRequest extends Model
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $imageType;

    /**
     * @var string
     */
    public $imageExt;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $storageLocation;

    /**
     * @var int
     */
    public $cateId;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $appId;
    protected $_name = [
        'title'           => 'Title',
        'imageType'       => 'ImageType',
        'imageExt'        => 'ImageExt',
        'tags'            => 'Tags',
        'storageLocation' => 'StorageLocation',
        'cateId'          => 'CateId',
        'userData'        => 'UserData',
        'description'     => 'Description',
        'appId'           => 'AppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->imageExt) {
            $res['ImageExt'] = $this->imageExt;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUploadImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['ImageExt'])) {
            $model->imageExt = $map['ImageExt'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        return $model;
    }
}

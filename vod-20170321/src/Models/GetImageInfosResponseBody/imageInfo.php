<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetImageInfosResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetImageInfosResponseBody\imageInfo\mezzanine;

class imageInfo extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $cateId;

    /**
     * @var string
     */
    public $cateName;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageType;

    /**
     * @var mezzanine
     */
    public $mezzanine;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageLocation;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $URL;
    protected $_name = [
        'appId' => 'AppId',
        'cateId' => 'CateId',
        'cateName' => 'CateName',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'imageId' => 'ImageId',
        'imageType' => 'ImageType',
        'mezzanine' => 'Mezzanine',
        'status' => 'Status',
        'storageLocation' => 'StorageLocation',
        'tags' => 'Tags',
        'title' => 'Title',
        'URL' => 'URL',
    ];

    public function validate()
    {
        if (null !== $this->mezzanine) {
            $this->mezzanine->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }

        if (null !== $this->cateName) {
            $res['CateName'] = $this->cateName;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }

        if (null !== $this->mezzanine) {
            $res['Mezzanine'] = null !== $this->mezzanine ? $this->mezzanine->toArray($noStream) : $this->mezzanine;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }

        if (isset($map['CateName'])) {
            $model->cateName = $map['CateName'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }

        if (isset($map['Mezzanine'])) {
            $model->mezzanine = mezzanine::fromMap($map['Mezzanine']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }

        return $model;
    }
}
